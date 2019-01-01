<?php /* Smarty version Smarty-3.1.18, created on 2018-04-03 10:12:44
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/debug/icon_def.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11508860475ac3296c307ec5-52246836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'faeac701a4135b6f75fef6105193e973af56cbd3' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/debug/icon_def.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '11508860475ac3296c307ec5-52246836',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tool' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ac3296c376b41_29524255',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac3296c376b41_29524255')) {function content_5ac3296c376b41_29524255($_smarty_tpl) {?><a <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tool']->value->getAttr(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?> <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
"<?php } ?>><?php echo $_smarty_tpl->tpl_vars['tool']->value->getText();?>
</a><?php }} ?>
