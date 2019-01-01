<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 12:53:11
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/myorder_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147116722157bc1d0734e873-85023867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c247ea8a7c0ecdedd94ee3d111e54bcb3a43ae1' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/myorder_view.tpl',
      1 => 1460044064,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '147116722157bc1d0734e873-85023867',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order' => 0,
    'cart' => 0,
    'order_data' => 0,
    'key' => 0,
    'products' => 0,
    'item' => 0,
    'product' => 0,
    'main_image' => 0,
    'multioffer_titles' => 0,
    'multioffer' => 0,
    'catalog_config' => 0,
    'fm' => 0,
    'type_object' => 0,
    'doc' => 0,
    'files' => 0,
    'file' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bc1d0754d9f8_36626450',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc1d0754d9f8_36626450')) {function content_57bc1d0754d9f8_36626450($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
if (!is_callable('smarty_modifier_dateformat')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/modifier.dateformat.php';
?><?php $_smarty_tpl->tpl_vars['catalog_config'] = new Smarty_variable(\RS\Config\Loader::byModule('catalog'), null, 0);?>
<?php echo smarty_function_addjs(array('file'=>"jcarousel/jquery.jcarousel.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"myorder_view.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->tpl_vars['cart'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getCart(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value->getProductItems(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['order_data'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value->getOrderData(), null, 0);?>

<div class="viewOrder">
    <div class="floatWrap">
        <span class="statusItem" style="background: <?php echo $_smarty_tpl->tpl_vars['order']->value->getStatus()->bgcolor;?>
"><?php echo $_smarty_tpl->tpl_vars['order']->value->getStatus()->title;?>
</span>
    </div>
    
    <div class="products">
        <a class="control prev"></a>
        <a class="control next"></a>
        <div class="itemsWrap">
            <ul class="items">
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_data']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                <?php $_smarty_tpl->tpl_vars['product'] = new Smarty_variable($_smarty_tpl->tpl_vars['products']->value[$_smarty_tpl->tpl_vars['key']->value]['product'], null, 0);?>
                <?php $_smarty_tpl->tpl_vars['multioffer_titles'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['cartitem']->getMultiOfferTitles(), null, 0);?>
                <li>
                    <?php $_smarty_tpl->tpl_vars['main_image'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getMainImage(), null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['id']>0) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value->getUrl();?>
" class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['main_image']->value->getUrl(220,200,'xy');?>
" alt="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['main_image']->value['title'])===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['product']->value['title']) : $tmp);?>
"></a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value->getUrl();?>
" class="title"><?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['title'];?>
</a>
                    <?php } else { ?>
                        <span class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['main_image']->value->getUrl(220,200,'xy');?>
" alt="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['main_image']->value['title'])===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['product']->value['title']) : $tmp);?>
"/></span>
                        <span class="title"><?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['title'];?>
</span>
                    <?php }?>                
                    <ul class="keyval">
                        <?php if (!empty($_smarty_tpl->tpl_vars['multioffer_titles']->value)) {?>
                            <?php  $_smarty_tpl->tpl_vars['multioffer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['multioffer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['multioffer_titles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['multioffer']->key => $_smarty_tpl->tpl_vars['multioffer']->value) {
$_smarty_tpl->tpl_vars['multioffer']->_loop = true;
?>
                                <li>
                                    <span class="key"><?php echo $_smarty_tpl->tpl_vars['multioffer']->value['title'];?>
 -</span> <span class="value"><?php echo $_smarty_tpl->tpl_vars['multioffer']->value['value'];?>
</span>
                                </li>
                            <?php } ?>
                        <?php }?>
                        <li>
                            <span class="key">Количество -</span> 
                            <span class="value"><?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['amount'];?>
 
                                <?php if ($_smarty_tpl->tpl_vars['catalog_config']->value['use_offer_unit']) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['data']['unit'];?>

                                <?php }?>
                            </span>
                        </li>
                        <li><span class="key">Стоимость -</span> <span class="value"><?php echo $_smarty_tpl->tpl_vars['item']->value['cost'];?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value['currency_stitle'];?>
</span></li>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['discount']>0) {?>
                        <li><span class="key">Скидка -</span> <span class="value"><?php echo $_smarty_tpl->tpl_vars['item']->value['discount'];?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value['currency_stitle'];?>
</span></li>
                        <?php }?>
                        
                    </ul>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    
    <table class="formTable">
        <tbody>
            <tr>
                <td class="key">Дата заказа</td>
                <td class="value"><?php echo smarty_modifier_dateformat($_smarty_tpl->tpl_vars['order']->value['dateof']);?>
</td>
            </tr>
            <?php if ($_smarty_tpl->tpl_vars['order']->value['delivery']) {?>
                <tr>
                    <td class="key">Тип доставки</td>
                    <td class="value"><?php echo $_smarty_tpl->tpl_vars['order']->value->getDelivery()->title;?>
</td>
                </tr>      
            <?php }?>  
            <tr>
                <td class="key">Адрес получения</td>
                <td class="value"><?php echo $_smarty_tpl->tpl_vars['order']->value->getAddress()->getLineView();?>
</td>
            </tr>
            <tr>
                <td class="key">Контактное лицо</td>
                <td class="value"><?php echo $_smarty_tpl->tpl_vars['order']->value->contact_person;?>
</td>
            </tr>
            <?php $_smarty_tpl->tpl_vars['fm'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getFieldsManager(), null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fm']->value->getStructure(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <tr>
                    <td class="key"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
                    <td class="value"><?php echo $_smarty_tpl->tpl_vars['item']->value['current_val'];?>
</td>
                </tr>
            <?php } ?>    
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_data']->value['other']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['cartitem']['type']!='coupon') {?>
            <tr>
                <td class="key"><?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['title'];?>
</td>
                <td class="value"><?php if ($_smarty_tpl->tpl_vars['item']->value['total']>0) {?><?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
<?php }?></td>
            </tr>
            <?php }?>
            <?php } ?>
            
            <?php if ($_smarty_tpl->tpl_vars['order']->value->getPayment()->hasDocs()) {?>
            <tr>
                <td class="key">Документы:</td>
                <td class="value">            
                <?php $_smarty_tpl->tpl_vars['type_object'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getPayment()->getTypeObject(), null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['doc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['doc']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['type_object']->value->getDocsName(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['doc']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['doc']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['doc']->key => $_smarty_tpl->tpl_vars['doc']->value) {
$_smarty_tpl->tpl_vars['doc']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['doc']->key;
 $_smarty_tpl->tpl_vars['doc']->iteration++;
 $_smarty_tpl->tpl_vars['doc']->last = $_smarty_tpl->tpl_vars['doc']->iteration === $_smarty_tpl->tpl_vars['doc']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["docs"]['last'] = $_smarty_tpl->tpl_vars['doc']->last;
?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['type_object']->value->getDocUrl($_smarty_tpl->tpl_vars['key']->value);?>
" class="underline" target="_blank"><?php echo $_smarty_tpl->tpl_vars['doc']->value['title'];?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['docs']['last']) {?>,<?php }?>
                <?php } ?>
                </td>
            </tr>
            <?php }?>        
            
            <?php if (!isset($_smarty_tpl->tpl_vars['files'])) $_smarty_tpl->tpl_vars['files'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['files']->value = $_smarty_tpl->tpl_vars['order']->value->getFiles()) {?>
            <tr>
                <td class="key">Файлы:</td>
                <td class="value">            
                <?php $_smarty_tpl->tpl_vars['type_object'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getPayment()->getTypeObject(), null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['file']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['file']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
 $_smarty_tpl->tpl_vars['file']->iteration++;
 $_smarty_tpl->tpl_vars['file']->last = $_smarty_tpl->tpl_vars['file']->iteration === $_smarty_tpl->tpl_vars['file']->total;
?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['file']->value->getUrl();?>
" class="underline" target="_blank"><?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
</a><?php if (!$_smarty_tpl->tpl_vars['file']->last) {?>,<?php }?>
                <?php } ?>
                </td>
            </tr>
            <?php }?>
        </tbody>
        <tfoot class="summary">
            <tr>
                <td class="key">Итого</td>
                <td class="value"><?php echo $_smarty_tpl->tpl_vars['order_data']->value['total_cost'];?>
</td>
            </tr>
        </tfoot>
    </table>
    
    <?php if (!empty($_smarty_tpl->tpl_vars['order']->value['user_text'])) {?>
    <div class="userText">
        <?php echo $_smarty_tpl->tpl_vars['order']->value['user_text'];?>

    </div>
    <?php }?>
</div><?php }} ?>
