<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 19:44:08
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/show_complekts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1495070803578912d8586ee0-99447029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89465c58b7b1c13c3b4ec767ff17088c70bb0974' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/show_complekts.tpl',
      1 => 1459768205,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '1495070803578912d8586ee0-99447029',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shop_config' => 0,
    'product' => 0,
    'main_image' => 0,
    'last_price' => 0,
    'level' => 0,
    'value' => 0,
    'key' => 0,
    'offer' => 0,
    'check_quantity' => 0,
    'stick_info' => 0,
    'warehouse' => 0,
    'sticks' => 0,
    'stick_range' => 0,
    'router' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_578912d8842096_87399406',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578912d8842096_87399406')) {function content_578912d8842096_87399406($_smarty_tpl) {?><?php if (!is_callable('smarty_function_moduleinsert')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.moduleinsert.php';
?><?php $_smarty_tpl->tpl_vars['shop_config'] = new Smarty_variable(\RS\Config\Loader::byModule('shop'), null, 0);?>
<?php $_smarty_tpl->tpl_vars['check_quantity'] = new Smarty_variable($_smarty_tpl->tpl_vars['shop_config']->value['check_quantity'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['catalog_config'] = new Smarty_variable(\RS\Config\Loader::byModule('catalog'), null, 0);?> 

<h2 class="dialogTitle" data-dialog-options='{ "width": "734" }'>Выбор параметра товара</h2>

<div class="multiComplectations">
    <section class="productPreview<?php if (!$_smarty_tpl->tpl_vars['product']->value->isAvailable()) {?> notAvaliable<?php }?><?php if ($_smarty_tpl->tpl_vars['product']->value->canBeReserved()) {?> canBeReserved<?php }?><?php if ($_smarty_tpl->tpl_vars['product']->value['reservation']=='forced') {?> forcedReserve<?php }?>" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
        <h1 class="fn"><?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
</h1>
        
        <div class="leftColumn">
            <div class="image">
                <?php $_smarty_tpl->tpl_vars['main_image'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getMainImage(), null, 0);?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['main_image']->value->getUrl(310,310,'xy');?>
" class="photo" alt="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['main_image']->value['title'])===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['product']->value['title']) : $tmp);?>
"/>
            </div>
            <br class="clearboth">
            <?php if ($_smarty_tpl->tpl_vars['product']->value['barcode']) {?>
                <p class="barcode"><span class="cap">Артикул:</span> <span class="offerBarcode"><?php echo $_smarty_tpl->tpl_vars['product']->value['barcode'];?>
</span></p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['short_description']) {?>
                <p class="descr"><?php echo nl2br($_smarty_tpl->tpl_vars['product']->value['short_description']);?>
</p>
            <?php }?>
            <div class="fcost">
                <?php $_smarty_tpl->tpl_vars['last_price'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getOldCost(), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['last_price']->value>0) {?><div class="lastPrice"><?php echo $_smarty_tpl->tpl_vars['last_price']->value;?>
</div><?php }?>
                <span class="myCost price"><?php echo $_smarty_tpl->tpl_vars['product']->value->getCost();?>
</span> <?php echo $_smarty_tpl->tpl_vars['product']->value->getCurrency();?>

            </div>
        </div>
        
        
        <?php echo $_smarty_tpl->tpl_vars['product']->value->fillOffersStockStars();?>

        
        <div class="inform">
            <?php if ($_smarty_tpl->tpl_vars['product']->value->isMultiOffersUse()) {?>
                
                <span class="pname"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['product']->value['offer_caption'])===null||$tmp==='' ? 'Комплектация' : $tmp);?>
</span>
                
                <?php echo $_smarty_tpl->tpl_vars['product']->value->fillMultiOffersPhotos();?>

                
                <div class="multiOffers">
                    
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
                                <div class="multiOfferValues">
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
" data-image="<?php echo $_smarty_tpl->tpl_vars['level']->value['values_photos'][$_smarty_tpl->tpl_vars['value']->value['val_str']]->getUrl(310,310,'axy');?>
" data-is-dialog="1" title="<?php echo $_smarty_tpl->tpl_vars['value']->value['val_str'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['level']->value['values_photos'][$_smarty_tpl->tpl_vars['value']->value['val_str']]->getUrl(30,30,'axy');?>
"/></a>
                                        <?php } else { ?>
                                            <a class="multiOfferValueBlock likeString <?php if ($_smarty_tpl->tpl_vars['value']->first) {?>sel<?php }?>" data-value="<?php echo $_smarty_tpl->tpl_vars['value']->value['val_str'];?>
" data-is-dialog="1" title="<?php echo $_smarty_tpl->tpl_vars['value']->value['val_str'];?>
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
                
                <div class="packages">
                    <div class="package">
                        <span class="pname"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['product']->value['offer_caption'])===null||$tmp==='' ? 'Параметры' : $tmp);?>
</span>
                        <div class="values">
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
                                    <div class="packageItem">
                                        <input value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" type="radio" name="offer" <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['offers']['first']) {?>checked<?php }?> id="offer_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['check_quantity']->value) {?>data-num="<?php echo $_smarty_tpl->tpl_vars['offer']->value['num'];?>
"<?php }?> data-change-cost='{ ".offerBarcode": "<?php echo (($tmp = @$_smarty_tpl->tpl_vars['offer']->value['barcode'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['barcode'] : $tmp);?>
", ".myCost": "<?php echo $_smarty_tpl->tpl_vars['product']->value->getCost(null,$_smarty_tpl->tpl_vars['key']->value);?>
", ".lastPrice": "<?php echo $_smarty_tpl->tpl_vars['product']->value->getOldCost($_smarty_tpl->tpl_vars['key']->value);?>
"}' data-images='<?php echo $_smarty_tpl->tpl_vars['offer']->value->getPhotosJson();?>
' data-sticks='<?php echo $_smarty_tpl->tpl_vars['offer']->value->getStickJson();?>
'/>
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
            
            
            <?php echo smarty_function_moduleinsert(array('name'=>"\Shop\Controller\Block\Concomitant"),$_smarty_tpl,'/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/show_complekts.tpl');?>

            
            
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

            <div class="floatWrap basketLine">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('shop-front-cartpage',array("add"=>$_smarty_tpl->tpl_vars['product']->value['id']));?>
" class="toBasket addToCart noShowCart">в корзину</a>      
                    <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('shop-front-reservation',array("product_id"=>$_smarty_tpl->tpl_vars['product']->value['id']));?>
" class="inDialog reserve hidden">заказать</a>                    
                    <span class="unobtainable hidden">Нет в наличии</span>                   
            </div>
        </div>            
        <br class="clearboth">
        
    </section>
</div>


    <script type="text/javascript">
        $(function() {
            $('[name="offer"]').changeOffer();
        });
        $('.multiComplectations .addToCart').on('click',function(){
            $.colorbox.close();
        });
    </script>
<?php }} ?>
