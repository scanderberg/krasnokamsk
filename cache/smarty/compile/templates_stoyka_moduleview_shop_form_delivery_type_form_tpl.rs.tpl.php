<?php /* Smarty version Smarty-3.1.18, created on 2018-04-03 14:58:45
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/form/delivery/type_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6517014725ac36c7568ae62-24938981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6fd26a79274404e104f7dffd4f855a28843e8c4' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/form/delivery/type_form.tpl',
      1 => 1460044871,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '6517014725ac36c7568ae62-24938981',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type_object' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ac36c756ed993_27628376',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac36c756ed993_27628376')) {function content_5ac36c756ed993_27628376($_smarty_tpl) {?><tr>
    <td></td>
    <td><?php echo $_smarty_tpl->tpl_vars['type_object']->value->getDescription();?>
</td>
</tr>
<?php echo $_smarty_tpl->tpl_vars['type_object']->value->getFormHtml();?>
<?php }} ?>
