<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:51:53
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/order_totalcost_cell.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12378782395788dc69b31409-79147311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '363f191b4338bf0ee02fce15d5aedbe2345f63bc' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/order_totalcost_cell.tpl',
      1 => 1460044064,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '12378782395788dc69b31409-79147311',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cell' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc69b970c1_96167989',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc69b970c1_96167989')) {function content_5788dc69b970c1_96167989($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['cell']->value->getRow()->getTotalPrice(true,false);?>
<?php }} ?>
