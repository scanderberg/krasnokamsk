<?php /* Smarty version Smarty-3.1.18, created on 2018-04-03 14:43:43
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/menu/view/form/menu/type_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8020814655ac368efc4c935-41959624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1391510888e90709319a0f18d02ef789cf5abf9d' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/menu/view/form/menu/type_form.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '8020814655ac368efc4c935-41959624',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'changeType' => 0,
    'app' => 0,
    'type_object' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ac368efc67952_60550755',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac368efc67952_60550755')) {function content_5ac368efc67952_60550755($_smarty_tpl) {?><tr>
    <td><?php if ($_smarty_tpl->tpl_vars['changeType']->value) {?><?php echo $_smarty_tpl->tpl_vars['app']->value->autoloadScripsAjaxBefore();?>
<?php }?></td>
    <td><?php echo $_smarty_tpl->tpl_vars['type_object']->value->getDescription();?>
</td>
</tr>
<?php echo $_smarty_tpl->tpl_vars['type_object']->value->getFormHtml();?>

<tr>
    <td colspan="2"><?php if ($_smarty_tpl->tpl_vars['changeType']->value) {?><?php echo $_smarty_tpl->tpl_vars['app']->value->autoloadScripsAjaxAfter();?>
<?php }?></td>
</tr><?php }} ?>
