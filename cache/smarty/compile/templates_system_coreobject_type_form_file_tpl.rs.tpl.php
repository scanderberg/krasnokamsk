<?php /* Smarty version Smarty-3.1.18, created on 2016-07-23 09:54:40
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/coreobject/type/form/file.tpl" */ ?>
<?php /*%%SmartyHeaderCode:526141745579314b0caa1e1-60640209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '478a69d14ce0ff9c702f1ad55886c87a1a0cfa2a' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/coreobject/type/form/file.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '526141745579314b0caa1e1-60640209',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_579314b0cf8683_96131175',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579314b0cf8683_96131175')) {function content_579314b0cf8683_96131175($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['field']->value->get()!='') {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['field']->value->getLink();?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['field']->value->getFileName();?>
</a>&nbsp;
    <input type="checkbox" value="1" name="del_<?php echo $_smarty_tpl->tpl_vars['field']->value->getName();?>
">Удалить<br>
<?php }?>
<input type="file" name="<?php echo $_smarty_tpl->tpl_vars['field']->value->getFormName();?>
"><?php }} ?>
