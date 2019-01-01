<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:51:51
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/filter/type/select.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11266339195788dc6786e3c5-53899677%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22ed01dd80d579a3d50ebf213c2afd3ca44f2753' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/filter/type/select.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '11266339195788dc6786e3c5-53899677',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fitem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc678b0159_81549802',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc678b0159_81549802')) {function content_5788dc678b0159_81549802($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/plugins/function.html_options.php';
?><select name="<?php echo $_smarty_tpl->tpl_vars['fitem']->value->getName();?>
" <?php echo $_smarty_tpl->tpl_vars['fitem']->value->getAttrString();?>
>
<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fitem']->value->getList(),'selected'=>$_smarty_tpl->tpl_vars['fitem']->value->getValue()),$_smarty_tpl);?>

</select><?php }} ?>
