<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:51:51
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/catalog/tree_item_cell.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1825353735788dc6742ef95-37348975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6671d741c66600a338fd4e951e2927861e96bf3' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/catalog/tree_item_cell.tpl',
      1 => 1458682266,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '1825353735788dc6742ef95-37348975',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cell' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc674b1be2_24190958',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc674b1be2_24190958')) {function content_5788dc674b1be2_24190958($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['cell']->value->getValue();?>
 <sup class="under-text"><?php echo $_smarty_tpl->tpl_vars['cell']->value->getRow('itemcount');?>
</sup><?php }} ?>
