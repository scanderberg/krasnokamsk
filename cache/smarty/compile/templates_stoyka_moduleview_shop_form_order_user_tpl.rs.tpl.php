<?php /* Smarty version Smarty-3.1.18, created on 2016-07-16 07:40:27
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/form/order/user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8069148005789babb378603-23936808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'deb95abe5f71d460bf7088b65123e56065d5687e' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/form/order/user.tpl',
      1 => 1460044872,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '8069148005789babb378603-23936808',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'hl' => 0,
    'user_num_of_order' => 0,
    'item' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5789babb459c21_17274680',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5789babb459c21_17274680')) {function content_5789babb459c21_17274680($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/plugins/function.cycle.php';
if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
?><?php if (isset($_smarty_tpl->tpl_vars['user']->value['id'])&&$_smarty_tpl->tpl_vars['user']->value['id']>0) {?>                 
    <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"/>
    <table class="order-table">
        <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"user"),$_smarty_tpl);?>
">
            <td class="otitle">
                Фамилия Имя Отчество:
            </td>
            <td>
                <a href="<?php echo smarty_function_adminUrl(array('mod_controller'=>"users-ctrl",'do'=>"edit",'id'=>$_smarty_tpl->tpl_vars['user']->value['id']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['user']->value['surname'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['midname'];?>
 (<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
)</a>&nbsp; 
                <a class="all-user-orders" href="<?php echo smarty_function_adminUrl(array('mod_controller'=>"shop-orderctrl",'f'=>array("user_id"=>$_smarty_tpl->tpl_vars['user']->value['id']),'do'=>false),$_smarty_tpl);?>
">все заказы (<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_num_of_order']->value)===null||$tmp==='' ? 0 : $tmp);?>
)</a>
            <?php if ($_smarty_tpl->tpl_vars['user']->value['is_company']) {?><div class="company_info"><?php echo $_smarty_tpl->tpl_vars['user']->value['company'];?>
, ИНН: <?php echo $_smarty_tpl->tpl_vars['user']->value['company_inn'];?>
</div><?php }?> <a class="crud-add all-user-orders" href="<?php echo smarty_function_adminUrl(array('do'=>'userDialog'),$_smarty_tpl);?>
">Указать другого</a>
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
            <td>Телефон:</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
</td>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"user"),$_smarty_tpl);?>
">
            <td>E-mail:</td>
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
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['current_val'];?>
</td>
            </tr>                
        <?php } ?>
    </table>
<?php } else { ?>
    <p class="emptyOrderBlock">Пользователь не указан. <a class="crud-add" href="<?php echo smarty_function_adminUrl(array('do'=>'userDialog'),$_smarty_tpl);?>
">Указать пользователя</a>.</p>
    <table class="order-table">
        <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"user"),$_smarty_tpl);?>
">
            <td class="otitle">
                Фамилия Имя Отчество:
            </td>
            <td><?php echo $_smarty_tpl->tpl_vars['order']->value['__user_fio']->formView();?>
</td>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"user"),$_smarty_tpl);?>
">
            <td class="otitle">
                E-mail:
            </td>
            <td><?php echo $_smarty_tpl->tpl_vars['order']->value['__user_email']->formView();?>
</td>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"user"),$_smarty_tpl);?>
">
            <td>Телефон:</td>
            <td><?php echo $_smarty_tpl->tpl_vars['order']->value['__user_phone']->formView();?>
</td>
        </tr>
    </table>
<?php }?><?php }} ?>
