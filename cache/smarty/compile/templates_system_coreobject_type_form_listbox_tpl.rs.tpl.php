<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 19:44:25
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/coreobject/type/form/listbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:452869620578912e9dcc2d5-19934906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd00d6f9b23fb6132c3a0f7ee55d4945166756227' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/coreobject/type/form/listbox.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '452869620578912e9dcc2d5-19934906',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_578912e9f414c1_30781690',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578912e9f414c1_30781690')) {function content_578912e9f414c1_30781690($_smarty_tpl) {?><?php if (!is_callable('smarty_function_rshtml_options')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.rshtml_options.php';
?><select name="<?php echo $_smarty_tpl->tpl_vars['field']->value->getFormName();?>
" <?php echo $_smarty_tpl->tpl_vars['field']->value->getAttr();?>
>
<?php echo smarty_function_rshtml_options(array('options'=>$_smarty_tpl->tpl_vars['field']->value->getList(),'selected'=>$_smarty_tpl->tpl_vars['field']->value->get()),$_smarty_tpl);?>

</select>
<?php echo $_smarty_tpl->getSubTemplate ("%system%/coreobject/type/form/block_error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
