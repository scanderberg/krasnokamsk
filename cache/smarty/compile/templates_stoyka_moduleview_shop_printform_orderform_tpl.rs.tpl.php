<?php /* Smarty version Smarty-3.1.18, created on 2016-10-27 11:22:09
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/printform/orderform.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12221914535811b931b194a4-82525751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67266e0b78ebc9f2c4528e98b05ac1f218027c80' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/printform/orderform.tpl',
      1 => 1460044894,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '12221914535811b931b194a4-82525751',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mod_css' => 0,
    'order' => 0,
    'cart' => 0,
    'hl' => 0,
    'user' => 0,
    'item' => 0,
    'fm' => 0,
    'delivery' => 0,
    'address' => 0,
    'pay' => 0,
    'order_data' => 0,
    'n' => 0,
    'products' => 0,
    'product' => 0,
    'level' => 0,
    'value' => 0,
    'multioffers_values' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5811b932012e67_68605002',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5811b932012e67_68605002')) {function content_5811b932012e67_68605002($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/plugins/function.cycle.php';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['mod_css']->value;?>
orderform.css" media="all" rel="stylesheet">
<body>
<?php echo $_smarty_tpl->getSubTemplate ("%shop%/printform/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php $_smarty_tpl->tpl_vars['delivery'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getDelivery(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['address'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getAddress(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['cart'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getCart(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['order_data'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value->getOrderData(true,false), null, 0);?>
<?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value->getProductItems(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['user'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getUser(), null, 0);?>

<?php $_smarty_tpl->tpl_vars['hl'] = new Smarty_variable(array("n","hl"), null, 0);?>
    <h1>Заказ №<?php echo $_smarty_tpl->tpl_vars['order']->value['order_num'];?>
 от <?php echo $_smarty_tpl->tpl_vars['order']->value['dateof'];?>
</h1>
    <div class="floatbox" style="margin-bottom:20px">
        <div class="o-leftcol <?php if (!$_smarty_tpl->tpl_vars['order']->value['delivery']&&!$_smarty_tpl->tpl_vars['order']->value['payment']) {?>width100pr<?php }?>">
            <div class="bordered">
                <h3>Покупатель</h3>
                <table class="order-table">
                        <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"user"),$_smarty_tpl);?>
">
                            <td class="otitle">
                                Фамилия Имя Отчество:
                            </td>
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['user']->value['surname'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['midname'];?>
 <?php if ($_smarty_tpl->tpl_vars['user']->value['id']) {?>(<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
)<?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['user']->value['is_company']) {?><div class="company_info"><?php echo $_smarty_tpl->tpl_vars['user']->value['company'];?>
, ИНН: <?php echo $_smarty_tpl->tpl_vars['user']->value['company_inn'];?>
</div><?php }?>
                            </td>
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
            </div>

            <br>
            <div class="bordered">
                <h3>Информация о заказе</h3>
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
            </div>        
            <br>
            <div><strong>Комментарий администратора</strong> (не отображается у покупателя): <?php echo $_smarty_tpl->tpl_vars['order']->value['admin_comments'];?>
</div>
            
        </div> <!-- leftcol -->

        <div class="o-rightcol">
            <div class="padd">
            <?php if ($_smarty_tpl->tpl_vars['order']->value['delivery']) {?>
                <div class="bordered">
                    <h3>Доставка</h3>
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
                    </table>            
                </div>
                <br>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['order']->value['payment']) {?>
                <?php $_smarty_tpl->tpl_vars['pay'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getPayment(), null, 0);?>
                <div class="bordered">
                    <h3>Оплата</h3>
                    <table class="order-table">
                            <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"payment"),$_smarty_tpl);?>
">
                                <td width="20" class="otitle">
                                    Тип
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['pay']->value['title'];?>
</td>
                            </tr>
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
                </div>
                <br>        
            <?php }?>
            </div>
        </div> <!-- right col -->
        
    </div> <!-- -->
    
    <table class="pr-table">
        <thead>
        <tr>
            <th></th>
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
                    <img src="<?php echo $_smarty_tpl->tpl_vars['product']->value->getMainImage(36,36,'xy');?>
">
                </td>
                <td>
                    <b><?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['title'];?>
</b>
                    <br>
                    <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['cartitem']['model'])) {?>Модель: <?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['model'];?>
<?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['multioffers']['use']) {?>
                        <div class="parameters">
                            
                               <?php $_smarty_tpl->tpl_vars['multioffers_values'] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['item']->value['cartitem']['multioffers']), null, 0);?> 
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
                <td colspan="6"><?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['title'];?>
</td>
                <td><?php if ($_smarty_tpl->tpl_vars['item']->value['total']>0) {?><?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
<?php }?></td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr class="last">
                <td colspan="3" class="tools"></td>
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
     <br><br>
     <label><strong>Текст для покупателя</strong> (данный текст будет виден покупателю на странице просмотра заказа)</label>:
     <?php echo $_smarty_tpl->tpl_vars['order']->value['user_text'];?>

 </body>
 </html><?php }} ?>
