<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 13:56:41
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/product/recomended.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12157288957bc2be9351100-13510340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4806f5bf785c476262218dd1cd8badecbce4f6fa' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/product/recomended.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '12157288957bc2be9351100-13510340',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bc2be935c453_47791036',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc2be935c453_47791036')) {function content_57bc2be935c453_47791036($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['elem']->value->getProductsDialog()->getHtml();?>
<?php }} ?>
