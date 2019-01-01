<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:51:51
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/filter/type/date.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14990942005788dc678f6995-60704240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff08850095c47bd3439c762af3474b4f957282cb' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/filter/type/date.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '14990942005788dc678f6995-60704240',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fitem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc6790b807_60140042',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc6790b807_60140042')) {function content_5788dc6790b807_60140042($_smarty_tpl) {?><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['fitem']->value->getName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['fitem']->value->getValue();?>
" <?php echo $_smarty_tpl->tpl_vars['fitem']->value->getAttrString();?>
 datefilter="datefilter"><?php }} ?>
