<?php
/**
 * @package     Save.A.Pack
 * @subpackage  mod_amazon_list_products
 *
 * @copyright   Copyright (C) 2015 James Bolongan. All rights reserved.
 * @license     GNU General Public License version 2 or later; 
 */
 
require_once dirname(__FILE__) . '/lib/amazonlistproductsapi.php';
 
class ModAmazonListProductsHelper
{
	
	public static function getAjax() {
		jimport('joomla.application.module.helper');
		$input  = JFactory::getApplication()->input;

		if ($input->get('cmd')) {
			
			$amazon = new AmazonListProductsAPI();
			$itemid = $_POST['asin'];
			$HMAC = $_POST['HMAC'];
			$CartId = $_POST['CartId'];
			$qty = $_POST['qty'];
			$task = $_POST['task'];
			
			if($CartId == '')	{
				$options = array(
					'Item.1.ASIN' => $itemid,
					'Item.1.Quantity' => $qty,
				);
				$item = $amazon->CartCreate($options);
				ModAmazonListProductsHelper::display_amazon_product($item);
			}
			else	{
				if( $task == 'edit' )	{
					$options = array(
						'CartId' => $CartId,
						'HMAC' => $HMAC,
						'Item.1.CartItemId' => $itemid,
						'Item.1.Quantity' => $qty,
					);
					$item_modify = $amazon->CartModify($options);
					
					$err_msg = '';
					if($item_modify->Request->Errors)	{
						$err_msg = $item_modify->Request->Errors->Error->Message;
					}
					
					$options = array(
						'CartId' => $item_modify->CartId,
						'HMAC' => $item_modify->HMAC,
					);
					$item = $amazon->CartGet($options);
					ModAmazonListProductsHelper::display_amazon_product($item,$err_msg);
				}
				else if( $task == 'clear' )	{
					$datas = array();
					$datas['CartId'] = $CartId;
					$datas['HMAC'] = $HMAC;
					ModAmazonListProductsHelper::clear_amazon_cart($datas);
				}
				else	{
					$options = array(
						'CartId' => $CartId,
						'HMAC' => $HMAC,
						'Item.1.ASIN' => $itemid,
						'Item.1.Quantity' => $qty,
					);
					$item = $amazon->CartAdd($options);
					ModAmazonListProductsHelper::display_amazon_product($item);
				}
				
			}
		}
	}
	
	public static function clear_amazon_cart($datas)	{
		$amazon = new AmazonListProductsAPI();
		$options = array(
			'CartId' => $datas['CartId'],
			'HMAC' => $datas['HMAC'],
		);
		$item = $amazon->CartClear($options);
		ModAmazonListProductsHelper::display_amazon_product($item);
	}
	
	public static function get_amazon_cart($datas)	{
		$amazon = new AmazonListProductsAPI();
		$options = array(
			'CartId' => $datas['CartId'],
			'HMAC' => $datas['HMAC'],
		);
		$item = $amazon->CartGet($options);
		ModAmazonListProductsHelper::display_amazon_product($item);
	}	
	
	public static function display_amazon_product($item,$errMsg='')	{
		$amazon = new AmazonListProductsAPI();
		
		$res_string = '
		<div class="col-xs-12 col-md-12 well" style="margin-top:20px">
			<input type="hidden" name="CartId" id="CartId" value="'.$item->CartId.'" >
			<input type="hidden" name="HMAC" id="HMAC" value="'.$item->HMAC.'" >
			<input type="hidden" name="URLEncodedHMAC" id="URLEncodedHMAC" value="'.$item->URLEncodedHMAC.'" >
			<input type="hidden" name="PurchaseURL" id="PurchaseURL" value="'.$item->PurchaseURL.'" >';
			
			
			if($errMsg != '')
				$res_string .= '<p style="font-size:12px;padding:10px" class="btn-danger">'.$errMsg.'</p>';
			if($item->Request->Errors)
				$res_string .= '<p style="font-size:12px;padding:10px" class="btn-danger">'.$item->Request->Errors->Error->Message.'</p>';
			
			$res_string .= '<div>
								<div><label style="font-size:16px;">Your Shopping Cart</label></div>
								<div>
									<span style="float:left">							
										<span style="margin-left:20px;">
											<input type="button" class="btn btn-success" value="Clear Cart" onclick="addToAmazonCart(\'clear\',\'0\');"> <a href="'.$item->PurchaseURL.'">
											<input type="button" class="btn btn-primary" value="CHECKOUT"> </a> 
										</span>
									</span>
									<b style="float:right;">Total Price: '.$item->SubTotal->FormattedPrice.' </b>
								</div>
							</div>
							<div style="clear:both;"></div>
							';
			
				if( count($item->CartItems->CartItem) > 0 )	{

					foreach($item->CartItems->CartItem as $ind => $val)	{
						$ProductOptions = array(
							'ItemId' => $val->ASIN,
							'ResponseGroup' => 'Images'
						);
						$product_images = $amazon->itemLookup($ProductOptions);
						

						$res_string .= '<div class="col-xs-12 col-md-2 well"  style="margin:5px;" >
												<div><b>'.$val->Title.'</b></div>
												<div>('.$val->Price->FormattedPrice.')</div>
												
												<div style="padding-top:10px;padding-bottom:10px;"><img src="'.$product_images->MediumImage->URL.'" class="img-responsive" alt="'.$val->Title.'" title="'.$val->Title.'"></div>
												
												<div>Quantiy: <span id="qty_'.$val->CartItemId.'">'.$val->Quantity.'</span> </div>
												<div><b>Sub Total</b> '.$val->ItemTotal->FormattedPrice.' </div>
												<div>
												<input type="button" class="btn btn-success btn-xs" value="Edit" onclick="updateProduct(\''.$val->CartItemId.'\',\''.$val->Quantity.'\')"> <input type="button" class="btn btn-success btn-xs" value="Delete" onclick="addToAmazonCart(\'delete\',\''.$val->CartItemId.'\');"> 
												</div>
												
										</div>	';

					}
				}
				else	{
						$res_string .= 'No items on the cart.';
				}
				/*
				if(!$item->CartItems->CartItem)	{
						echo "Debug Result: ";
						echo '<pre>';
						print_r($item);
						echo '</pre>';
				}
				*/

			
		$res_string .= '</div>';
			
		echo $res_string;
	}
	
}