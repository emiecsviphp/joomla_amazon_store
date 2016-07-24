<?php
/**
 * @package     Save.A.Pack
 * @subpackage  mod_amazon_list_products
 *
 * @copyright   Copyright (C) 2015 James Bolongan. All rights reserved.
 * @license     GNU General Public License version 2 or later; 
 */
 
defined('_JEXEC') or die; ?>

<?php
$user = JFactory::getUser();
$userId = $user->get( 'id' );


$db =& JFactory::getDBO();
$query = 'SELECT * FROM #__sapmetrics WHERE `userid` = '.$userId.'';
$db->setQuery( $query );
$rows = $db->loadObjectList();

if(count($rows) > 0)	{
	$fullname = $rows[0]->fullname;
	$age = $rows[0]->age;
	$gender = $rows[0]->gender;
	$yrsinsmoke = $rows[0]->yrsinsmoke;
	$cigADay = $rows[0]->cigADay;
	$quitDate = $rows[0]->quitDate;
	$costOfPackCigarettes = $rows[0]->costOfPackCigarettes;
	$wouldlikeToBuy = $rows[0]->wouldlikeToBuy;
	$dateAdded = $rows[0]->dateAdded;
}
?>


<div id="response_cart">
	<input type="hidden" name="CartId" id="CartId" >
	<input type="hidden" name="HMAC" id="HMAC" >
	<input type="hidden" name="URLEncodedHMAC" id="URLEncodedHMAC" >
	<input type="hidden" name="PurchaseURL" id="PurchaseURL" >
</div>


<!-- 1st row -->
<div style="clear:both"></div>

<h1>Store</h1>

<div class="col-xs-12 col-md-2 product_div" >
	<label>Nicorette Nicotine Gum Fresh Mint 4mg 100 count</label>
	<iframe target="_blank" style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=qf_sp_asin_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B00062NVVW&asins=B00062NVVW&linkId=OXYDXRQNL45KOFXH&show_border=false&link_opens_in_new_window=false&price_color=000000&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B00062NVVW');">
</div>
<div class="col-xs-12 col-md-2 product_div" >
	<label>Nicorette Nicotine Gum White Ice Mint 4mg 100 count</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=qf_sp_asin_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B0021J0BL6&asins=B0021J0BL6&linkId=EADTQLDONNDCO3DR&show_border=false&link_opens_in_new_window=false&price_color=000000&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B0021J0BL6');">
</div>
<div class="col-xs-12 col-md-2 product_div" >
	<label>Nicorette Nicotine Gum  Fruit 4mg 100 Count</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=qf_sp_asin_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B001J0FIJI&asins=B001J0FIJI&linkId=KLFFII4G2ZR2TGQW&show_border=false&link_opens_in_new_window=false&price_color=000000&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B001J0FIJI');">
</div>
<div class="col-xs-12 col-md-2 product_div" >
	<label>Nicorette Nicotine Gum Cinnamon Surge 4mg 100 count</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=qf_sp_asin_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B000UALM20&asins=B000UALM20&linkId=SZVJRPEM7Q3SU7EV&show_border=false&link_opens_in_new_window=false&price_color=000000&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B000UALM20');">
</div>
<div class="col-xs-12 col-md-2 product_div" >
	<label>LifeSign QuitKey Smoking Cessation Computer</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=qf_sp_asin_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B000EY3IUG&asins=B000EY3IUG&linkId=CR36RKSVTMBFNIP2&show_border=false&link_opens_in_new_window=true&price_color=000000&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B000EY3IUG');">
</div>

<!-- 2nd row -->
<div style="clear:both"></div>

<div class="col-xs-12 col-md-2 product_div" >
	<label>Kirkland Signature Quit2 2mg Lozenge Mint 270 Count</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=qf_sp_asin_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B00O2P44EC&asins=B00O2P44EC&linkId=XG3LGW6LV3HXW7YA&show_border=false&link_opens_in_new_window=true&price_color=000000&title_color=34976A&bg_color=FFFFFF"></iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B00O2P44EC');">
</div>
<div class="col-xs-12 col-md-2 product_div" >
	<label>Kirkland Signature Quit4 4mg Lozenge Mint 270 Count</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=qf_sp_asin_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B00O2P7CGY&asins=B00O2P7CGY&linkId=46YJULV5BS4VP3SI&show_border=false&link_opens_in_new_window=true&price_color=000000&title_color=34976A&bg_color=FFFFFF"></iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B00O2P7CGY');">
</div>
<div class="col-xs-12 col-md-2 product_div" >
	<label>Kirkland Signature Quit Smoking Gum 2 mg 380 Count </label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=qf_sp_asin_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B008M2UWMY&asins=B008M2UWMY&linkId=WUEXKPQ3FPNDODC4&show_border=false&link_opens_in_new_window=true&price_color=000000&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B008M2UWMY');">
</div>
<div class="col-xs-12 col-md-2 product_div" >
	<label>Kirkland Signature Quit Smoking Gum 4 mg 380 Count </label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=qf_sp_asin_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B008M2VYOE&asins=B008M2VYOE&linkId=W2NHFCGDKEDMHP7L&show_border=false&link_opens_in_new_window=true&price_color=000000&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B008M2VYOE');">
</div>
<div class="col-xs-12 col-md-2 product_div" >
	<label>Beyond Nicotine 15 Day Quit Smoking Program Course</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=qf_sp_asin_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B00OSC7W8E&asins=B00OSC7W8E&linkId=EKSYSID2OKF4RZST&show_border=false&link_opens_in_new_window=true&price_color=000000&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B00OSC7W8E');">
</div>

<!-- 3rd row -->
<div style="clear:both"></div>

<div class="col-xs-12 col-md-2 product_div" >
	<label>NicoDerm CQ Clear Nicotine Patch 1st Step 21mg 14 count</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=qf_sp_asin_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B00008IHL1&asins=B00008IHL1&linkId=74ITHAMJGIGCGN4Y&show_border=false&link_opens_in_new_window=true&price_color=000000&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B00008IHL1');">
</div>
<div class="col-xs-12 col-md-2 product_div" >
	<label>NicoDerm CQ Clear Nicotine Patch 2nd Step  14mg 14 count</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=qf_sp_asin_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B0000536V8&asins=B0000536V8&linkId=ODAKE2T5XXKMQQLQ&show_border=false&link_opens_in_new_window=true&price_color=000000&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B0000536V8');">
</div>
<div class="col-xs-12 col-md-2 product_div" >
	<label>NicoDerm CQ Clear Nicotine Patch 3rd Step  7mg 14 count</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=qf_sp_asin_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B0000536V6&asins=B0000536V6&linkId=OCWXFINHVYLUF3IG&show_border=false&link_opens_in_new_window=true&price_color=000000&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B0000536V6');">
</div>
<div class="col-xs-12 col-md-2 product_div" >
	<label>Willpower For Dummies</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=qf_sp_asin_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=1118680030&asins=1118680030&linkId=RZXUYBPV76NGINXF&show_border=false&link_opens_in_new_window=true&price_color=000000&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','1118680030');">
</div>
<div class="col-xs-12 col-md-2 product_div" >
	<label>Super Stop Disposable Cigarette Filters - 20 - 30 Count Packs (600 Total)</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=qf_sp_asin_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B005FN5RPA&asins=B005FN5RPA&linkId=XAM4EKEIIYTVX7LY&show_border=false&link_opens_in_new_window=true&price_color=000000&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B005FN5RPA');">
</div>

<!-- 4th row -->
<div style="clear:both"></div>

<div class="col-xs-12 col-md-2 product_div" >
	<label>NicoDerm CQ Step 1 Clear Nicotine Patches</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=qf_sp_asin_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B00008IHL1&asins=B00008IHL1&linkId=2MTKSDWPPR7RBMV2&show_border=false&link_opens_in_new_window=false&price_color=000000&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B00008IHL1');">
</div>
<div class="col-xs-12 col-md-2 product_div" >
	<label>NicoDerm CQ Step 2 Clear Nicotine Patches</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=qf_sp_asin_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B0000536V8&asins=B0000536V8&linkId=JZUUVXTOOVML3ADL&show_border=false&link_opens_in_new_window=false&price_color=000000&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B0000536V8');">
</div>
<div class="col-xs-12 col-md-2 product_div" >
	<label>Nicoderm CQ Step 3 Clear Nicotine Patches</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=qf_sp_asin_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B0015RX0PY&asins=B0015RX0PY&linkId=YLG2NY6NWKW3XBYH&show_border=false&link_opens_in_new_window=false&price_color=000000&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B0015RX0PY');">
</div>
<div class="col-xs-12 col-md-2 product_div" >
	<label>GoodSense Mini Nicotine Polacrilex Lozenge, Mint, 2mg, 81 Count</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=ss_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B00DJOWQ7Y&asins=B00DJOWQ7Y&linkId=J4I7BOLLHLVAS33G&show_border=false&link_opens_in_new_window=true&price_color=333333&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B00DJOWQ7Y');">
</div>
<div class="col-xs-12 col-md-2 product_div" >
	<label>GoodSense Mini Nicotine Polacrilex Lozenge, Mint, 4mg, 81 Count</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=ss_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B00GJ6OFLE&asins=B00GJ6OFLE&linkId=EGBMPLTQFFGSUL27&show_border=true&link_opens_in_new_window=true&price_color=333333&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B00GJ6OFLE');">
</div>


<!-- 5th row -->
<div style="clear:both"></div>

<div class="col-xs-12 col-md-2 product_div" >
	<label>Lung Caner Screening</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=ss_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B018F1DIMC&asins=B018F1DIMC&linkId=HPYIUOD2O4QWUU6Z&show_border=true&link_opens_in_new_window=true&price_color=333333&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B018F1DIMC');">
</div>
<div class="col-xs-12 col-md-2 product_div" >
	<label>Crest 3d Teeth Whitestrips</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=ss_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B00336EUTK&asins=B00336EUTK&linkId=VZNQBHMA2N4F4KPG&show_border=true&link_opens_in_new_window=true&price_color=333333&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B00336EUTK');">
</div>
<div class="col-xs-12 col-md-2 product_div" >
	<label>The Kerry Gaynor Method to Quit Smoking</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=ss_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B00JFHYMBW&asins=B00JFHYMBW&linkId=MHRJ3MRR73KJYREA&show_border=true&link_opens_in_new_window=true&price_color=333333&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B00JFHYMBW');">
</div>
<div class="col-xs-12 col-md-2 product_div" >
	<label>Denicotea Cigarette Holder Filters - Box of 50</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=ss_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B002FA989W&asins=B002FA989W&linkId=3BH3Y7SBEISWJXA3&show_border=true&link_opens_in_new_window=true&price_color=333333&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B002FA989W');">
</div>
<div class="col-xs-12 col-md-2 product_div" >
	<label>Thursday Plantation Tea Tree Original Chewing Sticks Dual Pack (200 Total)</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=ss_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B000JI521U&asins=B000JI521U&linkId=SFBJL32RN5AJY5RN&show_border=true&link_opens_in_new_window=true&price_color=333333&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B000JI521U');">
</div>

<!-- 6th row -->
<div style="clear:both"></div>

<div class="col-xs-12 col-md-2 product_div" >
	<label>Habitrol Nicotine Quit Fruit Flavor Smoking Gum, 2mg</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=qf_sp_asin_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B000UDFDBI&asins=B000UDFDBI&linkId=EJKBYXPD4ZWIPSLN&show_border=false&link_opens_in_new_window=true&price_color=000000&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B000UDFDBI');">
</div>
<div class="col-xs-12 col-md-2 product_div" >
	<label>Habitrol Nicotine Quit Mint Flavor Smoking Gun 4mg</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=qf_sp_asin_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B000UD7P1E&asins=B000UD7P1E&linkId=USCYKQCO2KJXJLQ6&show_border=false&link_opens_in_new_window=true&price_color=000000&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B000UD7P1E');">
</div>
<div class="col-xs-12 col-md-2 product_div" >
	<label>Become a Non-Smoker (The Hypnosis Program)</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=ss_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B00IUZX7QG&asins=B00IUZX7QG&linkId=DMC3QJRW7ECYNS63&show_border=true&link_opens_in_new_window=true&price_color=333333&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B00IUZX7QG');">
</div>
<div class="col-xs-12 col-md-2 product_div" >
	<label>Stop Smoking! Acupressure Vaccaria Ear Seeds (100 Pack)</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=ss_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B00ZQNCBDU&asins=B00ZQNCBDU&linkId=QA2EFLNOCNRUTSLX&show_border=true&link_opens_in_new_window=true&price_color=333333&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B00ZQNCBDU');">
</div>
<div class="col-xs-12 col-md-2 product_div" >
	<label>Allen Carr's Easy Way to Stop Smoking</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=ss_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=0615482155&asins=0615482155&linkId=IRTVAIZT33WWMWO6&show_border=true&link_opens_in_new_window=true&price_color=333333&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','0615482155');">
</div>

<!-- 7th row -->
<div style="clear:both"></div>

<div class="col-xs-12 col-md-2 product_div" >
	<label>Allen Carr's Easy Way to Stop Smoking Freedom Quit Smoking, Nicotine Craving Control Spray </label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=ss_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B00T5SVBQU&asins=B00T5SVBQU&linkId=HMLFOJUYHLIAH73K&show_border=true&link_opens_in_new_window=true&price_color=333333&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B00T5SVBQU');">
</div>
<div class="col-xs-12 col-md-2 product_div" >
	<label>Quit Support Detox Capsules</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=ss_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B00TREX1RY&asins=B00TREX1RY&linkId=WCYCTT54FZ2W2GBE&show_border=true&link_opens_in_new_window=true&price_color=333333&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B00TREX1RY');">
</div>
<div class="col-xs-12 col-md-2 product_div" >
	<label>Quit Support Starter Kit</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=ss_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B00ZAUOZ74&asins=B00ZAUOZ74&linkId=U3NJW3B6CJEZJAKR&show_border=true&link_opens_in_new_window=true&price_color=333333&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B00ZAUOZ74');">
</div>
<div class="col-xs-12 col-md-2 product_div" >
	<label>Smoking Cessation DVD</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=ss_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B000H8RZVM&asins=B000H8RZVM&linkId=BUMS22IEW6BKBDYX&show_border=true&link_opens_in_new_window=true&price_color=333333&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B000H8RZVM');">
</div>
<div class="col-xs-12 col-md-2 product_div" >
	<label>Quit Tea Pack</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=ss_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B00OBY2FFY&asins=B00OBY2FFY&linkId=52EFLB6HYO7PYSNM&show_border=true&link_opens_in_new_window=true&price_color=333333&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B00OBY2FFY');">
</div>

<!-- 8th row -->
<div style="clear:both"></div>

<div class="col-xs-12 col-md-2 product_div" >
	<label>The Smoke-Free Smoke Break</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=qf_sp_asin_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=1608820017&asins=1608820017&linkId=Q6ZIQC6CQHUMGVNX&show_border=false&link_opens_in_new_window=true&price_color=000000&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','1608820017');">
</div>
<div class="col-xs-12 col-md-2 product_div" >
	<label>Hypnotically Enhanced Treatment for Addictions</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=qf_sp_asin_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=0982357362&asins=0982357362&linkId=GX4SYNNK3J3PSH2U&show_border=false&link_opens_in_new_window=true&price_color=000000&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','0982357362');">
</div>
<div class="col-xs-12 col-md-2 product_div" >
	<label>V-Meds - Nano Mist Lung Cleanse Therapy Kit</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=qf_sp_asin_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B00MR12L4S&asins=B00MR12L4S&linkId=A2EOY34UAZ2OY56V&show_border=false&link_opens_in_new_window=true&price_color=000000&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B00MR12L4S');">
</div>
<div class="col-xs-12 col-md-2 product_div" >
	<label>Smoking Cessation with Weight Gain Prevention</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=qf_sp_asin_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=019531400X&asins=019531400X&linkId=ESVDFBQ2NYYWWXNU&show_border=false&link_opens_in_new_window=true&price_color=000000&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','019531400X');">
</div>
<div class="col-xs-12 col-md-2 product_div" >
	<label>Freedom Quit Smoking System, Quit Smoking Naturally</label>
	<iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=qf_sp_asin_til&ad_type=product_link&tracking_id=saapa05-20&marketplace=amazon&region=US&placement=B00D3SON6I&asins=B00D3SON6I&linkId=TNYIM3YI6A53FBME&show_border=false&link_opens_in_new_window=true&price_color=000000&title_color=34976A&bg_color=FFFFFF">
	</iframe>
	<br>
	<input type="button" value="Add to cart" class="btn btn-success btn-xs" onclick="addToAmazonCart('add','B00D3SON6I');">
</div>

<!-- 8th row -->
<div style="clear:both"></div>


<div class="col-xs-12 col-md-12" align="center">
	<div class="col-xs-12 col-md-4"></div>
	<div class="col-xs-12 col-md-2 product_div">
	<iframe src="http://rcm-na.amazon-adsystem.com/e/cm?t=saapa05-20&o=1&p=20&l=ur1&category=primemain&banner=0PC0CRJ25SSK7HFZQKG2&f=ifr&linkID=XGYEXZHIRR43IRJO" width="120" height="90" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
	</div>
</div>

<div style="clear:both"></div>

<?php
$document = JFactory::getDocument();
$document->addStyleSheet( Juri::base() . 'modules/mod_amazon_list_products/css/validationEngine.jquery.css' );
$document->addScript( Juri::base() . 'modules/mod_amazon_list_products/js/jquery.validationEngine-en.js');
$document->addScript( Juri::base() . 'modules/mod_amazon_list_products/js/jquery.validationEngine.js');
$document->addScript( Juri::base() . 'modules/mod_amazon_list_products/js/jquery.blockUI.js');
?>


<script>
	jQuery("#amazon_form").validationEngine('attach',{promptPosition : "topLeft", scroll: false});

	function addToAmazonCart(task,product_asin)	{		
			var CartId = jQuery('#CartId').val();
			var HMAC = jQuery('#HMAC').val();
			
			if(task == 'edit')	{
				var qty = jQuery('#'+product_asin+'_qty_value').val();
				if( !isInt(qty) || qty < 0 )	{
					alert('Please provide a valid quantity.');
					return false;
				}	
			}
			else if(task == 'delete')	{
				var qty = 0;
				task = 'edit';
			}
			else	{
				var qty = 1;
			}
			
			processingWindow('Processing...'); // function from module misc
			
			var	action  = jQuery(this).attr('class'),
				request = {
						'option' 	: 'com_ajax',
						'module' 	: 'amazon_list_products',
						'cmd'    	: 'add',
						'format'    : 'raw',	//[json|debug|raw]
						'asin'    	: product_asin,
						'qty'		: qty,
						'CartId'    : CartId,
						'HMAC'    : HMAC,
						'task'    : task,
					};
			jQuery.ajax({
				type   : 'POST',
				data   : request,
				success: function (response) {
					
					//console.log(response);
					
					//var json_result = JSON.parse(response);
					//jQuery('#CartId').val(json_result.CartId);
					//jQuery('#HMAC').val(json_result.HMAC);
					//jQuery('#URLEncodedHMAC').val(json_result.URLEncodedHMAC);
					//jQuery('#PurchaseURL').val(json_result.PurchaseURL);					
					/*
					if(response == 1)	{
						var response_message = '<span style="font-weight:bold;">Item Successfully added to your cart. </span>';
					}
					else 	{
						var response_message = '<span style="font-weight:bold;color:red;">Cant add an item</span><br><a onclick="jQuery.unblockUI();" style="cursor:pointer;color:#fff">Close</a>';
					}
					processingWindow(response_message); // function from module misc
					*/
					
					jQuery.unblockUI();
					jQuery('#response_cart').html(response);
					
				},
				error: function(response) {
					//console.log(response);
					var response_message = '<span style="color:red;font-weight:bold;"> There were error when adding an item to your card. </span><br><a onclick="jQuery.unblockUI();" style="cursor:pointer;color:#fff">Close</a>';
					processingWindow(response_message); // function from module misc
					var data = '',
						obj = jQuery.parseJSON(response.responseText);
					for(key in obj){
						data = data + ' ' + obj[key] + '<br/>';
					}
					jQuery('.status').html(data);
				}
			});
			
	}
	
	function updateProduct(itemID,qty)	{
		var str = '\
			<div class="">\
			<form action="#" method="post" id="amazon_form" name="amazon_form" class="form-validate">\
				<div class="form-group"><input type="text" size="1" class="form-control validate[required,custom[number]]" value="'+qty+'" id="'+itemID+'_qty_value"></div>\
				<input type="button" class="btn btn-success btn-xs" value="Save" onclick="addToAmazonCart(\'edit\',\''+itemID+'\');"">\
				<input type="button" class="btn btn-success btn-xs" value="Cancel" onclick="cancelProduct(\''+itemID+'\',\''+qty+'\');"">\
			</form>\
			</div>\
		';
		jQuery('#qty_'+itemID).html(str);
	}
	
	function cancelProduct(itemID,qty)	{
		jQuery('#qty_'+itemID).html(qty);
	}
	
	function isInt(n) {
	   return n % 1 === 0;
	}
</script>

<style type="text/css">
	.product_div	{
		border:1px solid;
		padding:20px 10px;
		text-align:center;
		margin:10px;
	}
	
	.bottom i {
		background: transparent none repeat scroll 0 0;
		border: 1px solid #c3b697;
		border-radius: 100px;
		color: #929292;
		font-size: 20px;
		height: 31px;
		padding-top: 6px;
		width: 31px;
	}
	.fa {
		display: inline-block;
		font-family: FontAwesome;
		font-style: normal;
		font-weight: normal;
		line-height: 1;
	}
	
	@media only screen and (max-width: 800px) {
		.hidden-800 {
			display: none !important;
		}
	}
	
</style>