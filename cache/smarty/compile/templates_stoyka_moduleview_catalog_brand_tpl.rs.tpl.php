<?php /* Smarty version Smarty-3.1.18, created on 2016-07-16 10:34:52
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/catalog/brand.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6422697475789e39c16b9e0-77663479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57869fa8957f247bc6245c011217d2b5172a7a26' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/catalog/brand.tpl',
      1 => 1460365910,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '6422697475789e39c16b9e0-77663479',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shop_config' => 0,
    'brand' => 0,
    'dirs' => 0,
    'widthClass' => 0,
    'dir' => 0,
    'router' => 0,
    'products' => 0,
    'product' => 0,
    'imagelist' => 0,
    'image' => 0,
    'n' => 0,
    'spec' => 0,
    'main_image' => 0,
    'check_quantity' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5789e39c30e850_95731061',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5789e39c30e850_95731061')) {function content_5789e39c30e850_95731061($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
?><?php echo smarty_function_addjs(array('file'=>"jquery.changeoffer.js"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"jcarousel/jquery.jcarousel.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"list_product.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->tpl_vars['shop_config'] = new Smarty_variable(\RS\Config\Loader::byModule('shop'), null, 0);?>
<?php $_smarty_tpl->tpl_vars['check_quantity'] = new Smarty_variable($_smarty_tpl->tpl_vars['shop_config']->value->check_quantity, null, 0);?>

<div class="brandPage">
<div align='center'>
    <h1><?php echo $_smarty_tpl->tpl_vars['brand']->value['title'];?>
</h1>
</div>
    <article class="description">
       <?php if ($_smarty_tpl->tpl_vars['brand']->value['image']) {?> 
         <img src="<?php echo $_smarty_tpl->tpl_vars['brand']->value->__image->getUrl(250,250,'xy');?>
" class="mainImage" alt="<?php echo $_smarty_tpl->tpl_vars['brand']->value['title'];?>
"/> 
       <?php }?>
       <?php echo $_smarty_tpl->tpl_vars['brand']->value['description'];?>
 
    </article>
    <?php if (!empty($_smarty_tpl->tpl_vars['dirs']->value)) {?>
    
        <?php if (count($_smarty_tpl->tpl_vars['dirs']->value)<6) {?>
        <?php } elseif (count($_smarty_tpl->tpl_vars['dirs']->value)<15) {?>
           <?php $_smarty_tpl->tpl_vars['widthClass'] = new Smarty_variable("col2", null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['widthClass'] = new Smarty_variable("col3", null, 0);?>
        <?php }?>
    
        <div class="brandDirs">
            <h2><span>Категории товаров <?php echo $_smarty_tpl->tpl_vars['brand']->value['title'];?>
</span></h2>
            <ul class="cats <?php echo $_smarty_tpl->tpl_vars['widthClass']->value;?>
">
             <?php  $_smarty_tpl->tpl_vars['dir'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dir']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dirs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dir']->key => $_smarty_tpl->tpl_vars['dir']->value) {
$_smarty_tpl->tpl_vars['dir']->_loop = true;
?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('catalog-front-listproducts',array('category'=>$_smarty_tpl->tpl_vars['dir']->value['_alias'],'bfilter'=>array("brand"=>array($_smarty_tpl->tpl_vars['brand']->value['id']))));?>
"><?php echo $_smarty_tpl->tpl_vars['dir']->value['name'];?>
</a> <sup>(<?php echo $_smarty_tpl->tpl_vars['dir']->value['brands_cnt'];?>
)</sup>
                </li>
             <?php } ?>
            </ul>
        </div>
    <?php }?>
    
    <?php if (!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
       <div class="brand_products">
          <h2><span>Актуальные товары <?php echo $_smarty_tpl->tpl_vars['brand']->value['title'];?>
</span></h2>
          <div class="productWrap">
              <ul class="productList">  
                  <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                        <?php $_smarty_tpl->tpl_vars['imagelist'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getImages(false), null, 0);?>                
                        <li <?php echo $_smarty_tpl->tpl_vars['product']->value->getDebugAttributes();?>
 data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" class="<?php if (count($_smarty_tpl->tpl_vars['imagelist']->value)>1) {?>photoView<?php }?><?php if ($_smarty_tpl->tpl_vars['product']->value->isOffersUse()||$_smarty_tpl->tpl_vars['product']->value->isMultiOffersUse()) {?> showOfferSelect<?php }?>">
                            <div class="hoverBlock">
                                <div class="galleryWrap<?php if (count($_smarty_tpl->tpl_vars['imagelist']->value)>4) {?> scrollable<?php }?>">
                                    <a class="control up"></a>
                                    <div class="gallery">
                                        <ul class="list" id="list">
                                            <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['imagelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['image']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['n']->value = $_smarty_tpl->tpl_vars['image']->key;
 $_smarty_tpl->tpl_vars['image']->index++;
 $_smarty_tpl->tpl_vars['image']->first = $_smarty_tpl->tpl_vars['image']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["allphotos"]['first'] = $_smarty_tpl->tpl_vars['image']->first;
?>
                                            <li data-change-preview="<?php echo $_smarty_tpl->tpl_vars['image']->value->getUrl(141,185,'xy');?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['allphotos']['first']) {?>class="act"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['product']->value->getUrl();?>
#photo-<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
" class="imgWrap"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->getUrl(64,64,'xy');?>
"></a></li>
                                            <?php } ?>                            
                                        </ul>
                                    </div>
                                    <a class="control down"></a>
                                </div>
                            </div>                       
                            <div class="dataBlock">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value->getUrl();?>
" class="pic">
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
                                <?php $_smarty_tpl->tpl_vars['main_image'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getMainImage(), null, 0);?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['main_image']->value->getUrl(141,185,'xy');?>
" class="middlePreview" alt="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['main_image']->value['title'])===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['product']->value['title']) : $tmp);?>
"/></a>
                                <div class="info extra">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value->getUrl();?>
" class="titleGroup">
                                        <h3><?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
</h3>
                                    </a>
                                    <p class="group">
                                        <span class="scost"><?php echo $_smarty_tpl->tpl_vars['product']->value->getCost();?>
 <?php echo $_smarty_tpl->tpl_vars['product']->value->getCurrency();?>
</span>
                                        <span class="rating" title="рейтинг: <?php echo $_smarty_tpl->tpl_vars['product']->value->getRatingBall();?>
"><span class="value" style="width:<?php echo $_smarty_tpl->tpl_vars['product']->value->getRatingPercent();?>
%"></span></span>
                                        <br><span class="comments">оценок <?php echo $_smarty_tpl->tpl_vars['product']->value->getCommentsNum();?>
</span>
                                    </p>
                                </div>
                                
                                <?php if ($_smarty_tpl->tpl_vars['shop_config']->value) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value->shouldReserve()) {?>
                                        <a data-href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('shop-front-reservation',array("product_id"=>$_smarty_tpl->tpl_vars['product']->value['id']));?>
" class="cartButton inDialog reserv" title="Заказать">&nbsp;</a>
                                    <?php } else { ?>        
                                        <?php if ($_smarty_tpl->tpl_vars['check_quantity']->value&&$_smarty_tpl->tpl_vars['product']->value['num']<1) {?>
                                            <span class="cartButton unobt" title="Нет в наличии">&nbsp;</span>
                                        <?php } else { ?>
                                            <span data-href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('shop-front-multioffers',array("product_id"=>$_smarty_tpl->tpl_vars['product']->value['id']));?>
" class="cartButton showComplekt inDialog" title="В корзину">&nbsp;</span>
                                            <a data-href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('shop-front-cartpage',array("add"=>$_smarty_tpl->tpl_vars['product']->value['id']));?>
" class="cartButton addToCart noShowCart" title="В корзину">&nbsp;</a>
                                        <?php }?>
                                    <?php }?>
                                <?php }?>
                                <a class="compare<?php if ($_smarty_tpl->tpl_vars['product']->value->inCompareList()) {?> inCompare<?php }?>"><span>сравнить</span></a>
                            </div>
                        </li>
                  <?php } ?>
              </ul>
          </div>
       </div>
    <?php }?>   
</div><?php }} ?>
