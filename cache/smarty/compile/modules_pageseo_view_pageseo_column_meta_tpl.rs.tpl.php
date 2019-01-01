<?php /* Smarty version Smarty-3.1.18, created on 2017-03-15 09:43:46
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/pageseo/view/pageseo_column_meta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204232580158c8e2a24b03e1-74186664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80fa2061a50eea652de94bbf658129c0351ce817' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/pageseo/view/pageseo_column_meta.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '204232580158c8e2a24b03e1-74186664',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cell' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58c8e2a251a6d4_26564283',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c8e2a251a6d4_26564283')) {function content_58c8e2a251a6d4_26564283($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_teaser')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/modifier.teaser.php';
?><strong><?php echo $_smarty_tpl->tpl_vars['cell']->value->getRow('meta_title');?>
</strong><br>
<?php echo smarty_modifier_teaser($_smarty_tpl->tpl_vars['cell']->value->getRow('meta_keywords'),"100");?>
<br>
<?php echo smarty_modifier_teaser($_smarty_tpl->tpl_vars['cell']->value->getRow('meta_description'),"100");?>
<br><?php }} ?>
