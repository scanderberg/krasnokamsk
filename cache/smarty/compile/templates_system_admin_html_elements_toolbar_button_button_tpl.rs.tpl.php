<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:51:53
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/toolbar/button/button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19571858755788dc69bb1b69-45136228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a632b7b267c0a47b8e096ff936621364389e861' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/toolbar/button/button.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '19571858755788dc69bb1b69-45136228',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'button' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc69bcb5a1_24899297',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc69bcb5a1_24899297')) {function content_5788dc69bcb5a1_24899297($_smarty_tpl) {?><a <?php if ($_smarty_tpl->tpl_vars['button']->value->getHref()!='') {?>href="<?php echo $_smarty_tpl->tpl_vars['button']->value->getHref();?>
"<?php }?> <?php echo $_smarty_tpl->tpl_vars['button']->value->getAttrLine();?>
><?php echo $_smarty_tpl->tpl_vars['button']->value->getTitle();?>
</a><?php }} ?>
