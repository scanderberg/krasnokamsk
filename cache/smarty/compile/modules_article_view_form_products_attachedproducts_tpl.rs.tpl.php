<?php /* Smarty version Smarty-3.1.18, created on 2018-04-03 14:48:55
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/article/view/form/products/attachedproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1244369215ac36a275c7b16-86248865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd272c89777692566cfd663ca89e28bb8a9994bee' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/article/view/form/products/attachedproducts.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '1244369215ac36a275c7b16-86248865',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ac36a275d5be0_31200021',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac36a275d5be0_31200021')) {function content_5ac36a275d5be0_31200021($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['elem']->value->getAttachProductsDialog()->getHtml();?>
<?php }} ?>
