<?php /* Smarty version Smarty-3.1.18, created on 2017-03-15 09:40:58
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/filter/type/datetime.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167960967858c8e1fa529e61-08085561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51ae5a641de08d4ede71dbbd7bcda643c0e7d2dc' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/filter/type/datetime.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '167960967858c8e1fa529e61-08085561',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fitem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58c8e1fa5ebc61_74650810',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c8e1fa5ebc61_74650810')) {function content_58c8e1fa5ebc61_74650810($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
?><?php echo smarty_function_addjs(array('file'=>"jquery.datetimeaddon.min.js"),$_smarty_tpl);?>

<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['fitem']->value->getName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['fitem']->value->getValue();?>
" <?php echo $_smarty_tpl->tpl_vars['fitem']->value->getAttrString();?>
 datetime="datetime"><?php }} ?>
