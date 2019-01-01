<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:51:53
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/filter/type/user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18850536105788dc69a7f431-26426256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01a936bfe358419fbe1fb403e40ef5559881ee59' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/filter/type/user.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '18850536105788dc69a7f431-26426256',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fitem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc69ab99e0_62135928',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc69ab99e0_62135928')) {function content_5788dc69ab99e0_62135928($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
?><?php echo smarty_function_addjs(array('file'=>"jquery.deftext.js",'basepath'=>"common"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"jquery.userselect.js",'basepath'=>"common"),$_smarty_tpl);?>


<input type="text" data-name="<?php echo $_smarty_tpl->tpl_vars['fitem']->value->getName();?>
" <?php if ($_smarty_tpl->tpl_vars['fitem']->value->getValue()>0) {?> value="<?php echo $_smarty_tpl->tpl_vars['fitem']->value->getTextValue();?>
"<?php }?> <?php echo $_smarty_tpl->tpl_vars['fitem']->value->getAttrString();?>
 data-request-url="<?php echo $_smarty_tpl->tpl_vars['fitem']->value->getRequestUrl();?>
">
<?php if ($_smarty_tpl->tpl_vars['fitem']->value->getValue()>0) {?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fitem']->value->getName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['fitem']->value->getValue();?>
"><?php }?><?php }} ?>
