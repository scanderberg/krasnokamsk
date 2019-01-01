<?php /* Smarty version Smarty-3.1.18, created on 2016-07-23 09:54:40
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/coreobject/type/form/image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22616592579314b0cfcbf6-39255057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9025bd41e1afb81e394beedcf078f1aaccb20f8e' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/coreobject/type/form/image.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '22616592579314b0cfcbf6-39255057',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_579314b0d6c6b2_81501683',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579314b0d6c6b2_81501683')) {function content_579314b0d6c6b2_81501683($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['field']->value->get()!='') {?>
    <img src="<?php echo $_smarty_tpl->tpl_vars['field']->value->getUrl($_smarty_tpl->tpl_vars['field']->value->preview_width,$_smarty_tpl->tpl_vars['field']->value->preview_height,$_smarty_tpl->tpl_vars['field']->value->preview_resize_type);?>
"><br>
    <input type="checkbox" value="1" name="del_<?php echo $_smarty_tpl->tpl_vars['field']->value->getName();?>
">Удалить<br>
<?php }?>
<input type="file" name="<?php echo $_smarty_tpl->tpl_vars['field']->value->getFormName();?>
"><?php }} ?>
