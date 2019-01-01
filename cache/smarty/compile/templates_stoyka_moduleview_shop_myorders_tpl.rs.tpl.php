<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 12:53:03
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/myorders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2354506657bc1cff3df3e3-15241299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5582fe2b4bba4b84bdaca9423484865d48fe54c' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/myorders.tpl',
      1 => 1460044064,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '2354506657bc1cff3df3e3-15241299',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_list' => 0,
    'order' => 0,
    'cart' => 0,
    'products' => 0,
    'products_first' => 0,
    'item' => 0,
    'main_image' => 0,
    'multioffer_titles' => 0,
    'multioffer' => 0,
    'products_more' => 0,
    'order_data' => 0,
    'type_object' => 0,
    'key' => 0,
    'doc' => 0,
    'router' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bc1cff695262_11344618',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc1cff695262_11344618')) {function content_57bc1cff695262_11344618($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/plugins/modifier.date_format.php';
?><?php if (count($_smarty_tpl->tpl_vars['order_list']->value)) {?>
<table class="orderList">
    <?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
    <tr>
        <td class="date">№ <?php echo $_smarty_tpl->tpl_vars['order']->value['order_num'];?>
<br><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['order']->value['dateof'],"d.m.Y");?>
</td>
        <td class="products">
            <?php $_smarty_tpl->tpl_vars['cart'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getCart(), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value->getProductItems(), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['order_data'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value->getOrderData(), null, 0);?>
            
            <?php $_smarty_tpl->tpl_vars['products_first'] = new Smarty_variable(array_slice($_smarty_tpl->tpl_vars['products']->value,0,5), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['products_more'] = new Smarty_variable(array_slice($_smarty_tpl->tpl_vars['products']->value,5), null, 0);?>
            
            
            <ul>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products_first']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <?php $_smarty_tpl->tpl_vars['multioffer_titles'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['cartitem']->getMultiOfferTitles(), null, 0);?>
                    <li>
                        <?php $_smarty_tpl->tpl_vars['main_image'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['product']->getMainImage(), null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['product']['id']>0) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['product']->getUrl();?>
" class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['main_image']->value->getUrl(36,36,'xy');?>
" alt="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['main_image']->value['title'])===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['item']->value['cartitem']['title']) : $tmp);?>
"/></a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['product']->getUrl();?>
" class="title"><?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['title'];?>
</a>
                        <?php } else { ?>
                            <span class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['main_image']->value->getUrl(36,36,'xy');?>
" alt="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['main_image']->value['title'])===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['item']->value['cartitem']['title']) : $tmp);?>
"/></span>
                            <span class="title"><?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['title'];?>
</span>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['multioffer_titles']->value||$_smarty_tpl->tpl_vars['item']->value['cartitem']['model']) {?>
                            <div class="multioffersWrap">
                                <?php  $_smarty_tpl->tpl_vars['multioffer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['multioffer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['multioffer_titles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['multioffer']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['multioffer']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['multioffer']->key => $_smarty_tpl->tpl_vars['multioffer']->value) {
$_smarty_tpl->tpl_vars['multioffer']->_loop = true;
 $_smarty_tpl->tpl_vars['multioffer']->iteration++;
 $_smarty_tpl->tpl_vars['multioffer']->last = $_smarty_tpl->tpl_vars['multioffer']->iteration === $_smarty_tpl->tpl_vars['multioffer']->total;
?>
                                <?php echo $_smarty_tpl->tpl_vars['multioffer']->value['value'];?>
<?php if (!$_smarty_tpl->tpl_vars['multioffer']->last) {?>, <?php }?>
                                <?php } ?>
                                <?php if (!$_smarty_tpl->tpl_vars['multioffer_titles']->value) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['model'];?>

                                <?php }?>
                            </div>
                        <?php }?>
                    </li>
                <?php } ?>
            </ul>
            <?php if (!empty($_smarty_tpl->tpl_vars['products_more']->value)) {?>
            <div class="moreItems">
                <a class="expand rs-parent-switcher">показать все...</a>
                <ul class="items">
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products_more']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <?php $_smarty_tpl->tpl_vars['multioffer_titles'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['cartitem']->getMultiOfferTitles(), null, 0);?>
                        <li>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['product']['id']>0) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['product']->getUrl();?>
" class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['product']->getMainImage(36,36,'xy');?>
"></a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['product']->getUrl();?>
" class="title"><?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['title'];?>
</a>
                                <?php if ($_smarty_tpl->tpl_vars['multioffer_titles']->value||$_smarty_tpl->tpl_vars['item']->value['cartitem']['model']) {?>
                                    <div class="multioffersWrap">
                                        <?php  $_smarty_tpl->tpl_vars['multioffer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['multioffer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['multioffer_titles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['multioffer']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['multioffer']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['multioffer']->key => $_smarty_tpl->tpl_vars['multioffer']->value) {
$_smarty_tpl->tpl_vars['multioffer']->_loop = true;
 $_smarty_tpl->tpl_vars['multioffer']->iteration++;
 $_smarty_tpl->tpl_vars['multioffer']->last = $_smarty_tpl->tpl_vars['multioffer']->iteration === $_smarty_tpl->tpl_vars['multioffer']->total;
?>
                                        <?php echo $_smarty_tpl->tpl_vars['multioffer']->value['value'];?>
<?php if (!$_smarty_tpl->tpl_vars['multioffer']->last) {?>, <?php }?>
                                        <?php } ?>
                                        <?php if (!$_smarty_tpl->tpl_vars['multioffer_titles']->value) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['model'];?>

                                        <?php }?>
                                    </div>
                                <?php }?>                                
                            <?php } else { ?>
                                <span class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['product']->getMainImage(36,36,'xy');?>
"></span>
                                <span class="title"><?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['title'];?>
</span>
                            <?php }?>
                        </li>
                    <?php } ?>
                </ul>
                <a class="collapse rs-parent-switcher">показать кратко</a>
            </div>            
            <?php }?>
        </td>
        <td class="price">
            <?php echo $_smarty_tpl->tpl_vars['order_data']->value['total_cost'];?>

        </td>
        <td class="status">
            <span class="statusItem" style="background: <?php echo $_smarty_tpl->tpl_vars['order']->value->getStatus()->bgcolor;?>
"><?php echo $_smarty_tpl->tpl_vars['order']->value->getStatus()->title;?>
</span>
        </td>
        <td class="actions">
            <?php if ($_smarty_tpl->tpl_vars['order']->value->getPayment()->hasDocs()) {?>
                <?php $_smarty_tpl->tpl_vars['type_object'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getPayment()->getTypeObject(), null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['doc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['doc']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['type_object']->value->getDocsName(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['doc']->key => $_smarty_tpl->tpl_vars['doc']->value) {
$_smarty_tpl->tpl_vars['doc']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['doc']->key;
?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['type_object']->value->getDocUrl($_smarty_tpl->tpl_vars['key']->value);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['doc']->value['title'];?>
</a><br>
                <?php } ?>            
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['order']->value->canOnlinePay()) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['order']->value->getOnlinePayUrl();?>
">оплатить</a><br>
            <?php }?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('shop-front-myorderview',array("order_id"=>$_smarty_tpl->tpl_vars['order']->value['order_num']));?>
" class="more">подробнее</a>
        </td>
    </tr>
    <?php } ?>
</table>
<?php } else { ?>
<div class="noData">
    Еще не оформлено ни одного заказа
</div>
<?php }?>
<br>
<?php echo $_smarty_tpl->getSubTemplate ("%THEME%/paginator.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
