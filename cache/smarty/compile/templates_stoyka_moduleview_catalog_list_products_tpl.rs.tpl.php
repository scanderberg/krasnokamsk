<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 16:27:22
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/catalog/list_products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10089354675788e4ba9b31c8-82906074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0007e6a59f312756afe65785d6e2b64f877dc36' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/catalog/list_products.tpl',
      1 => 1462818311,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '10089354675788e4ba9b31c8-82906074',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shop_config' => 0,
    'list' => 0,
    'this_controller' => 0,
    'no_query_error' => 0,
    'category' => 0,
    'sub_dirs' => 0,
    'query' => 0,
    'dir_id' => 0,
    'one_dir' => 0,
    'item' => 0,
    'cur_sort' => 0,
    'sort' => 0,
    'cur_n' => 0,
    'can_rank_sort' => 0,
    'view_as' => 0,
    'product' => 0,
    'imagelist' => 0,
    'image' => 0,
    'n' => 0,
    'spec' => 0,
    'main_image' => 0,
    'router' => 0,
    'check_quantity' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788e4bac3e8f5_58335210',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788e4bac3e8f5_58335210')) {function content_5788e4bac3e8f5_58335210($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
if (!is_callable('smarty_function_urlmake')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.urlmake.php';
if (!is_callable('smarty_modifier_devnull')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/modifier.devnull.php';
?><?php echo smarty_function_addjs(array('file'=>"jquery.changeoffer.js?v=2"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"jcarousel/jquery.jcarousel.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"list_product.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->tpl_vars['shop_config'] = new Smarty_variable(\RS\Config\Loader::byModule('shop'), null, 0);?>
<?php $_smarty_tpl->tpl_vars['check_quantity'] = new Smarty_variable($_smarty_tpl->tpl_vars['shop_config']->value->check_quantity, null, 0);?>
<?php $_smarty_tpl->tpl_vars['list'] = new Smarty_variable($_smarty_tpl->tpl_vars['this_controller']->value->api->addProductsMultiOffersInfo($_smarty_tpl->tpl_vars['list']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['list'] = new Smarty_variable($_smarty_tpl->tpl_vars['this_controller']->value->api->addProductsDirs($_smarty_tpl->tpl_vars['list']->value), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['no_query_error']->value) {?>
<div class="noQuery">
    Не задан поисковый запрос
</div>      
<?php } else { ?>
<div align='center' class="catProducts">
<h1 style='font-size: 20px!important;'><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</h1>
<br>
<div id="products" <?php if ($_smarty_tpl->tpl_vars['shop_config']->value) {?>class="shopVersion"<?php }?>>
    <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?><div class="categoryDescription" align='left'><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div><?php }?>
    <?php if (count($_smarty_tpl->tpl_vars['sub_dirs']->value)) {?><?php $_smarty_tpl->tpl_vars['one_dir'] = new Smarty_variable(reset($_smarty_tpl->tpl_vars['sub_dirs']->value), null, 0);?><?php }?>
    <?php if (empty($_smarty_tpl->tpl_vars['query']->value)||(count($_smarty_tpl->tpl_vars['sub_dirs']->value)&&$_smarty_tpl->tpl_vars['dir_id']->value!=$_smarty_tpl->tpl_vars['one_dir']->value['id'])) {?>
    <nav class="subCategory">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sub_dirs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <a href="<?php echo smarty_function_urlmake(array('category'=>$_smarty_tpl->tpl_vars['item']->value['_alias'],'p'=>null,'f'=>null,'bfilter'=>null),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
        <?php } ?>
    </nav>
    <?php }?>

    <?php if (count($_smarty_tpl->tpl_vars['list']->value)) {?>
    <div class="viewOptions">
               
        Сортировать по:&nbsp;&nbsp;                  
        <span class="lineListBlock sortBlock">
            <a class="lineTrigger rs-parent-switcher"><?php if ($_smarty_tpl->tpl_vars['cur_sort']->value=='dateof') {?>по дате
                                                      <?php } elseif ($_smarty_tpl->tpl_vars['cur_sort']->value=='rating') {?>популярности
                                                      <?php } elseif ($_smarty_tpl->tpl_vars['cur_sort']->value=='title') {?>названию
                                                      <?php } elseif ($_smarty_tpl->tpl_vars['cur_sort']->value=='num') {?>наличию
                                                      <?php } elseif ($_smarty_tpl->tpl_vars['cur_sort']->value=='rank') {?>релевантности
                                                      <?php } else { ?>цене<?php }?></a>
            <ul class="lineList">
                <li><a href="<?php echo smarty_function_urlmake(array('sort'=>"cost",'nsort'=>$_smarty_tpl->tpl_vars['sort']->value['cost']),$_smarty_tpl);?>
" class="item<?php if ($_smarty_tpl->tpl_vars['cur_sort']->value=='cost') {?> <?php echo $_smarty_tpl->tpl_vars['cur_n']->value;?>
<?php }?>" rel="nofollow"><i>цене</i></a></li>
                <li><a href="<?php echo smarty_function_urlmake(array('sort'=>"rating",'nsort'=>$_smarty_tpl->tpl_vars['sort']->value['rating']),$_smarty_tpl);?>
" class="item<?php if ($_smarty_tpl->tpl_vars['cur_sort']->value=='rating') {?> <?php echo $_smarty_tpl->tpl_vars['cur_n']->value;?>
<?php }?>" rel="nofollow"><i>популярности</i></a></li>
                <li><a href="<?php echo smarty_function_urlmake(array('sort'=>"dateof",'nsort'=>$_smarty_tpl->tpl_vars['sort']->value['dateof']),$_smarty_tpl);?>
" class="item<?php if ($_smarty_tpl->tpl_vars['cur_sort']->value=='dateof') {?> <?php echo $_smarty_tpl->tpl_vars['cur_n']->value;?>
<?php }?>" rel="nofollow"><i>дате</i></a></li>
                <li><a href="<?php echo smarty_function_urlmake(array('sort'=>"num",'nsort'=>$_smarty_tpl->tpl_vars['sort']->value['num']),$_smarty_tpl);?>
" class="item<?php if ($_smarty_tpl->tpl_vars['cur_sort']->value=='num') {?> <?php echo $_smarty_tpl->tpl_vars['cur_n']->value;?>
<?php }?>" rel="nofollow"><i>наличию</i></a></li>
                <li><a href="<?php echo smarty_function_urlmake(array('sort'=>"title",'nsort'=>$_smarty_tpl->tpl_vars['sort']->value['title']),$_smarty_tpl);?>
" class="item<?php if ($_smarty_tpl->tpl_vars['cur_sort']->value=='title') {?> <?php echo $_smarty_tpl->tpl_vars['cur_n']->value;?>
<?php }?>" rel="nofollow"><i>названию</i></a></li>
                <?php if ($_smarty_tpl->tpl_vars['can_rank_sort']->value) {?>
                <li><a href="<?php echo smarty_function_urlmake(array('sort'=>"rank",'nsort'=>$_smarty_tpl->tpl_vars['sort']->value['rank']),$_smarty_tpl);?>
" class="item<?php if ($_smarty_tpl->tpl_vars['cur_sort']->value=='rank') {?> <?php echo $_smarty_tpl->tpl_vars['cur_n']->value;?>
<?php }?>" rel="nofollow"><i>релевантности</i></a></li>
                <?php }?>
            </ul>
        </span>
    </div>

    <div class="pages-line before">

		<div class="paginatorOffset" align='center'>
        <?php echo $_smarty_tpl->getSubTemplate ("%THEME%/paginator.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
        <div class="clearboth"></div>
    </div>

    <section class="topProducts">
        <div class="productWrap">
            <?php if ($_smarty_tpl->tpl_vars['view_as']->value=='blocks') {?>
            <ul class="productList">
                <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                    <?php $_smarty_tpl->tpl_vars['imagelist'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getImages(false), null, 0);?>                
                    <li <?php echo $_smarty_tpl->tpl_vars['product']->value->getDebugAttributes();?>
 data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" class="<?php if (count($_smarty_tpl->tpl_vars['imagelist']->value)>1) {?>photoView<?php }?><?php if ($_smarty_tpl->tpl_vars['product']->value->isOffersUse()||$_smarty_tpl->tpl_vars['product']->value->isMultiOffersUse()) {?> showOfferSelect<?php }?>" <?php if ($_smarty_tpl->tpl_vars['category']->value['id']==42) {?> style="height: 370px!important;"<?php }?>>
                        <div class="hoverBlock">
                            <div class="galleryWrap<?php if (count($_smarty_tpl->tpl_vars['imagelist']->value)>4) {?> scrollable<?php }?>">
                                <a class="control up"></a>
                                <div class="gallery" <?php if ($_smarty_tpl->tpl_vars['category']->value['id']!=42) {?> style="height: 220px!important;"<?php }?>>
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
" alt="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['image']->value['title'])===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['product']->value['title'])." фото ".((string)$_smarty_tpl->tpl_vars['n']->value) : $tmp);?>
"/></a></li>
                                        <?php } ?>                            
                                    </ul>
                                </div>
                                <a class="control down"></a>
                            </div>
                        </div>                       
                        <div class="dataBlock">
						
						<?php if ($_smarty_tpl->tpl_vars['category']->value['id']==42) {?><span style="color: red!important; font-size: 11px!important;">Кирпич продается поддонами!</span><?php }?>
						
<?php echo smarty_modifier_devnull($_smarty_tpl->tpl_vars['product']->value->fillCategories());?>
	
<?php if ($_smarty_tpl->tpl_vars['product']->value->inDir('new')) {?>
<div class="productNew"></div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['product']->value->inDir('popular')) {?>
<div class="productMoll" <?php if ($_smarty_tpl->tpl_vars['product']->value->inDir('new')) {?> style="margin-top: 40px;" <?php }?> ></div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['product']->value->inDir('top')) {?>
<div class="productHit" <?php if ($_smarty_tpl->tpl_vars['product']->value->inDir('new')&&$_smarty_tpl->tpl_vars['product']->value->inDir('popular')) {?>} style="margin-top: 70px!important;" <?php }?> <?php if ($_smarty_tpl->tpl_vars['product']->value->inDir('new')) {?> style="margin-top: 40px!important;" <?php }?> <?php if ($_smarty_tpl->tpl_vars['product']->value->inDir('popular')) {?> style="margin-top: 40px!important;" <?php }?> ></div>
<?php }?>
						
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
" alt=""/>
                                <?php }?>
                                <?php } ?>
                            </span>
                            <?php $_smarty_tpl->tpl_vars['main_image'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getMainImage(), null, 0);?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['main_image']->value->getUrl(141,185,'xy');?>
" class="middlePreview" alt="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['main_image']->value['title'])===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['product']->value['title']) : $tmp);?>
"/></a>
                            <div class="info extra" align="center" <?php if ($_smarty_tpl->tpl_vars['category']->value['id']!=42) {?>  style="height: 60px!important;" <?php }?>>
							
                                <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value->getUrl();?>
" class="titleGroup">
                                    <h3><?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>

									</h3>
                                </a>
								<div align="center">
								
								<?php if ($_smarty_tpl->tpl_vars['category']->value['id']==42) {?>
                                <div class="saleCategory" align="center">
								<span><?php echo $_smarty_tpl->tpl_vars['product']->value->getCost(3);?>
 <?php echo $_smarty_tpl->tpl_vars['product']->value->getCurrency();?>
/кирпич</span>
                                 </div>

                            <?php if ($_smarty_tpl->tpl_vars['shop_config']->value) {?>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value->shouldReserve()) {?>
                                    <a data-href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('shop-front-reservation',array("product_id"=>$_smarty_tpl->tpl_vars['product']->value['id']));?>
" class="cartButton inDialog reserv" title="Заказать">Заказать</a>
                                <?php } else { ?>        
                                    <?php if ($_smarty_tpl->tpl_vars['check_quantity']->value&&$_smarty_tpl->tpl_vars['product']->value['num']<1) {?>
                                        <span class="cartButton unobt" title="Нет в наличии">&nbsp;</span>
                                    <?php } else { ?>
									
 <?php if ($_smarty_tpl->tpl_vars['product']->value->isOffersUse()||$_smarty_tpl->tpl_vars['product']->value->isMultiOffersUse()) {?>
									
                                        <span data-href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('shop-front-multioffers',array("product_id"=>$_smarty_tpl->tpl_vars['product']->value['id']));?>
" class="cartButton showComplekt inDialog" title="В корзину">В корзину</span>
										
										<?php } else { ?>
										
                                        <a data-href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('shop-front-cartpage',array("add"=>$_smarty_tpl->tpl_vars['product']->value['id']));?>
" class="cartButton addToCart noShowCart" title="В корзину">В корзину</a>
										<?php }?>
										
										
                                    <?php }?>
                                <?php }?>
                            <?php }?>
								
							<?php }?>
								
								</div>
                            </div>
                            

                            
                        </div>
                    </li>
                <?php } ?>
            </ul>
            <?php } else { ?>
            <ul class="productListTable">
                <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                    <li <?php echo $_smarty_tpl->tpl_vars['product']->value->getDebugAttributes();?>
 data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
                        <?php $_smarty_tpl->tpl_vars['main_image'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getMainImage(), null, 0);?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value->getUrl();?>
" class="pic"><img src="<?php echo $_smarty_tpl->tpl_vars['main_image']->value->getUrl(74,66,'xy');?>
" alt="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['main_image']->value['title'])===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['product']->value['title']) : $tmp);?>
"/></a>
                        <div class="info extra">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value->getUrl();?>
" class="titleGroup">
                                <h3><?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
</h3>
                                <p class="descr"><?php echo $_smarty_tpl->tpl_vars['product']->value['short_description'];?>
</p>
                            </a>
                            <span class="scost"><?php echo $_smarty_tpl->tpl_vars['product']->value->getCost();?>
 <?php echo $_smarty_tpl->tpl_vars['product']->value->getCurrency();?>
</span>

                            <?php if ($_smarty_tpl->tpl_vars['product']->value->shouldReserve()) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('shop-front-reservation',array("product_id"=>$_smarty_tpl->tpl_vars['product']->value['id']));?>
" class="cartButton inDialog reserv" title="Заказать">&nbsp;</a>
                            <?php } else { ?>        
                                <?php if ($_smarty_tpl->tpl_vars['check_quantity']->value&&$_smarty_tpl->tpl_vars['product']->value['num']<1) {?>
                                    <span class="cartButton unobt" title="Нет в наличии">&nbsp;</span>
                                <?php } else { ?>
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value->isOffersUse()||$_smarty_tpl->tpl_vars['product']->value->isMultiOffersUse()) {?>
                                        <span data-href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('shop-front-multioffers',array("product_id"=>$_smarty_tpl->tpl_vars['product']->value['id']));?>
" class="cartButton showComplekt inDialog noShowCart" title="В корзину">&nbsp;</span>
                                    <?php } else { ?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('shop-front-cartpage',array("add"=>$_smarty_tpl->tpl_vars['product']->value['id']));?>
" class="cartButton addToCart noShowCart" title="В корзину">&nbsp;</a>
                                    <?php }?>
                                <?php }?>
                            <?php }?>                        
                            
                            <a class="compare<?php if ($_smarty_tpl->tpl_vars['product']->value->inCompareList()) {?> inCompare<?php }?>"><span>сравнить</span></a>
                        </div>
                    </li>
                <?php } ?>
            </ul>
            <?php }?>
        </div>
    <?php } else { ?>    
        <div class="noProducts">
            <?php if (!empty($_smarty_tpl->tpl_vars['query']->value)) {?>
            Извините, ничего не найдено
            <?php } else { ?>
            В данной категории нет ни одного товара
            <?php }?>
        </div>
    <?php }?>
    <div class="clear"></div>
    </section> <!-- .topProducts -->

    <div class="pages-line">
        <?php echo $_smarty_tpl->getSubTemplate ("%THEME%/paginator.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="clearboth"></div>
    </div>

	
	
</div>
</div>
<?php }?><?php }} ?>
