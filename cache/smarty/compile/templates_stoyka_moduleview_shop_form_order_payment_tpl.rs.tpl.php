<?php /* Smarty version Smarty-3.1.18, created on 2016-07-16 07:40:27
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/form/order/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12116021955789babbab3786-58988577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d403476c600d6c893b8bb898bd6f7c129129a38' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/form/order/payment.tpl',
      1 => 1460044872,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '12116021955789babbab3786-58988577',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
    'payment_id' => 0,
    'hl' => 0,
    'pay' => 0,
    'type_object' => 0,
    'key' => 0,
    'doc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5789babbb270d3_04793239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5789babbb270d3_04793239')) {function content_5789babbb270d3_04793239($_smarty_tpl) {?><?php if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/plugins/function.cycle.php';
?><?php if ($_smarty_tpl->tpl_vars['elem']->value['payment']>0) {?>
    <?php $_smarty_tpl->tpl_vars['hl'] = new Smarty_variable(array("n","hl"), null, 0);?> 
    <h3>Оплата <a href="<?php echo smarty_function_adminUrl(array('do'=>'paymentDialog','order_id'=>$_smarty_tpl->tpl_vars['elem']->value['id']),$_smarty_tpl);?>
" class="tool-edit crud-add" title="редактировать"></a></h3>
    <?php if (isset($_smarty_tpl->tpl_vars['payment_id']->value)) {?>
       <input type="hidden" name="payment" value="<?php echo $_smarty_tpl->tpl_vars['payment_id']->value;?>
"/>
    <?php }?>
    <table class="order-table">
            <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"payment"),$_smarty_tpl);?>
">
                <td width="20">
                    Тип
                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['pay']->value['title'];?>
</td>
            </tr>
            <?php if ($_smarty_tpl->tpl_vars['elem']->value['id']>0) {?>
                <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"payment"),$_smarty_tpl);?>
">
                    <td>
                        Заказ оплачен?
                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['elem']->value['__is_payed']->formView();?>

                    </td>
                </tr>
                <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"payment"),$_smarty_tpl);?>
">
                    <td>
                        Документы покупателя
                    </td>
                    <td>
                        <?php $_smarty_tpl->tpl_vars['type_object'] = new Smarty_variable($_smarty_tpl->tpl_vars['pay']->value->getTypeObject(), null, 0);?>
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
    </table>
<?php } else { ?>
    <p class="emptyOrderBlock">Тип оплаты не указан. <a href="<?php echo smarty_function_adminUrl(array('do'=>'paymentDialog','order_id'=>$_smarty_tpl->tpl_vars['elem']->value['id']),$_smarty_tpl);?>
" class="crud-add">Указать оплату</a>.</p>
<?php }?><?php }} ?>
