<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:51:53
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/order_tree_cell.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20208493095788dc697c1ac3-45245996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ec3e419207e5b456472d73867347ce1ba31c7c8' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/order_tree_cell.tpl',
      1 => 1460044064,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '20208493095788dc697c1ac3-45245996',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cell' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc6990b968_63278050',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc6990b968_63278050')) {function content_5788dc6990b968_63278050($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['row'] = new Smarty_variable($_smarty_tpl->tpl_vars['cell']->value->getRow(), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['cell']->value->getRow('bgcolor')!==null) {?><div class="vertMiddle orderStatusColor" style="background: <?php echo $_smarty_tpl->tpl_vars['cell']->value->getRow('bgcolor');?>
"></div><?php }?> 
<span class="vertMiddle"><?php echo $_smarty_tpl->tpl_vars['cell']->value->getValue();?>
</span>
<sup><?php if (is_object($_smarty_tpl->tpl_vars['row']->value)) {?><?php echo $_smarty_tpl->tpl_vars['row']->value->getOrdersCount();?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['row']->value['orders_count'];?>
<?php }?></sup><?php }} ?>
