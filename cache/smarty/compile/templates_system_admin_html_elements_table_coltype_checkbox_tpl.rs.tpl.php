<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:51:51
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/table/coltype/checkbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4832170465788dc67a4f255-69913427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c2c4998a9ebc233254ae7f546896b282f581a4d' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/table/coltype/checkbox.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '4832170465788dc67a4f255-69913427',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cell' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc67a67072_67928660',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc67a67072_67928660')) {function content_5788dc67a67072_67928660($_smarty_tpl) {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['cell']->value->getName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['cell']->value->getValue();?>
" <?php echo $_smarty_tpl->tpl_vars['cell']->value->getCellAttr();?>
><?php }} ?>
