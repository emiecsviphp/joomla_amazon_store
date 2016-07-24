<?php
/**
 * @package     Save.A.Pack
 * @subpackage  mod_amazon_list_products
 *
 * @copyright   Copyright (C) 2015 James Bolongan. All rights reserved.
 * @license     GNU General Public License version 2 or later; 
 */
 
class AmazonListProductsAPI	{
	
    protected $_awsAccessKeyId;
	protected $_awsSecretAccessKeyId = null;
	protected $_associateTag = null;
    protected $_baseUri = null;
	protected $_baseUriList = array('ca' => 'http://ecs.amazonaws.ca',
									'cn' => 'http://webservices.amazon.cn',
							        'de' => 'http://ecs.amazonaws.de',
							        'fr' => 'http://ecs.amazonaws.fr',
							        'it' => 'http://webservices.amazon.it',							         
							        'jp' => 'http://ecs.amazonaws.jp',
									'es' => 'http://webservices.amazon.es',
									'uk' => 'http://ecs.amazonaws.co.uk',
									'us' => 'http://ecs.amazonaws.com');
	 
	 function __construct() {
    	$this->_awsAccessKeyId = 'AKIAII4UPMQ2G5KENKYA';
    	$this->_awsSecretAccessKeyId = 'UcAqp6kNDWnACNxyXIby75FreGVYm2dLos8QTwwZ';
    	$this->_associateTag = 'saapa05-20';
    	$countryCode = 'us';
        if (!isset($this->_baseUriList[$countryCode]))	{
            throw new Exception("Unknown country code: $countryCode");
        }
        $this->_baseUri = $this->_baseUriList[$countryCode];  	
	 }
	 
	 private function sendToAmazon($params)	{
	    $method = "GET";
	    $host = parse_url($this->_baseUri, PHP_URL_HOST);
	    $path = "/onca/xml";
		
	    $params["Service"] = "AWSECommerceService";
	    $params["AWSAccessKeyId"] = $this->_awsAccessKeyId;
	    $params["AssociateTag"] = $this->_associateTag;
	    $params["Timestamp"] = gmdate("Y-m-d\TH:i:s\Z");
	    $params["Version"] = "2011-08-01";
	 
	    ksort($params);

		$requestParams = array();
		foreach(array_keys($params) as $key)	{
			$requestParams[] = rawurlencode($key).'='.rawurlencode($params[$key]);
		}
		
		$requestParams = implode("&", $requestParams);
	 
	    $signStr = $method."\n".$host."\n".$path."\n".$requestParams;
	    $signature = base64_encode(hash_hmac("sha256", $signStr, $this->_awsSecretAccessKeyId, True));
	    $signature = rawurlencode($signature);
	 
	    $request = "http://".$host.$path."?".$requestParams."&Signature=".$signature;
		
		$session = curl_init($request);
		curl_setopt($session, CURLOPT_HEADER, false);
		curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($session);
		curl_close($session);
	 	
	    if (!$response)
	        return false;
	    else	{
	        $pxml = simplexml_load_string($response);
			return $pxml;
	    }
	 }
	 
	 public function itemLookup($options, $throwException = true)		{
		$options['Operation'] = 'ItemLookup';
		
		if(!isset($options['IdType']))
			$options['IdType'] = 'ASIN';
		
		if(!isset($options['ResponseGroup']))	{
			$options['ResponseGroup'] = 'Large,Similarities,Reviews,VariationSummary,EditorialReview';
			$options['TruncateReviewsAt'] = '200';
		}
		
		$pxml = $this->sendToAmazon($options);
		if (!$pxml && $throwException)	
		    throw new Exception("An error occured lookup a product.");
		else
			return $pxml->Items->Item[0];
	 }

	 public function CartCreate($options, $throwException = true)		{
		$options['Operation'] = 'CartCreate';
		$pxml = $this->sendToAmazon($options);
		if (!$pxml && $throwException)	
		    throw new Exception("An error occured cart create.");
		else
			return $pxml->Cart;
	 }
	 
	 public function CartGet($options, $throwException = true)		{
		$options['Operation'] = 'CartGet';
		$pxml = $this->sendToAmazon($options);
		if (!$pxml && $throwException)	
		    throw new Exception("An error occured cart get.");
		else
			return $pxml->Cart;
	 }
	 
	 public function CartAdd($options, $throwException = true)		{
		$options['Operation'] = 'CartAdd';
		$pxml = $this->sendToAmazon($options);
		if (!$pxml && $throwException)	
		    throw new Exception("An error occured cart add.");
		else
			return $pxml->Cart;
	 }
	 
	 public function CartModify($options, $throwException = true)		{
		$options['Operation'] = 'CartModify';
		$pxml = $this->sendToAmazon($options);
		if (!$pxml && $throwException)	
		    throw new Exception("An error occured cart edit.");
		else
			return $pxml->Cart;
	 }	 

	 public function CartClear($options, $throwException = true)		{
		$options['Operation'] = 'CartClear';
		$pxml = $this->sendToAmazon($options);
		if (!$pxml && $throwException)	
		    throw new Exception("An error occured cart create.");
		else
			return $pxml->Cart;
	 }
	 
}
