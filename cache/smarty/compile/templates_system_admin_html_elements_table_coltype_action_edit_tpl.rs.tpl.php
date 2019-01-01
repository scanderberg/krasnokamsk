<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:51:51
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/table/coltype/action/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18617438925788dc6752cc38-35393095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b688165b47111b94a3b6314ac5ba82706cf89fec' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/table/coltype/action/edit.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '18617438925788dc6752cc38-35393095',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tool' => 0,
    'cell' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc67669469_03154731',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc67669469_03154731')) {function content_5788dc67669469_03154731($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['cell']->value->getHref($_smarty_tpl->tpl_vars['tool']->value->getHrefPattern());?>
" title="<?php echo $_smarty_tpl->tpl_vars['tool']->value->getTitle();?>
" class="tool <?php echo $_smarty_tpl->tpl_vars['tool']->value->getClass();?>
" <?php echo $_smarty_tpl->tpl_vars['cell']->value->getLineAttr($_smarty_tpl->tpl_vars['tool']->value);?>
></a><?php }} ?>
