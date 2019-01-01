<?php /* Smarty version Smarty-3.1.18, created on 2016-08-22 18:11:28
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/checkout/finish.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56234712857bb1620c39955-48890837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8bac7135f267d9c6c1becd8727e2618675722ce' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/checkout/finish.tpl',
      1 => 1462811598,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '56234712857bb1620c39955-48890837',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'router' => 0,
    'order' => 0,
    'user' => 0,
    'fmanager' => 0,
    'field' => 0,
    'delivery' => 0,
    'pay' => 0,
    'type_object' => 0,
    'key' => 0,
    'doc' => 0,
    'cart' => 0,
    'orderdata' => 0,
    'item' => 0,
    'orderitem' => 0,
    'barcode' => 0,
    'multioffer_titles' => 0,
    'multioffer' => 0,
    'offer_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bb1620d11ee7_57695614',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bb1620d11ee7_57695614')) {function content_57bb1620d11ee7_57695614($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/plugins/modifier.date_format.php';
?><h2><span>Заказ успешно оформлен</span></h2>
<p class="mb10 underText">
    Следить за изменениями статуса заказа можно в разделе <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('shop-front-myorders');?>
" target="_blank">история заказов</a>. 
    Все уведомления об изменениях в данном заказе также будут отправлены на электронную почту покупателя.
</p>
<div class="orderInfo fullwidth">
    <h1 style="font-size:20px; ">Заказ N <?php echo $_smarty_tpl->tpl_vars['order']->value['order_num'];?>
 от <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['order']->value['dateof'],"d.m.Y");?>
</h1>
    
    <?php $_smarty_tpl->tpl_vars['user'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getUser(), null, 0);?>
    <ul class="section">
        <li><span class="key">Заказчик:</span> <?php echo $_smarty_tpl->tpl_vars['user']->value['surname'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</li>
        <li><span class="key">Телефон:</span> <?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
</li>
        <li><span class="key">E-mail:</span> <?php echo $_smarty_tpl->tpl_vars['user']->value['e_mail'];?>
</li>
    </ul>
    
    <?php $_smarty_tpl->tpl_vars['fmanager'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getFieldsManager(), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['fmanager']->value->notEmpty()) {?>
        <ul class="section">
            <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fmanager']->value->getStructure(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
            <li><span class="key"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
:</span> <?php echo $_smarty_tpl->tpl_vars['fmanager']->value->textView($_smarty_tpl->tpl_vars['field']->value['alias']);?>
</li>
            <?php } ?>
        </ul>
    <?php }?>
    
    <?php $_smarty_tpl->tpl_vars['delivery'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getDelivery(), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['address'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getAddress(), null, 0);?>
    <ul class="section">
        <?php if ($_smarty_tpl->tpl_vars['order']->value['delivery']) {?>
            <li><span class="key">Доставка:</span> <?php echo $_smarty_tpl->tpl_vars['delivery']->value['title'];?>
</li>
        <?php }?>
    </ul>
    <?php if ($_smarty_tpl->tpl_vars['order']->value['payment']) {?>
        <?php $_smarty_tpl->tpl_vars['pay'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getPayment(), null, 0);?>
        <ul class="section">
            <li><span class="key">Оплата:</span> <?php echo $_smarty_tpl->tpl_vars['pay']->value['title'];?>
</li>
        </ul>
    <?php }?>
</div>

<?php if ($_smarty_tpl->tpl_vars['order']->value->getPayment()->hasDocs()) {?>
<div class="paymentDocuments">
    <h3>Документы на оплату</h3>
    <?php if ($_smarty_tpl->tpl_vars['user']->value['id']) {?>
        <p class="helpText underText">Воспользуйтесь следующими документами для оплаты заказа. Эти документы всегда доступны в разделе <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('shop-front-myorders');?>
" target="_blank">история заказов</a></p>
    <?php }?>
    <ul class="docsList">
        <?php $_smarty_tpl->tpl_vars['type_object'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getPayment()->getTypeObject(), null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['doc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['doc']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['type_object']->value->getDocsName(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['doc']->key => $_smarty_tpl->tpl_vars['doc']->value) {
$_smarty_tpl->tpl_vars['doc']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['doc']->key;
?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['type_object']->value->getDocUrl($_smarty_tpl->tpl_vars['key']->value);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['doc']->value['title'];?>
</a></li>
        <?php } ?>
    </ul>
</div>    
<?php }?>

<div class="cartInfo fullwidth">
    <?php $_smarty_tpl->tpl_vars['orderdata'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value->getOrderData(), null, 0);?>
    <table class="orderBasket">
        <tbody class="head">
            <tr>
                <td></td>
                <td>Количество</td>
                <td>Цена</td>
            </tr>
        </tbody>
        <tbody>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['orderdata']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['n']->value = $_smarty_tpl->tpl_vars['item']->key;
 $_smarty_tpl->tpl_vars['item']->index++;
 $_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["basket"]['first'] = $_smarty_tpl->tpl_vars['item']->first;
?>
            <?php $_smarty_tpl->tpl_vars['orderitem'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['cartitem'], null, 0);?>
            <tr <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['basket']['first']) {?>class="first"<?php }?>>
                <td>
                    <?php $_smarty_tpl->tpl_vars['barcode'] = new Smarty_variable($_smarty_tpl->tpl_vars['orderitem']->value['barcode'], null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['offer_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['orderitem']->value['model'], null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['multioffer_titles'] = new Smarty_variable($_smarty_tpl->tpl_vars['orderitem']->value->getMultiOfferTitles(), null, 0);?> 

                    <span class="prod-name"><?php echo $_smarty_tpl->tpl_vars['orderitem']->value['title'];?>
</span>
                    <div class="codeLine">
                        <?php if ($_smarty_tpl->tpl_vars['barcode']->value!='') {?>Артикул:<span class="value"><?php echo $_smarty_tpl->tpl_vars['barcode']->value;?>
</span>&nbsp;&nbsp;<?php }?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['multioffer_titles']->value)) {?>
                            <div class="multioffersWrap">
                                Комплектация: 
                                <?php  $_smarty_tpl->tpl_vars['multioffer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['multioffer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['multioffer_titles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['multioffer']->key => $_smarty_tpl->tpl_vars['multioffer']->value) {
$_smarty_tpl->tpl_vars['multioffer']->_loop = true;
?>
                                    <div>
                                        <span class="value"><?php echo $_smarty_tpl->tpl_vars['multioffer']->value['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['multioffer']->value['value'];?>
</span>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['offer_title']->value!='') {?>
                            Комплектация:<span class="value"><?php echo $_smarty_tpl->tpl_vars['offer_title']->value;?>
</span>
                        <?php }?>
                    </div>
                </td>
                <td width="110">
                    <?php echo $_smarty_tpl->tpl_vars['orderitem']->value['amount'];?>
 <?php echo $_smarty_tpl->tpl_vars['orderitem']->value['data']['unit'];?>

                </td>
                <td width="160">
                    <span class="priceBlock">
                        <span class="priceValue"><?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
</span>
                    </span>
                    <div class="discount">
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['discount']>0) {?>
                        скидка <?php echo $_smarty_tpl->tpl_vars['item']->value['discount'];?>

                        <?php }?>
                    </div>
                </td>
            </tr>
            <?php } ?>
        </tbody>
        <tbody class="additional">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orderdata']->value['other']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->index++;
 $_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["other"]['first'] = $_smarty_tpl->tpl_vars['item']->first;
?>
            <tr <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['other']['first']) {?>class=""<?php }?>>
                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['title'];?>
</td>
                <td class="price"><?php if ($_smarty_tpl->tpl_vars['item']->value['total']!=0) {?><?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
<?php }?></td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot class="summary">
            <tr>
                <td colspan="2">Итого</td>
                <td><?php echo $_smarty_tpl->tpl_vars['orderdata']->value['total_cost'];?>
</td>
            </tr>
        </tfoot>
    </table>        
    <?php if ($_smarty_tpl->tpl_vars['order']->value->canOnlinePay()) {?>
	<?php if ($_smarty_tpl->tpl_vars['delivery']->value['id']==2) {?>
	<div align="center" style="color: red!important;">
	Для подтверждения серьёзности намерений Вам нужно отправить нам предоплату за доставку в размере <?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>

	</div>
        <a href="http://стройбаза-к.рф/onlinepay/index.php?id=<?php echo $_smarty_tpl->tpl_vars['order']->value['order_num'];?>
&summa=1000" class="formSave">Сделать предоплату онлайн</a>
		
	<?php } elseif ($_smarty_tpl->tpl_vars['delivery']->value['id']==4) {?>
		
	<a href="<?php echo $_smarty_tpl->tpl_vars['order']->value->getOnlinePayUrl();?>
" class="formSave">Оплатить онлайн</a>
		
	<?php }?>
	
    <?php } else { ?>
	
	<?php if ($_smarty_tpl->tpl_vars['pay']->value['id']==5) {?>
        <a href="https://alfabank.ru" class="formSave">Получить кредит</a>
	<?php } else { ?>
	<div align="center">
	Наш менеджер с вами свяжется для обсуждения деталей заказа.
	</div>

		<a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getRootUrl();?>
" class="formSave">Завершить заказ</a>
	<?php }?>
	
    <?php }?>
</div>

<br><br><br><?php }} ?>
