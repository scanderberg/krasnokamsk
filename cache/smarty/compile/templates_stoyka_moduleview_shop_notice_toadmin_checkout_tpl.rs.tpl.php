<?php /* Smarty version Smarty-3.1.18, created on 2016-08-22 18:11:28
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/notice/toadmin_checkout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78416523257bb162053ce55-68881713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbd6da817626668f5416479677ddaacf3b466574' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/notice/toadmin_checkout.tpl',
      1 => 1460044891,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '78416523257bb162053ce55-68881713',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'order' => 0,
    'cart' => 0,
    'url' => 0,
    'router' => 0,
    'user' => 0,
    'hl' => 0,
    'item' => 0,
    'fm' => 0,
    'delivery' => 0,
    'address' => 0,
    'warehouse' => 0,
    'pay' => 0,
    'type_object' => 0,
    'key' => 0,
    'doc' => 0,
    'order_data' => 0,
    'n' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bb16207771a0_69806862',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bb16207771a0_69806862')) {function content_57bb16207771a0_69806862($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_dateformat')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/modifier.dateformat.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/plugins/function.cycle.php';
?><?php $_smarty_tpl->tpl_vars['order'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value->order, null, 0);?>
<?php $_smarty_tpl->tpl_vars['delivery'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getDelivery(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['address'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getAddress(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['cart'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getCart(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['order_data'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value->getOrderData(true,false), null, 0);?>
<?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value->getProductItems(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['user'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getUser(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['pay'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getPayment(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['hl'] = new Smarty_variable(array("n","hl"), null, 0);?>
<style type="text/css">
.order-table {
    border-collapse:collapse;
    border:1px solid #aaa;
}

.order-table td {
    padding:3px;
    border:1px solid #aaa;
}
</style>
Уважаемый, администратор! На сайте <?php echo $_smarty_tpl->tpl_vars['url']->value->getDomainStr();?>
 оформлен заказ.<br>
Номер заказа: <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getAdminUrl('edit',array("id"=>$_smarty_tpl->tpl_vars['order']->value['id']),'shop-orderctrl',true);?>
"><strong><?php echo $_smarty_tpl->tpl_vars['order']->value['order_num'];?>
</strong></a> от <strong><?php echo smarty_modifier_dateformat($_smarty_tpl->tpl_vars['order']->value['dateof'],"@date @time:@sec");?>
</strong>

<h3 style="margin:10px 0;">Покупатель</h3>
<table class="order-table">
        <?php if ($_smarty_tpl->tpl_vars['user']->value['is_company']) {?>
            <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"user"),$_smarty_tpl);?>
">
                <td class="otitle">
                    Наименование компании:
                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['company'];?>
</td>
            </tr>    
            <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"user"),$_smarty_tpl);?>
">
                <td class="otitle">
                    ИНН компании:
                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['company_inn'];?>
</td>
            </tr>   
        <?php }?>
        <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"user"),$_smarty_tpl);?>
">
            <td class="otitle">
                Фамилия Имя Отчество:
            </td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['surname'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['midname'];?>
 (<?php if ($_smarty_tpl->tpl_vars['order']->value['user_id']>0) {?><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
<?php } else { ?>Без регистрации<?php }?>)</td>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"user"),$_smarty_tpl);?>
">
            <td class="otitle">
                Пол:
            </td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['__sex']->textView();?>
</td>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"user"),$_smarty_tpl);?>
">
            <td class="otitle">Телефон:</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
</td>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"user"),$_smarty_tpl);?>
">
            <td class="otitle">E-mail:</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['e_mail'];?>
</td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user']->value->getUserFields(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"user"),$_smarty_tpl);?>
">
                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['current_val'];?>
</td>
            </tr>                
        <?php } ?>
</table>

<h3 style="margin:10px 0;">Информация о заказе</h3>
<table class="order-table">
    <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"order"),$_smarty_tpl);?>
">
        <td class="otitle">
            Номер
        </td>
        <td><?php echo $_smarty_tpl->tpl_vars['order']->value['order_num'];?>
</td>
    </tr>
    <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"order"),$_smarty_tpl);?>
">
        <td class="otitle">
            Дата оформления
        </td>
        <td><?php echo $_smarty_tpl->tpl_vars['order']->value['dateof'];?>
</td>
    </tr>
    <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"order"),$_smarty_tpl);?>
">
        <td class="otitle">
            IP
        </td>
        <td><?php echo $_smarty_tpl->tpl_vars['order']->value['ip'];?>
</td>
    </tr>
    <tr class="status-bar <?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"order"),$_smarty_tpl);?>
">
        <td class="otitle">
            Статус:
        </td>
        <td height="20"><strong id="status_text"><?php echo $_smarty_tpl->tpl_vars['order']->value->getStatus()->title;?>
</strong>
        </td>
    </tr>
    <tr class="status-bar <?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"order"),$_smarty_tpl);?>
">
        <td class="otitle">
            Заказ оформлен в валюте:
        </td>
        <td><?php echo $_smarty_tpl->tpl_vars['order']->value['currency'];?>
</td>
    </tr>
    <tr class="status-bar <?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"order"),$_smarty_tpl);?>
">
        <td class="otitle">
            Комментарий к заказу:
        </td>
        <td><?php echo $_smarty_tpl->tpl_vars['order']->value['comments'];?>
</td>
    </tr>                        
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value->getExtraInfo(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <tr class="status-bar <?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"order"),$_smarty_tpl);?>
">
            <td class="otitle">
                <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
:
            </td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
</td>
        </tr>                         
    <?php } ?>                        
    <?php $_smarty_tpl->tpl_vars['fm'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getFieldsManager(), null, 0);?>
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

<?php if ($_smarty_tpl->tpl_vars['order']->value['delivery']) {?>
    <h3 style="margin:10px 0;">Доставка</h3>
    <table class="order-table delivery-params">
            <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"delivery"),$_smarty_tpl);?>
">
                <td width="20" class="otitle">
                    Тип
                </td>
                <td class="d_title"><?php echo $_smarty_tpl->tpl_vars['delivery']->value['title'];?>
</td>
            </tr>
            <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"delivery"),$_smarty_tpl);?>
">
                <td class="otitle">
                    Индекс
                </td>
                <td class="d_zipcode"><?php echo $_smarty_tpl->tpl_vars['address']->value['zipcode'];?>
</td>
            </tr>
            <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"delivery"),$_smarty_tpl);?>
">
                <td class="otitle">Страна</td>
                <td class="d_country"><?php echo $_smarty_tpl->tpl_vars['address']->value['country'];?>
</td>
            </tr>
            <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"delivery"),$_smarty_tpl);?>
">
                <td class="otitle">Край/область</td>
                <td class="d_region"><?php echo $_smarty_tpl->tpl_vars['address']->value['region'];?>
</td>
            </tr>
            <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"delivery"),$_smarty_tpl);?>
">
                <td class="otitle">Город</td>
                <td class="d_city"><?php echo $_smarty_tpl->tpl_vars['address']->value['city'];?>
</td>
            </tr>
            <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"delivery"),$_smarty_tpl);?>
">
                <td class="otitle">Адрес</td>
                <td class="d_address"><?php echo $_smarty_tpl->tpl_vars['address']->value['address'];?>
</td>
            </tr>
            <?php if ($_smarty_tpl->tpl_vars['delivery']->value->getTypeObject()->isMyselfDelivery()) {?>
            <?php $_smarty_tpl->tpl_vars['warehouse'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value->order->getWarehouse(), null, 0);?> 
            <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"delivery"),$_smarty_tpl);?>
">
                <td class="otitle">Склад самовывоза</td>
                <td class="d_address">"<?php echo $_smarty_tpl->tpl_vars['warehouse']->value['title'];?>
" (Адрес: <?php echo $_smarty_tpl->tpl_vars['warehouse']->value['adress'];?>
)</td>
            </tr>
            <?php }?>
    </table>    
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['order']->value['payment']) {?>
    <h3 style="margin:10px 0;">Оплата</h3>
    <table class="order-table">
            <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"payment"),$_smarty_tpl);?>
">
                <td width="20" class="otitle">
                    Тип
                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['pay']->value['title'];?>
</td>
            </tr>
            <?php if ($_smarty_tpl->tpl_vars['pay']->value->hasDocs()) {?>
            <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"payment"),$_smarty_tpl);?>
">
                <td width="20" class="otitle">
                    Документы на оплату
                </td>
                <td>
                    <?php $_smarty_tpl->tpl_vars['type_object'] = new Smarty_variable($_smarty_tpl->tpl_vars['pay']->value->getTypeObject(), null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['doc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['doc']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['type_object']->value->getDocsName(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['doc']->key => $_smarty_tpl->tpl_vars['doc']->value) {
$_smarty_tpl->tpl_vars['doc']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['doc']->key;
?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['type_object']->value->getDocUrl($_smarty_tpl->tpl_vars['key']->value,true);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['doc']->value['title'];?>
</a><br>
                    <?php } ?>
                </td>
            </tr>
            <?php }?>
            <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"payment"),$_smarty_tpl);?>
">
                <td class="otitle">
                    Заказ оплачен?
                </td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['order']->value['is_payed']) {?>Да<?php } else { ?>Нет<?php }?>
                </td>
            </tr>                    
    </table>  
<?php }?>
<br><br>
<table cellpadding="5" border="1" bordercolor="#969696" style="border-collapse:collapse; border:1px solid #969696">
    <thead>
    <tr>
        <th>Наименование</th>
        <th>Код</th>
        <th>Вес</th>
        <th>Цена</th>
        <th>Кол-во</th>
        <th>Стоимость</th>
    </tr>
    </thead>
    <tbody>
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
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['title'];?>

                    <br>
                    <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['cartitem']['model'])) {?>Модель: <?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['model'];?>
<?php }?>
                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['barcode'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['single_weight'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['single_cost'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['amount'];?>
</td>
                <td>
                    <span class="cost"><?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
</span>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['discount']>0) {?><div class="discount">скидка <?php echo $_smarty_tpl->tpl_vars['item']->value['discount'];?>
</div><?php }?>
                </td>
            </tr>
        <?php } ?>
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
                <td colspan="5"><?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['title'];?>
</td>
                <td><?php if ($_smarty_tpl->tpl_vars['item']->value['total']>0) {?><?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
<?php }?></td>
            </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr class="last">
            <td colspan="2" class="tools"></td>
            <td class="total">Вес: <span class="total_weight"><?php echo $_smarty_tpl->tpl_vars['order_data']->value['total_weight'];?>
</span></td>
            <td></td>
            <td></td>
            <td class="total">
                Итого: <span class="summary"><?php echo $_smarty_tpl->tpl_vars['order_data']->value['total_cost'];?>
</span>
            </td>
        </tr>
    </tfoot>
 </table>

 <?php }} ?>
