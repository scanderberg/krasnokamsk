<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:51:53
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/meta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16927137335788dc69db1f71-09269837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c99b3c434b89d5924ffe771be3ea8f4500f2d845' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/meta.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '16927137335788dc69db1f71-09269837',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'meta_vars' => 0,
    'tagparam' => 0,
    'key' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc69dfae73_04181350',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc69dfae73_04181350')) {function content_5788dc69dfae73_04181350($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['tagparam'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tagparam']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['meta_vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tagparam']->key => $_smarty_tpl->tpl_vars['tagparam']->value) {
$_smarty_tpl->tpl_vars['tagparam']->_loop = true;
?>
<meta <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tagparam']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" <?php } ?>>
<?php } ?><?php }} ?>
