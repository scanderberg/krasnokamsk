<?php /* Smarty version Smarty-3.1.18, created on 2016-07-16 07:40:26
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/orderview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13929391825789babadbbb21-79883087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb338bfb5644db74b578338794c60e4455bc089a' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/orderview.tpl',
      1 => 1460044064,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '13929391825789babadbbb21-79883087',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'refresh_mode' => 0,
    'mod_css' => 0,
    'catalog_folders' => 0,
    'mod_js' => 0,
    'elem' => 0,
    'cart' => 0,
    'address' => 0,
    'show_delivery_buttons' => 0,
    'status_list' => 0,
    'item' => 0,
    'default_statuses' => 0,
    'subitem' => 0,
    'user' => 0,
    'router' => 0,
    'user_num_of_order' => 0,
    'hl' => 0,
    'fm' => 0,
    'id' => 0,
    'print_form' => 0,
    'delivery' => 0,
    'warehouse_list' => 0,
    'pay' => 0,
    'catalog_config' => 0,
    'order_data' => 0,
    'n' => 0,
    'products' => 0,
    'product' => 0,
    'level' => 0,
    'value' => 0,
    'multioffers_values' => 0,
    'offer' => 0,
    'key' => 0,
    'order_footer_fields' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5789babb16b322_33955514',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5789babb16b322_33955514')) {function content_5789babb16b322_33955514($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addcss')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addcss.php';
if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
if (!is_callable('smarty_function_urlmake')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.urlmake.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/plugins/function.cycle.php';
if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><?php if (!$_smarty_tpl->tpl_vars['refresh_mode']->value) {?>
<?php echo smarty_function_addcss(array('file'=>((string)$_smarty_tpl->tpl_vars['mod_css']->value)."orderview.css?v=2",'basepath'=>"root"),$_smarty_tpl);?>

<?php echo smarty_function_addcss(array('file'=>"common/jquery.lightbox.packed.css",'basepath'=>"common"),$_smarty_tpl);?>

<?php echo smarty_function_addcss(array('file'=>((string)$_smarty_tpl->tpl_vars['catalog_folders']->value['mod_css'])."selectproduct.css",'basepath'=>"root"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"jquery.lightbox.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>((string)$_smarty_tpl->tpl_vars['catalog_folders']->value['mod_js'])."selectproduct.js",'basepath'=>"root"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"jquery.userselect.js",'basepath'=>"common"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>((string)$_smarty_tpl->tpl_vars['mod_js']->value)."jquery.orderedit.js",'basepath'=>"root"),$_smarty_tpl);?>

<form id="orderForm" class="crud-form" method="post" action="<?php echo smarty_function_urlmake(array(),$_smarty_tpl);?>
">
<?php }?>
<?php $_smarty_tpl->tpl_vars['catalog_config'] = new Smarty_variable(\RS\Config\Loader::byModule('catalog'), null, 0);?> 
<?php $_smarty_tpl->tpl_vars['delivery'] = new Smarty_variable($_smarty_tpl->tpl_vars['elem']->value->getDelivery(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['address'] = new Smarty_variable($_smarty_tpl->tpl_vars['elem']->value->getAddress(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['cart'] = new Smarty_variable($_smarty_tpl->tpl_vars['elem']->value->getCart(), null, 0);?>

<?php $_smarty_tpl->tpl_vars['order_data'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value->getOrderData(true,false), null, 0);?>
<?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value->getProductItems(), null, 0);?>

<?php $_smarty_tpl->tpl_vars['hl'] = new Smarty_variable(array("n","hl"), null, 0);?>                              
    <input type="hidden" name="order_id" value="<?php echo $_smarty_tpl->tpl_vars['elem']->value['id'];?>
">
    <input type="hidden" name="user_id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['elem']->value['user_id'])===null||$tmp==='' ? 0 : $tmp);?>
">
    <input type="hidden" name="delivery" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['elem']->value['delivery'])===null||$tmp==='' ? 0 : $tmp);?>
">
    <input type="hidden" name="use_addr" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['elem']->value['use_addr'])===null||$tmp==='' ? 0 : $tmp);?>
">
    <input type="hidden" name="address[zipcode]" value="<?php echo $_smarty_tpl->tpl_vars['address']->value['zipcode'];?>
">
    <input type="hidden" name="address[country]" value="<?php echo $_smarty_tpl->tpl_vars['address']->value['country'];?>
">
    <input type="hidden" name="address[region]" value="<?php echo $_smarty_tpl->tpl_vars['address']->value['region'];?>
">
    <input type="hidden" name="address[city]" value="<?php echo $_smarty_tpl->tpl_vars['address']->value['city'];?>
">
    <input type="hidden" name="address[address]" value="<?php echo $_smarty_tpl->tpl_vars['address']->value['address'];?>
">
    <input type="hidden" name="address[region_id]" value="<?php echo $_smarty_tpl->tpl_vars['address']->value['region_id'];?>
">
    <input type="hidden" name="address[country_id]" value="<?php echo $_smarty_tpl->tpl_vars['address']->value['country_id'];?>
">
    <input type="hidden" name="user_delivery_cost" value="<?php echo $_smarty_tpl->tpl_vars['elem']->value['user_delivery_cost'];?>
">
    <input type="hidden" name="payment" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['elem']->value['payment'])===null||$tmp==='' ? 0 : $tmp);?>
">
    <input type="hidden" name="status" id="status" value="<?php echo $_smarty_tpl->tpl_vars['elem']->value['status'];?>
">
    <?php if ($_smarty_tpl->tpl_vars['elem']->value['id']>0) {?>
        <input type="hidden" name="show_delivery_buttons" id="showDeliveryButtons" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['show_delivery_buttons']->value)===null||$tmp==='' ? 1 : $tmp);?>
"/>
    <?php }?>

    <div class="status-bar">
        <div class="change-status-text">Переключить статус:</div>
        <ul>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['status_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <?php if ((!is_array($_smarty_tpl->tpl_vars['item']->value)||!empty($_smarty_tpl->tpl_vars['item']->value))) {?>
                <li class="top<?php if (is_array($_smarty_tpl->tpl_vars['item']->value)) {?> node<?php }?><?php if (((is_array($_smarty_tpl->tpl_vars['item']->value)&&!in_array($_smarty_tpl->tpl_vars['elem']->value['status'],$_smarty_tpl->tpl_vars['default_statuses']->value))||$_smarty_tpl->tpl_vars['item']->value['id']==$_smarty_tpl->tpl_vars['elem']->value['status'])) {?> act<?php }?>">
                    <?php if (!is_array($_smarty_tpl->tpl_vars['item']->value)) {?>
                    <a href="JavaScript:;" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" style="background:<?php echo $_smarty_tpl->tpl_vars['item']->value['bgcolor'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                    <?php } else { ?>
                        <span class="a other">Другой статус</span>
                        <ul class="sublist">
                            <?php  $_smarty_tpl->tpl_vars['subitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subitem']->key => $_smarty_tpl->tpl_vars['subitem']->value) {
$_smarty_tpl->tpl_vars['subitem']->_loop = true;
?>
                            <li><a href="JavaScript:;" data-id="<?php echo $_smarty_tpl->tpl_vars['subitem']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['subitem']->value['title'];?>
</a></li>
                            <?php } ?>
                        </ul>
                    <?php }?>
                </li>
            <?php }?>
            <?php } ?>
        </ul>
    </div>
    <br style="clear:both">

    <div class="floatbox" style="margin-bottom:20px">
        <div class="o-leftcol">
            <div class="bordered userBlock">
                <h3>Покупатель</h3>                
                <div id="userBlockWrapper">
                    <?php $_smarty_tpl->tpl_vars['user'] = new Smarty_variable($_smarty_tpl->tpl_vars['elem']->value->getUser(), null, 0);?>
                    <?php echo $_smarty_tpl->getSubTemplate ("%shop%/form/order/user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user'=>$_smarty_tpl->tpl_vars['user']->value,'router'=>$_smarty_tpl->tpl_vars['router']->value,'order'=>$_smarty_tpl->tpl_vars['elem']->value,'user_num_of_order'=>$_smarty_tpl->tpl_vars['user_num_of_order']->value), 0);?>

                </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['elem']->value['id']>0) {?>
                <br>
                <div class="bordered">    
                    <h3>Информация о заказе</h3>
                        <table class="order-table">
                            <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"order"),$_smarty_tpl);?>
">
                                <td class="otitle">
                                    Номер
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['elem']->value['order_num'];?>
</td>
                            </tr>
                            <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"order"),$_smarty_tpl);?>
">
                                <td class="otitle">
                                    Дата оформления
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['elem']->value['dateof'];?>
</td>
                            </tr>
                            <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"order"),$_smarty_tpl);?>
">
                                <td class="otitle">
                                    IP
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['elem']->value['ip'];?>
</td>
                            </tr>
                            <tr class="status-bar <?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"order"),$_smarty_tpl);?>
">
                                <td class="otitle">
                                    Статус:
                                </td>
                                <td height="20"><strong id="status_text"><?php echo $_smarty_tpl->tpl_vars['elem']->value->getStatus()->title;?>
</strong>
                                </td>
                            </tr>
                            <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"order"),$_smarty_tpl);?>
">
                                <td class="otitle">
                                    Заказ оформлен в валюте:
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['elem']->value['currency'];?>
</td>
                            </tr>
                            <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"order"),$_smarty_tpl);?>
">
                                <td class="otitle">
                                    Комментарий к заказу:
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['elem']->value['comments'];?>
</td>
                            </tr>                        
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['elem']->value->getExtraInfo(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                            <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"order"),$_smarty_tpl);?>
">
                                <td class="otitle">
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
:
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
</td>
                            </tr>                         
                            <?php } ?>                        
                            <?php $_smarty_tpl->tpl_vars['fm'] = new Smarty_variable($_smarty_tpl->tpl_vars['elem']->value->getFieldsManager(), null, 0);?>
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fm']->value->getStructure(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"order"),$_smarty_tpl);?>
">
                                    <td class="otitle">
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

                                    </td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['current_val'];?>
</td>
                                </tr>
                            <?php } ?>
                        </table>   
                </div>    
            <?php }?>      
            <br>
            <div><strong>Комментарий администратора</strong> (не отображается у покупателя)</div>
            <?php echo $_smarty_tpl->tpl_vars['elem']->value['__admin_comments']->formView();?>

            <br>
            <br>
            <input type="checkbox" name="notify_user" value="1" id="notify_user" checked >
            <label for="notify_user">Уведомить пользователя об изменениях в заказе.</label>
            
        </div> <!-- leftcol -->

        <div class="o-rightcol">
            <div class="padd">
            <div id="documentsBlockWrapper">
                <?php if ($_smarty_tpl->tpl_vars['elem']->value['id']>0) {?>
                    <div class="bordered">
                        <h3>Документы</h3>

                        <table class="order-table">
                            <?php  $_smarty_tpl->tpl_vars['print_form'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['print_form']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['elem']->value->getPrintForms(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['print_form']->key => $_smarty_tpl->tpl_vars['print_form']->value) {
$_smarty_tpl->tpl_vars['print_form']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['print_form']->key;
?>
                                <tr>
                                    <td width="20"><input type="checkbox" id="op_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" value="<?php echo smarty_function_adminUrl(array('do'=>'printForm','order_id'=>$_smarty_tpl->tpl_vars['elem']->value['id'],'type'=>$_smarty_tpl->tpl_vars['id']->value),$_smarty_tpl);?>
" class="printdoc"></td>
                                    <td><label for="op_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['print_form']->value->getTitle();?>
</label></td>
                                </tr>
                            <?php } ?>
                        </table>
                        <button type="button" id="printOrder">Печать</button>
                    </div>
                    <br> 
                <?php }?>
            </div>
                    
            <div id="deliveryBlockWrapper" class="bordered">
                <?php echo $_smarty_tpl->getSubTemplate ("%shop%/form/order/delivery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('delivery'=>$_smarty_tpl->tpl_vars['delivery']->value,'address'=>$_smarty_tpl->tpl_vars['address']->value,'elem'=>$_smarty_tpl->tpl_vars['elem']->value,'warehouse_list'=>$_smarty_tpl->tpl_vars['warehouse_list']->value), 0);?>

            </div>    
            <br>
            
            <div id="paymentBlockWrapper" class="bordered">
                <?php $_smarty_tpl->tpl_vars['pay'] = new Smarty_variable($_smarty_tpl->tpl_vars['elem']->value->getPayment(), null, 0);?>
                <?php echo $_smarty_tpl->getSubTemplate ("%shop%/form/order/payment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('pay'=>$_smarty_tpl->tpl_vars['pay']->value,'elem'=>$_smarty_tpl->tpl_vars['elem']->value), 0);?>

            </div>
            <br>        
            </div>
        </div> <!-- right col -->
        
    </div> <!-- -->

    <?php if ($_smarty_tpl->tpl_vars['elem']->value['id']>0&&!$_smarty_tpl->tpl_vars['elem']->value->canEdit()) {?>
        <div class="notice-box no-padd">
            <div class="notice-bg">
                Редактирование списка товаров невозможно, так как были удалены некоторые элементы заказа                        
            </div>    
        </div>
        <br>
    <?php }?>
    
    <table class="pr-table">
        <thead>
        <tr>
            <th class="chk" style="text-align:center" width="20">
                <input type="checkbox" data-name="chk[]" class="chk_head select-page" alt="">
            </th>
            <th></th>
            <th>Наименование</th>
            <th>Код</th>
            <th>Вес <?php if (!empty($_smarty_tpl->tpl_vars['catalog_config']->value['default_weight_unit'])) {?>(<?php echo $_smarty_tpl->tpl_vars['catalog_config']->value['default_weight_unit'];?>
)<?php }?></th>
            <th>Цена</th>
            <th>Кол-во</th>
            <th>Стоимость</th>
        </tr>
        </thead>       
        <tbody class="ordersEdit">
            <?php if (!empty($_smarty_tpl->tpl_vars['order_data']->value['items'])) {?>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_data']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['n']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                <?php $_smarty_tpl->tpl_vars['product'] = new Smarty_variable($_smarty_tpl->tpl_vars['products']->value[$_smarty_tpl->tpl_vars['n']->value]['product'], null, 0);?>
                <tr data-n="<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
" class="item">
                    <td class="chk">
                        <input type="checkbox" name="chk[]" value="<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
" <?php if (!$_smarty_tpl->tpl_vars['elem']->value->canEdit()) {?>disabled<?php }?>>
                        <input type="hidden" name="items[<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
][uniq]" value="<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
">
                        <input type="hidden" name="items[<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
][entity_id]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['entity_id'];?>
">
                        <input type="hidden" name="items[<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
][type]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['type'];?>
">
                        <input type="hidden" name="items[<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
][single_weight]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['single_weight'];?>
">
                    </td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['product']->value->hasImage()) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value->getMainImage(800,600,'xy');?>
" rel="lightbox-products" data-title="<?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['title'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['product']->value->getMainImage(36,36,'xy');?>
"></a>
                        <?php } else { ?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['product']->value->getMainImage(36,36,'xy');?>
">
                        <?php }?>
                    </td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['id']) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value->getUrl();?>
" target="_blank" class="title"><?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['title'];?>
</a>
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['title'];?>

                        <?php }?>
                        <br>
                        <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['cartitem']['model'])) {?>Модель: <?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['model'];?>
<?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['multioffers']['use']&&$_smarty_tpl->tpl_vars['elem']->value->canEdit()) {?>
                            <?php $_smarty_tpl->tpl_vars['multioffers_values'] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['item']->value['cartitem']['multioffers']), null, 0);?>
                            <div>
                                <?php  $_smarty_tpl->tpl_vars['level'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['level']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['multioffers']['levels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['level']->key => $_smarty_tpl->tpl_vars['level']->value) {
$_smarty_tpl->tpl_vars['level']->_loop = true;
?>
                                    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['level']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['value']->value['val_str']==$_smarty_tpl->tpl_vars['multioffers_values']->value[$_smarty_tpl->tpl_vars['level']->value['prop_id']]['value']) {?>
                                           <div class="offer_subinfo"> 
                                             <?php if ($_smarty_tpl->tpl_vars['level']->value['title']) {?><?php echo $_smarty_tpl->tpl_vars['level']->value['title'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['level']->value['prop_title'];?>
<?php }?> : <?php echo $_smarty_tpl->tpl_vars['value']->value['val_str'];?>
  
                                           </div>
                                        <?php }?>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                            <a class="show-change-offer">[изменить]</a>
                            <br>
                            
                            <div class="multiOffers hidden">
                                
                                
                                <?php  $_smarty_tpl->tpl_vars['level'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['level']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['multioffers']['levels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['level']->key => $_smarty_tpl->tpl_vars['level']->value) {
$_smarty_tpl->tpl_vars['level']->_loop = true;
?>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['level']->value['values'])) {?>
                                        
                                       
                                        <div class="title"><?php if ($_smarty_tpl->tpl_vars['level']->value['title']) {?><?php echo $_smarty_tpl->tpl_vars['level']->value['title'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['level']->value['prop_title'];?>
<?php }?></div>
                                        <select name="items[<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
][multioffers][<?php echo $_smarty_tpl->tpl_vars['level']->value['prop_id'];?>
]" class="product-multioffer " data-url="<?php echo smarty_function_adminUrl(array('do'=>"getOfferPrice",'product_id'=>$_smarty_tpl->tpl_vars['product']->value['id']),$_smarty_tpl);?>
" data-prop-title="<?php if ($_smarty_tpl->tpl_vars['level']->value['title']) {?><?php echo $_smarty_tpl->tpl_vars['level']->value['title'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['level']->value['prop_title'];?>
<?php }?>">
                                            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['level']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['val_str'];?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value['val_str']==$_smarty_tpl->tpl_vars['multioffers_values']->value[$_smarty_tpl->tpl_vars['level']->value['prop_id']]['value']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value['val_str'];?>
</option>   
                                            <?php } ?>
                                        </select>
                                    <?php }?>
                                    
                                <?php } ?>
                                
                                <?php if ($_smarty_tpl->tpl_vars['product']->value->isOffersUse()) {?>
                                    
                                    
                                    <select name="items[<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
][offer]" class="product-offers hidden">
                                        <?php  $_smarty_tpl->tpl_vars['offer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['offer']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['offers']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['offer']->key => $_smarty_tpl->tpl_vars['offer']->value) {
$_smarty_tpl->tpl_vars['offer']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['offer']->key;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['offer']->value['sortn'];?>
" id="offer_<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="hidden_offers" <?php if ($_smarty_tpl->tpl_vars['offer']->value['sortn']==$_smarty_tpl->tpl_vars['item']->value['cartitem']['offer']) {?>selected="selected"<?php }?> <?php if ($_smarty_tpl->tpl_vars['catalog_config']->value['use_offer_unit']) {?>data-unit="<?php echo $_smarty_tpl->tpl_vars['product']->value['offers']['items'][$_smarty_tpl->tpl_vars['key']->value]->getUnit()->stitle;?>
"<?php }?> data-info='<?php echo $_smarty_tpl->tpl_vars['offer']->value->getPropertiesJson();?>
' data-num="<?php echo $_smarty_tpl->tpl_vars['offer']->value['num'];?>
"><?php echo $_smarty_tpl->tpl_vars['offer']->value['title'];?>
</option>
                                        <?php } ?>
                                    </select>
                                    
                                    
                                    
                                    <select class="product-offer-cost hidden"></select>
                                    <input type="button" value="OK" class="apply-cost-btn hidden"/> 
                                <?php }?>
                            </div>
     
                        <?php } elseif ($_smarty_tpl->tpl_vars['product']->value->isOffersUse()&&$_smarty_tpl->tpl_vars['elem']->value->canEdit()) {?>
                            <a class="show-change-offer">[изменить]</a>
                            <br>
                            <select name="items[<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
][offer]" class="product-offer hidden" data-url="<?php echo smarty_function_adminUrl(array('do'=>"getOfferPrice",'product_id'=>$_smarty_tpl->tpl_vars['product']->value['id']),$_smarty_tpl);?>
">
                            <?php  $_smarty_tpl->tpl_vars['offer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['offer']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['offers']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['offer']->key => $_smarty_tpl->tpl_vars['offer']->value) {
$_smarty_tpl->tpl_vars['offer']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['offer']->key;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['offer']->value['sortn'];?>
" <?php if ($_smarty_tpl->tpl_vars['offer']->value['sortn']==$_smarty_tpl->tpl_vars['item']->value['cartitem']['offer']) {?>selected="selected"<?php }?> <?php if ($_smarty_tpl->tpl_vars['catalog_config']->value['use_offer_unit']) {?>data-unit="<?php echo $_smarty_tpl->tpl_vars['product']->value['offers']['items'][$_smarty_tpl->tpl_vars['key']->value]->getUnit()->stitle;?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['offer']->value['title'];?>
</option>
                            <?php } ?>
                            </select>
                            <select class="product-offer-cost hidden"></select>
                            <input type="button" value="OK" class="apply-cost-btn hidden"/> 
                        <?php }?>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['barcode'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['single_weight'];?>
</td>
                    <td><input type="text" name="items[<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
][single_cost]" class="invalidate single_cost" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['single_cost_noformat'];?>
" size="10" <?php if (!$_smarty_tpl->tpl_vars['elem']->value->canEdit()) {?>disabled<?php }?>></td>
                    <td>
                        <input type="text" name="items[<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
][amount]" class="invalidate num" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['amount'];?>
" size="4" data-product-id="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" <?php if (!$_smarty_tpl->tpl_vars['elem']->value->canEdit()) {?>disabled<?php }?>>
                        <?php if ($_smarty_tpl->tpl_vars['catalog_config']->value['use_offer_unit']) {?>
                            <span class="unit">
                                <?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['data']['unit'];?>

                            </span>
                        <?php }?>
                    </td>
                    <td>
                        <span class="cost"><?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
</span>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['discount']>0) {?><div class="discount">скидка <?php echo $_smarty_tpl->tpl_vars['item']->value['discount'];?>
</div><?php }?>
                    </td>
                </tr>
                <?php } ?>
            <?php } else { ?>
                <tr>
                    <td colspan="8" align="center">Добавьте товары к заказу</td>
                </tr>    
            <?php }?>
        </tbody>
    
        <tbody class="additems">  
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_data']->value['other']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['n']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
            <tr>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['cartitem']['type']=='coupon') {?>
                <td class="chk">
                    <input type="checkbox" name="chk[]" value="<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
" <?php if (!$_smarty_tpl->tpl_vars['elem']->value->canEdit()) {?>disabled<?php }?>>
                    <input type="hidden" name="items[<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
][uniq]" value="<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
" class="coupon">
                    <input type="hidden" name="items[<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
][type]" value="coupon">
                    <input type="hidden" name="items[<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
][entity_id]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['entity_id'];?>
">
                    <input type="hidden" name="items[<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
][title]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['title'];?>
">
                </td>
                <?php }?>
                
                <td colspan="<?php if ($_smarty_tpl->tpl_vars['item']->value['cartitem']['type']=='coupon') {?>6<?php } else { ?>7<?php }?>"><?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['title'];?>
</td>
                <td><?php if ($_smarty_tpl->tpl_vars['item']->value['total']>0) {?><?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
<?php }?></td>
            </tr>
            <?php } ?>
        </tbody>
        
        <tfoot>
            <tr class="last">                           
                <td colspan="4" class="tools">
                
                    <?php if (($_smarty_tpl->tpl_vars['elem']->value['id']<0)||$_smarty_tpl->tpl_vars['elem']->value->canEdit()) {?>
                        <a class="tool remove" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Удалить выбранное<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"></a>
                        <a class="tool addcoupon" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Добавить купон на скидку<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"></a>
                        <a class="tool addproduct" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Добавить товар<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"></a>
                    <?php } else { ?>
                        <div>
                            <span class="tool remove disabled"></span>
                            <span class="tool addcoupon disabled"></span>
                            <span class="tool addproduct disabled"></span>
                        </div>
                    <?php }?>
                    
                    
                    <div class="added-items"></div>
                    
                </td>
                <td class="total">Вес: <span class="total_weight"><?php echo $_smarty_tpl->tpl_vars['order_data']->value['total_weight'];?>
</span> <?php if (!empty($_smarty_tpl->tpl_vars['catalog_config']->value['default_weight_unit'])) {?>(<?php echo $_smarty_tpl->tpl_vars['catalog_config']->value['default_weight_unit'];?>
)<?php }?></td>
                <td></td>
                <td></td>
                <td class="total">
                    Итого: <span class="summary"><?php echo $_smarty_tpl->tpl_vars['order_data']->value['total_cost'];?>
</span>
                    <a class="refresh" onclick="$.orderEdit('refresh')">пересчитать</a>
                </td>
            </tr>
        </tfoot>
     </table>
     
     
     
     <div class="product-group-container hide-group-cb hidden" data-urls='{ "getChild": "<?php echo smarty_function_adminUrl(array('mod_controller'=>"catalog-dialog",'do'=>"getChildCategory"),$_smarty_tpl);?>
", "getProducts": "<?php echo smarty_function_adminUrl(array('mod_controller'=>"catalog-dialog",'do'=>"getProducts"),$_smarty_tpl);?>
", "getDialog": "<?php echo smarty_function_adminUrl(array('mod_controller'=>"catalog-dialog",'do'=>false),$_smarty_tpl);?>
" }'>
        <a href="JavaScript:;" class="select-button"></a><br>
        <div class="input-container"></div>
     </div>           
     <br><br>

     <div class="collapse-block<?php if ($_smarty_tpl->tpl_vars['elem']->value['user_text']) {?> open<?php }?>">
        <div class="collapse-title"><i class="icon"></i><strong>Текст для покупателя</strong> (будет виден покупателю на странице просмотра заказа)</div>
        <div class="collapse-content">
            <?php echo $_smarty_tpl->tpl_vars['elem']->value['__user_text']->formView();?>

        </div>
     </div>
          
     
     <?php echo $_smarty_tpl->tpl_vars['order_footer_fields']->value;?>

          
<?php if (!$_smarty_tpl->tpl_vars['refresh_mode']->value) {?>
</form>
<?php }?>

<?php }} ?>
