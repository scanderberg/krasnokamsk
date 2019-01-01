<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 18:31:27
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/catalog/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174481696578901cfe21cb9-44077081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f01e17080475ecf9d562b9ee92f094cfa56b544b' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/catalog/product.tpl',
      1 => 1463079670,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '174481696578901cfe21cb9-44077081',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shop_config' => 0,
    'this_controller' => 0,
    'product' => 0,
    'spec' => 0,
    'main_image' => 0,
    'images' => 0,
    'image' => 0,
    'key' => 0,
    'offer_images' => 0,
    'level' => 0,
    'value' => 0,
    'offer' => 0,
    'check_quantity' => 0,
    'catalog_config' => 0,
    'last_price' => 0,
    'router' => 0,
    'stick_info' => 0,
    'warehouse' => 0,
    'sticks' => 0,
    'stick_range' => 0,
    'pkey' => 0,
    'pval' => 0,
    'data' => 0,
    'property' => 0,
    'prop_value' => 0,
    'files' => 0,
    'file' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_578901d08baf89_17658232',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578901d08baf89_17658232')) {function content_578901d08baf89_17658232($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
if (!is_callable('smarty_modifier_devnull')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/modifier.devnull.php';
if (!is_callable('smarty_function_moduleinsert')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.moduleinsert.php';
if (!is_callable('smarty_modifier_format_filesize')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/modifier.format_filesize.php';
?><?php echo smarty_function_addjs(array('file'=>"jcarousel/jquery.jcarousel.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"jquery.changeoffer.js?v=2"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"product.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->tpl_vars['shop_config'] = new Smarty_variable(\RS\Config\Loader::byModule('shop'), null, 0);?>
<?php $_smarty_tpl->tpl_vars['check_quantity'] = new Smarty_variable($_smarty_tpl->tpl_vars['shop_config']->value['check_quantity'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['catalog_config'] = new Smarty_variable($_smarty_tpl->tpl_vars['this_controller']->value->getModuleConfig(), null, 0);?> 

<div align="center">  
 
<section align="center" class="product productItem hproduct<?php if (!$_smarty_tpl->tpl_vars['product']->value->isAvailable()) {?> notAvaliable<?php }?><?php if ($_smarty_tpl->tpl_vars['product']->value->canBeReserved()) {?> canBeReserved<?php }?><?php if ($_smarty_tpl->tpl_vars['product']->value['reservation']=='forced') {?> forcedReserve<?php }?>" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
    <div class="image">

<?php echo smarty_modifier_devnull($_smarty_tpl->tpl_vars['product']->value->fillCategories());?>
	
<?php if ($_smarty_tpl->tpl_vars['product']->value->inDir('new')) {?>
<div class="productNew" style="margin-top: 40px;" ></div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['product']->value->inDir('popular')) {?>
<div class="productMoll" <?php if ($_smarty_tpl->tpl_vars['product']->value->inDir('new')) {?> style="margin-top: 70px;" <?php } else { ?> style="margin-top: 40px;" <?php }?> ></div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['product']->value->inDir('top')) {?>
<div class="productHit" <?php if ($_smarty_tpl->tpl_vars['product']->value->inDir('new')&&$_smarty_tpl->tpl_vars['product']->value->inDir('popular')) {?>} style="margin-top: 100px!important;" <?php } else { ?> style="margin-top: 40px;" <?php }?> <?php if ($_smarty_tpl->tpl_vars['product']->value->inDir('new')) {?> style="margin-top: 70px!important;" <?php }?> <?php if ($_smarty_tpl->tpl_vars['product']->value->inDir('popular')) {?> style="margin-top: 70px!important;" <?php }?> ></div>
<?php }?>
	
        <span class="labels">
            <?php  $_smarty_tpl->tpl_vars['spec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['spec']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value->getMySpecDir(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['spec']->key => $_smarty_tpl->tpl_vars['spec']->value) {
$_smarty_tpl->tpl_vars['spec']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['spec']->value['image']) {?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['spec']->value->__image->getUrl(62,62,'xy');?>
">
            <?php }?>
            <?php } ?>
        </span>
        
        <?php if (!$_smarty_tpl->tpl_vars['product']->value->hasImage()) {?>      
            <?php $_smarty_tpl->tpl_vars['main_image'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getMainImage(), null, 0);?>
            <span class="mainPicture"><img src="<?php echo $_smarty_tpl->tpl_vars['main_image']->value->getUrl(310,310,'xy');?>
" class="photo" alt="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['main_image']->value['title'])===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['product']->value['title']) : $tmp);?>
"/></span>
        <?php } else { ?>
            
            <?php $_smarty_tpl->tpl_vars['images'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getImages(), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value->isOffersUse()) {?>
               
               <?php $_smarty_tpl->tpl_vars['offer_images'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['offers']['items'][0]['photos_arr'], null, 0);?>  
            <?php }?>
            <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['image']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['image']->key;
 $_smarty_tpl->tpl_vars['image']->index++;
 $_smarty_tpl->tpl_vars['image']->first = $_smarty_tpl->tpl_vars['image']->index === 0;
?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['image']->value->getUrl(800,600,'xy');?>
" data-n="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
" class="photo mainPicture viewbox <?php if (($_smarty_tpl->tpl_vars['offer_images']->value&&($_smarty_tpl->tpl_vars['image']->value['id']!=$_smarty_tpl->tpl_vars['offer_images']->value[0]))||(!$_smarty_tpl->tpl_vars['offer_images']->value&&!$_smarty_tpl->tpl_vars['image']->first)) {?> hidden<?php }?>" <?php if (($_smarty_tpl->tpl_vars['offer_images']->value&&in_array($_smarty_tpl->tpl_vars['image']->value['id'],$_smarty_tpl->tpl_vars['offer_images']->value))||(!$_smarty_tpl->tpl_vars['offer_images']->value)) {?>rel="bigphotos"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->getUrl(310,310,'xy');?>
" alt="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['image']->value['title'])===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['product']->value['title'])." фото ".((string)($_smarty_tpl->tpl_vars['key']->value+1)) : $tmp);?>
"></a>
            <?php } ?>
            
            
            <?php if (count($_smarty_tpl->tpl_vars['images']->value)>1) {?>
            <div class="productGalleryWrap">
                <div class="gallery">
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value->getImages(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['image']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['image']->key;
 $_smarty_tpl->tpl_vars['image']->index++;
 $_smarty_tpl->tpl_vars['image']->first = $_smarty_tpl->tpl_vars['image']->index === 0;
?>
                        <li data-id="<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['offer_images']->value&&!in_array($_smarty_tpl->tpl_vars['image']->value['id'],$_smarty_tpl->tpl_vars['offer_images']->value)) {?>hidden<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['image']->value->getUrl(800,600,'xy');?>
" data-n="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" target="_blank" class="preview"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->getUrl(64,64);?>
"></a></li>
                        <?php } ?>
                    </ul>
                </div>
                <a class="control prev"></a>
                <a class="control next"></a>
             </div>        
             <?php }?>
        <?php }?>
    </div>
    
    <div class="inform" align="left">
<br><br>
<h1 class="fn"><?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
</h1>

            
            <div class="share">
                <div class="handler"></div>
                <div class="block">
                    <i class="corner"></i>
                    <p class="text">Поделиться:</p>
                    <script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
                    <script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
                    <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,twitter"></div>
                </div>
            </div>

        
        <?php echo $_smarty_tpl->tpl_vars['product']->value->fillOffersStockStars();?>

        
        
        <?php if ($_smarty_tpl->tpl_vars['product']->value->isMultiOffersUse()) {?>
            
            <div class="multiOffers" align="left">
                <span class="pname"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['product']->value['offer_caption'])===null||$tmp==='' ? 'Комплектация' : $tmp);?>
</span>
                
                <?php echo $_smarty_tpl->tpl_vars['product']->value->fillMultiOffersPhotos();?>

                
                <?php  $_smarty_tpl->tpl_vars['level'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['level']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['multioffers']['levels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['level']->key => $_smarty_tpl->tpl_vars['level']->value) {
$_smarty_tpl->tpl_vars['level']->_loop = true;
?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['level']->value['values'])) {?>
                        <div class="title"><?php if ($_smarty_tpl->tpl_vars['level']->value['title']) {?><?php echo $_smarty_tpl->tpl_vars['level']->value['title'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['level']->value['prop_title'];?>
<?php }?></div>
                        <?php if (!$_smarty_tpl->tpl_vars['level']->value['is_photo']&&!isset($_smarty_tpl->tpl_vars['level']->value['values_photos'])) {?> 
                            <select name="multioffers[<?php echo $_smarty_tpl->tpl_vars['level']->value['prop_id'];?>
]" data-prop-title="<?php if ($_smarty_tpl->tpl_vars['level']->value['title']) {?><?php echo $_smarty_tpl->tpl_vars['level']->value['title'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['level']->value['prop_title'];?>
<?php }?>">
                                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['level']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->index++;
 $_smarty_tpl->tpl_vars['value']->first = $_smarty_tpl->tpl_vars['value']->index === 0;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['val_str'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['val_str'];?>
</option>   
                                <?php } ?>
                            </select>
                        <?php } else { ?> 
                            <div class="multiOfferValues" align="left">
                                <input type="hidden" name="multioffers[<?php echo $_smarty_tpl->tpl_vars['level']->value['prop_id'];?>
]" data-prop-title="<?php if ($_smarty_tpl->tpl_vars['level']->value['title']) {?><?php echo $_smarty_tpl->tpl_vars['level']->value['title'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['level']->value['prop_title'];?>
<?php }?>"/>
                                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['level']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->index++;
 $_smarty_tpl->tpl_vars['value']->first = $_smarty_tpl->tpl_vars['value']->index === 0;
?>
                                    <?php if (isset($_smarty_tpl->tpl_vars['level']->value['values_photos'][$_smarty_tpl->tpl_vars['value']->value['val_str']])) {?>
                                        <a class="multiOfferValueBlock <?php if ($_smarty_tpl->tpl_vars['value']->first) {?>sel<?php }?>" data-value="<?php echo $_smarty_tpl->tpl_vars['value']->value['val_str'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['value']->value['val_str'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['level']->value['values_photos'][$_smarty_tpl->tpl_vars['value']->value['val_str']]->getUrl(40,40,'axy');?>
"/></a>
                                    <?php } else { ?>
                                        <a class="multiOfferValueBlock likeString <?php if ($_smarty_tpl->tpl_vars['value']->first) {?>sel<?php }?>" data-value="<?php echo $_smarty_tpl->tpl_vars['value']->value['val_str'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['value']->value['val_str'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['val_str'];?>
</a>
                                    <?php }?>
                                <?php } ?>
                            </div>
                        <?php }?>
                    <?php }?>
                <?php } ?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['product']->value->isOffersUse()) {?>
                <?php  $_smarty_tpl->tpl_vars['offer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['offer']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['offers']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['offer']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['offer']->key => $_smarty_tpl->tpl_vars['offer']->value) {
$_smarty_tpl->tpl_vars['offer']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['offer']->key;
 $_smarty_tpl->tpl_vars['offer']->index++;
 $_smarty_tpl->tpl_vars['offer']->first = $_smarty_tpl->tpl_vars['offer']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['offers']['first'] = $_smarty_tpl->tpl_vars['offer']->first;
?>
                    <input value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" type="hidden" name="hidden_offers" class="hidden_offers" <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['offers']['first']) {?>checked<?php }?> id="offer_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-info='<?php echo $_smarty_tpl->tpl_vars['offer']->value->getPropertiesJson();?>
' <?php if ($_smarty_tpl->tpl_vars['check_quantity']->value) {?>data-num="<?php echo $_smarty_tpl->tpl_vars['offer']->value['num'];?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['catalog_config']->value['use_offer_unit']) {?>data-unit="<?php echo $_smarty_tpl->tpl_vars['offer']->value->getUnit()->stitle;?>
"<?php }?> data-change-cost='{ ".offerBarcode": "<?php echo (($tmp = @$_smarty_tpl->tpl_vars['offer']->value['barcode'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['barcode'] : $tmp);?>
", ".myCost": "<?php echo $_smarty_tpl->tpl_vars['product']->value->getCost(null,$_smarty_tpl->tpl_vars['key']->value);?>
", ".lastPrice": "<?php echo $_smarty_tpl->tpl_vars['product']->value->getOldCost($_smarty_tpl->tpl_vars['key']->value);?>
"}' data-images='<?php echo $_smarty_tpl->tpl_vars['offer']->value->getPhotosJson();?>
' data-sticks='<?php echo $_smarty_tpl->tpl_vars['offer']->value->getStickJson();?>
'/>
                <?php } ?>
                
                <input type="hidden" name="offer" value="0"/>
            <?php }?>

        <?php } elseif ($_smarty_tpl->tpl_vars['product']->value->isOffersUse()) {?>
            
            <div class="packages" align="left">
                <div class="package" align="left">
                    <span class="pname"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['product']->value['offer_caption'])===null||$tmp==='' ? 'Комплектация' : $tmp);?>
</span>
                    <div class="values" align="left">
                        <?php if (count($_smarty_tpl->tpl_vars['product']->value['offers']['items'])>5) {?>
                            <select name="offer">
                                <?php  $_smarty_tpl->tpl_vars['offer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['offer']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['offers']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['offer']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['offer']->key => $_smarty_tpl->tpl_vars['offer']->value) {
$_smarty_tpl->tpl_vars['offer']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['offer']->key;
 $_smarty_tpl->tpl_vars['offer']->index++;
 $_smarty_tpl->tpl_vars['offer']->first = $_smarty_tpl->tpl_vars['offer']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['offers']['first'] = $_smarty_tpl->tpl_vars['offer']->first;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['offers']['first']) {?>checked<?php }?> <?php if ($_smarty_tpl->tpl_vars['check_quantity']->value) {?>data-num="<?php echo $_smarty_tpl->tpl_vars['offer']->value['num'];?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['catalog_config']->value['use_offer_unit']) {?>data-unit="<?php echo $_smarty_tpl->tpl_vars['offer']->value->getUnit()->stitle;?>
"<?php }?> data-change-cost='{ ".offerBarcode": "<?php echo (($tmp = @$_smarty_tpl->tpl_vars['offer']->value['barcode'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['barcode'] : $tmp);?>
", ".myCost": "<?php echo $_smarty_tpl->tpl_vars['product']->value->getCost(null,$_smarty_tpl->tpl_vars['key']->value);?>
", ".lastPrice": "<?php echo $_smarty_tpl->tpl_vars['product']->value->getOldCost($_smarty_tpl->tpl_vars['key']->value);?>
"}' data-images='<?php echo $_smarty_tpl->tpl_vars['offer']->value->getPhotosJson();?>
' data-sticks='<?php echo $_smarty_tpl->tpl_vars['offer']->value->getStickJson();?>
'><?php echo $_smarty_tpl->tpl_vars['offer']->value['title'];?>
</option>
                                <?php } ?>
                            </select>
                        <?php } else { ?>
                            <?php  $_smarty_tpl->tpl_vars['offer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['offer']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['offers']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['offer']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['offer']->key => $_smarty_tpl->tpl_vars['offer']->value) {
$_smarty_tpl->tpl_vars['offer']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['offer']->key;
 $_smarty_tpl->tpl_vars['offer']->index++;
 $_smarty_tpl->tpl_vars['offer']->first = $_smarty_tpl->tpl_vars['offer']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['offers']['first'] = $_smarty_tpl->tpl_vars['offer']->first;
?>
                                <div class="packageItem" align="left">
                                    <input value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" type="radio" name="offer" <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['offers']['first']) {?>checked<?php }?> id="offer_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['check_quantity']->value) {?>data-num="<?php echo $_smarty_tpl->tpl_vars['offer']->value['num'];?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['catalog_config']->value['use_offer_unit']) {?>data-unit="<?php echo $_smarty_tpl->tpl_vars['offer']->value->getUnit()->stitle;?>
"<?php }?> data-change-cost='{ ".offerBarcode": "<?php echo (($tmp = @$_smarty_tpl->tpl_vars['offer']->value['barcode'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['barcode'] : $tmp);?>
", ".myCost": "<?php echo $_smarty_tpl->tpl_vars['product']->value->getCost(null,$_smarty_tpl->tpl_vars['key']->value);?>
", ".lastPrice": "<?php echo $_smarty_tpl->tpl_vars['product']->value->getOldCost($_smarty_tpl->tpl_vars['key']->value);?>
"}' data-images='<?php echo $_smarty_tpl->tpl_vars['offer']->value->getPhotosJson();?>
' data-sticks='<?php echo $_smarty_tpl->tpl_vars['offer']->value->getStickJson();?>
'>
                                    <label for="offer_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['offer']->value['title'];?>
</label>
                                </div>
                            <?php } ?>
                        <?php }?>
                    </div>
                </div>
            </div><br>
        <?php }?>

        
        <div class="fcost" align="center" style="background-color: #2072bf!important;">
            <?php $_smarty_tpl->tpl_vars['last_price'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getOldCost(), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['last_price']->value>0) {?><div class="lastPrice"><?php echo $_smarty_tpl->tpl_vars['last_price']->value;?>
</div><?php }?>
            <span class="myCost price"><?php echo $_smarty_tpl->tpl_vars['product']->value->getCost();?>
</span> <?php echo $_smarty_tpl->tpl_vars['product']->value->getCurrency();?>

			</div>
			/ <?php echo $_smarty_tpl->tpl_vars['product']->value['offers']['items'][0]->getUnit()->stitle;?>
 - поставить можно в корзине.
        
        
        
        <?php if ($_smarty_tpl->tpl_vars['catalog_config']->value['use_offer_unit']&&$_smarty_tpl->tpl_vars['product']->value->isOffersUse()) {?>
            
        <?php }?>
		

<div class="productAction" style="margin-top: -20px!important;"> 
        
        <div class="mobileBasketLine" align="left">            
            <?php if ($_smarty_tpl->tpl_vars['shop_config']->value) {?>
                <a data-href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('shop-front-cartpage',array("add"=>$_smarty_tpl->tpl_vars['product']->value['id']));?>
" class="toBasket addToCart" id="bgProduct">в корзину</a>      
                <a data-href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('shop-front-reservation',array("product_id"=>$_smarty_tpl->tpl_vars['product']->value['id']));?>
" class="inDialog reserve hidden" id="bgProduct">заказать</a>
                <span class="unobtainable hidden">Нет в наличии</span>                                       
            <?php }?>

            <?php if (!$_smarty_tpl->tpl_vars['shop_config']->value||(!$_smarty_tpl->tpl_vars['product']->value->shouldReserve()&&(!$_smarty_tpl->tpl_vars['check_quantity']->value||$_smarty_tpl->tpl_vars['product']->value['num']>0))) {?>
                <?php if ($_smarty_tpl->tpl_vars['catalog_config']->value['buyinoneclick']) {?>
                    <a data-href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('catalog-front-oneclick',array("product_id"=>$_smarty_tpl->tpl_vars['product']->value['id'],"offer_id"=>0));?>
" title="Купить в 1 клик" class="oneclick buyOneClick inDialog" id="bgProduct">Купить в 1 клик</a>
                <?php }?>
            <?php }?>            
            <br>
            <a class="compare<?php if ($_smarty_tpl->tpl_vars['product']->value->inCompareList()) {?> inCompare<?php }?>"><span>сравнить</span></a>
        </div>                    
        <p class="descr"><?php echo nl2br($_smarty_tpl->tpl_vars['product']->value['short_description']);?>
</p>
        <div class="floatWrap basketLine" align="left">
            <?php if ($_smarty_tpl->tpl_vars['shop_config']->value) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('shop-front-cartpage',array("add"=>$_smarty_tpl->tpl_vars['product']->value['id']));?>
" class="toBasket addToCart" id="bgProduct">в корзину</a>      
                <span class="unobtainable hidden">Нет в наличии</span>                                       
                <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('shop-front-reservation',array("product_id"=>$_smarty_tpl->tpl_vars['product']->value['id']));?>
" class="inDialog reserve hidden">заказать</a>
            <?php }?>
            
            <?php if (!$_smarty_tpl->tpl_vars['shop_config']->value||(!$_smarty_tpl->tpl_vars['product']->value->shouldReserve()&&(!$_smarty_tpl->tpl_vars['check_quantity']->value||$_smarty_tpl->tpl_vars['product']->value['num']>0))) {?>
                <?php if ($_smarty_tpl->tpl_vars['catalog_config']->value['buyinoneclick']) {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('catalog-front-oneclick',array("product_id"=>$_smarty_tpl->tpl_vars['product']->value['id'],"offer_id"=>0));?>
" title="Купить в 1 клик" class="oneclick buyOneClick inDialog" id="bgProduct">Купить в 1 клик</a>
                <?php }?>
            <?php }?>

            
        </div>
		
</div>

<?php if ($_smarty_tpl->tpl_vars['product']->value->inDir('kirpich')) {?><br><span style="color: red!important; font-size: 14px!important;">Кирпич продается поддонами!</span><?php }?>
		
        <?php if ($_smarty_tpl->tpl_vars['product']->value['barcode']) {?>
        <p class="barcode" align="left"><span class="cap">Артикул:</span> <span class="offerBarcode"><?php echo $_smarty_tpl->tpl_vars['product']->value['barcode'];?>
</span></p>
        <?php }?>
		
		<ul class="listDop">
		<?php if ($_smarty_tpl->tpl_vars['product']->value->inDir('metalloprokat')) {?>
		<li>Металлические изделия - швеллеры, уголки, полосы, араматуру нарезать можно как угодно по желанию покупателя. Все эти детали с Вами обсудит наш менеджер после оформления заказа.</li>
		<?php }?>
		<li>Этот товар можно купить в кредит. Оформить его Вы сможете, выбрав соответствующий пункт при выборе способа оплаты в корзине.</li>
		</ul>
		<br>
        
        <?php if ($_smarty_tpl->tpl_vars['product']->value['brand_id']) {?>
        <p class="brand" align="left"><span class="cap">Производитель:</span> <a class="brandTitle" href="<?php echo $_smarty_tpl->tpl_vars['product']->value->getBrand()->getUrl();?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->getBrand()->title;?>
</a></p>
        <?php }?>                
        
        
        <?php $_smarty_tpl->tpl_vars['stick_info'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getWarehouseStickInfo(), null, 0);?>
        <?php if (!empty($_smarty_tpl->tpl_vars['stick_info']->value['warehouses'])) {?>
            <div class="warehouseDiv">
                <div class="title">Наличие:</div>
                <?php  $_smarty_tpl->tpl_vars['warehouse'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['warehouse']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stick_info']->value['warehouses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['warehouse']->key => $_smarty_tpl->tpl_vars['warehouse']->value) {
$_smarty_tpl->tpl_vars['warehouse']->_loop = true;
?>
                    <div class="warehouseRow" data-warehouse-id="<?php echo $_smarty_tpl->tpl_vars['warehouse']->value['id'];?>
">
                        <div class="stickWrap">
                        <?php  $_smarty_tpl->tpl_vars['stick_range'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stick_range']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stick_info']->value['stick_ranges']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stick_range']->key => $_smarty_tpl->tpl_vars['stick_range']->value) {
$_smarty_tpl->tpl_vars['stick_range']->_loop = true;
?>
                             <?php $_smarty_tpl->tpl_vars['sticks'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['offers']['items'][0]['sticks'][$_smarty_tpl->tpl_vars['warehouse']->value['id']], null, 0);?>
                             <span class="stick <?php if ($_smarty_tpl->tpl_vars['sticks']->value>=$_smarty_tpl->tpl_vars['stick_range']->value) {?>filled<?php }?>"></span>          
                        <?php } ?>
                        </div>
                        <a class="title" href="<?php echo $_smarty_tpl->tpl_vars['warehouse']->value->getUrl();?>
"><span><?php echo $_smarty_tpl->tpl_vars['warehouse']->value['title'];?>
</span></a>
                    </div>
                <?php } ?>
            </div>
        <?php }?>
        
    </div>            
    <br class="clearboth">
    <div class="properties">
        <?php  $_smarty_tpl->tpl_vars['offer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['offer']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['offers']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['offer']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['offer']->key => $_smarty_tpl->tpl_vars['offer']->value) {
$_smarty_tpl->tpl_vars['offer']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['offer']->key;
 $_smarty_tpl->tpl_vars['offer']->index++;
 $_smarty_tpl->tpl_vars['offer']->first = $_smarty_tpl->tpl_vars['offer']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['offers']['first'] = $_smarty_tpl->tpl_vars['offer']->first;
?>
        <?php if ($_smarty_tpl->tpl_vars['offer']->value['propsdata_arr']) {?>
        <div class="offerProperty<?php if ($_smarty_tpl->tpl_vars['key']->value>0) {?> hidden<?php }?>" data-offer="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
            <h2><span>Характеристики комплектации</span></h2>
            <table class="kv">
                <?php  $_smarty_tpl->tpl_vars['pval'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pval']->_loop = false;
 $_smarty_tpl->tpl_vars['pkey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['offer']->value['propsdata_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pval']->key => $_smarty_tpl->tpl_vars['pval']->value) {
$_smarty_tpl->tpl_vars['pval']->_loop = true;
 $_smarty_tpl->tpl_vars['pkey']->value = $_smarty_tpl->tpl_vars['pval']->key;
?>
                        <tr>
                            <td class="key"><span><?php echo $_smarty_tpl->tpl_vars['pkey']->value;?>
</span></td>
                            <td class="value"><?php echo $_smarty_tpl->tpl_vars['pval']->value;?>
</td>
                        </tr>
                <?php } ?>
            </table>
        </div>
        <?php }?>
        <?php } ?>
        
        <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value->fillProperty(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
        <?php if (!$_smarty_tpl->tpl_vars['data']->value['group']['hidden']) {?>
        <div class="propertyGroup">
            <h2><span><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['group']['title'])===null||$tmp==='' ? "Характеристики" : $tmp);?>
</span></h2>
            <table class="kv">
                <?php  $_smarty_tpl->tpl_vars['property'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['property']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['property']->key => $_smarty_tpl->tpl_vars['property']->value) {
$_smarty_tpl->tpl_vars['property']->_loop = true;
?>
                    <?php $_smarty_tpl->tpl_vars['prop_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['property']->value->textView(), null, 0);?>
                    <?php if (!$_smarty_tpl->tpl_vars['property']->value['hidden']&&!empty($_smarty_tpl->tpl_vars['prop_value']->value)) {?>
                        <tr>
                            <td class="key"><span><?php echo $_smarty_tpl->tpl_vars['property']->value['title'];?>
</span></td>
                            <td class="value"><?php echo $_smarty_tpl->tpl_vars['prop_value']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['property']->value['unit'];?>
</td>
                        </tr>
                    <?php }?>
                <?php } ?>
            </table>
        </div>
        <?php }?>
        <?php } ?>
    </div>
    
    <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['description'])) {?>
        <h2><span>Описание</span></h2>
        <article class="description" align="left">
            <?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>

        </article>
    <?php }?>
	
<div align="left" class="productOther">
	
        
        <?php if ($_smarty_tpl->tpl_vars['shop_config']->value) {?>	
<?php echo smarty_function_moduleinsert(array('name'=>"\Catalog\Controller\Block\Recommended",'indexTemplate'=>'blocks/recommended/recommended.tpl'),$_smarty_tpl,'/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/catalog/product.tpl');?>
		
			<?php echo smarty_function_moduleinsert(array('name'=>"\Catalog\Controller\Block\SameProducts",'indexTemplate'=>'blocks/sameproducts/same_products.tpl'),$_smarty_tpl,'/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/catalog/product.tpl');?>

			<?php echo smarty_function_moduleinsert(array('name'=>"\Catalog\Controller\Block\LastViewed",'indexTemplate'=>'blocks/lastviewed/products.tpl'),$_smarty_tpl,'/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/catalog/product.tpl');?>

        <?php }?>
		
</div>
		
    
    <?php if (!isset($_smarty_tpl->tpl_vars['files'])) $_smarty_tpl->tpl_vars['files'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['files']->value = $_smarty_tpl->tpl_vars['product']->value->getFiles()) {?>
    <div class="files" align="left">
        <h2><span>Файлы</span></h2>
        <ul class="filesList">
            <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['file']->value->getUrl();?>
"><?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
 (<?php echo smarty_modifier_format_filesize($_smarty_tpl->tpl_vars['file']->value['size']);?>
)</a>
                <?php if ($_smarty_tpl->tpl_vars['file']->value['description']) {?><div class="fileDescription"><?php echo $_smarty_tpl->tpl_vars['file']->value['description'];?>
</div><?php }?>
            </li>
            <?php } ?>
        </ul>
    </div>
    <?php }?>    
    
</section>
<div>  <?php }} ?>
