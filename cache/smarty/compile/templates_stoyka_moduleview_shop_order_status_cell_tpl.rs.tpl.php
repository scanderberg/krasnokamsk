<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:51:53
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/order_status_cell.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16494614365788dc69b15bd0-04937752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '241586abf6491e322d63eb4db1a57d816164f648' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/order_status_cell.tpl',
      1 => 1460044064,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '16494614365788dc69b15bd0-04937752',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cell' => 0,
    'status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc69b2b239_93040783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc69b2b239_93040783')) {function content_5788dc69b2b239_93040783($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['status'] = new Smarty_variable($_smarty_tpl->tpl_vars['cell']->value->getRow()->getStatus(), null, 0);?>
<div class="orderStatusColor" style="background: <?php echo $_smarty_tpl->tpl_vars['status']->value['bgcolor'];?>
;"></div><?php echo $_smarty_tpl->tpl_vars['status']->value['title'];?>
<?php }} ?>
