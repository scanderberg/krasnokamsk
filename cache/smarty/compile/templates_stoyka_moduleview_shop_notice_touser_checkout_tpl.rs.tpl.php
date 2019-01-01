<?php /* Smarty version Smarty-3.1.18, created on 2016-08-22 18:11:28
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/notice/touser_checkout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43452026457bb16202811f0-45173974%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a01b8371479645734f4046fa4e7d651d047e6bf9' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/notice/touser_checkout.tpl',
      1 => 1460044892,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '43452026457bb16202811f0-45173974',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'cart' => 0,
    'url' => 0,
    'delivery' => 0,
    'address' => 0,
    'pay' => 0,
    'type_object' => 0,
    'key' => 0,
    'doc' => 0,
    'warehouse' => 0,
    'order_data' => 0,
    'n' => 0,
    'products' => 0,
    'item' => 0,
    'router' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bb16203b7195_01346708',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bb16203b7195_01346708')) {function content_57bb16203b7195_01346708($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/plugins/modifier.date_format.php';
?><?php $_smarty_tpl->tpl_vars['delivery'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value->order->getDelivery(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['address'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value->order->getAddress(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['pay'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value->order->getPayment(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['cart'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value->order->getCart(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['user'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value->order->getUser(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['order_data'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value->getOrderData(true,false), null, 0);?>
<?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value->getProductItems(), null, 0);?>

Вы сделали заказ в интернет-магазине <?php echo $_smarty_tpl->tpl_vars['url']->value->getDomainStr();?>
.<br>
Ваш заказ будет обработан в течение 1 рабочего дня.<br>
При необходимости, с Вами свяжется наш менеджер.<br>
Номер Вашего заказа: <?php echo $_smarty_tpl->tpl_vars['data']->value->order['order_num'];?>
<br>
Заказ оформлен: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value->order['dateof'],"%d.%m.%Y");?>
<br>

<p><strong>Параметры заказа</strong></p>
<?php if ($_smarty_tpl->tpl_vars['data']->value->order['delivery']&&!$_smarty_tpl->tpl_vars['delivery']->value->getTypeObject()->isMyselfDelivery()) {?>
    Адрес доставки: <?php echo $_smarty_tpl->tpl_vars['address']->value->getLineView();?>
<br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['data']->value->order['payment']) {?>
    Способ оплаты: <?php echo $_smarty_tpl->tpl_vars['pay']->value['title'];?>
<br>
    <?php if ($_smarty_tpl->tpl_vars['pay']->value->hasDocs()) {?><?php $_smarty_tpl->tpl_vars['type_object'] = new Smarty_variable($_smarty_tpl->tpl_vars['pay']->value->getTypeObject(), null, 0);?>
    Документы на оплату: <?php  $_smarty_tpl->tpl_vars['doc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['doc']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['type_object']->value->getDocsName(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['doc']->key => $_smarty_tpl->tpl_vars['doc']->value) {
$_smarty_tpl->tpl_vars['doc']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['doc']->key;
?><a href="<?php echo $_smarty_tpl->tpl_vars['type_object']->value->getDocUrl($_smarty_tpl->tpl_vars['key']->value,true);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['doc']->value['title'];?>
</a> <?php } ?><br>
    <?php }?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['data']->value->order['delivery']) {?>
    Способ доставки: <?php echo $_smarty_tpl->tpl_vars['delivery']->value['title'];?>
<br>
    <?php if ($_smarty_tpl->tpl_vars['data']->value->order['warehouse']&&$_smarty_tpl->tpl_vars['delivery']->value->getTypeObject()->isMyselfDelivery()) {?>
        <?php $_smarty_tpl->tpl_vars['warehouse'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value->order->getWarehouse(), null, 0);?> 
        Склад самовывоза - "<?php echo $_smarty_tpl->tpl_vars['warehouse']->value['title'];?>
" (Адрес: <?php echo $_smarty_tpl->tpl_vars['warehouse']->value['adress'];?>
) <br>
    <?php }?>
<?php }?>

<p><strong>Состав заказа</strong></p>

<table cellpadding="5" border="1" bordercolor="#969696" style="border-collapse:collapse; border:1px solid #969696">
    <thead>
    <tr>
        <th>Наименование</th>
        <th>Код</th>
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
        <tr>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['title'];?>

                <br>
                <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['cartitem']['model'])) {?>Модель: <?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['model'];?>
<?php }?>
            </td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['barcode'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['single_cost'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['amount'];?>
</td>
            <td>
                <span class="cost"><?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['discount']>0) {?>скидка <?php echo $_smarty_tpl->tpl_vars['item']->value['discount'];?>
<?php }?>
            </td>
        </tr>
        <?php } ?>
    </tbody>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_data']->value['other']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['n']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
        <tr>
            <td colspan="4"><?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['title'];?>
</td>
            <td><?php if ($_smarty_tpl->tpl_vars['item']->value['total']>0) {?><?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
<?php }?></td>
        </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="4"></td>
            <td>
                Итого: <?php echo $_smarty_tpl->tpl_vars['order_data']->value['total_cost'];?>

            </td>
        </tr>
    </tfoot>
</table>

<p>Вы можете изменить свои данные и ознакомиться со статусом заказа в разделе <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('shop-front-myorders',array(),true);?>
">«Личный кабинет»</a>.</p>

<p>С Наилучшими пожеланиями,<br>
        Администрация интернет-магазина <?php echo $_smarty_tpl->tpl_vars['url']->value->getDomainStr();?>
</p><?php }} ?>
