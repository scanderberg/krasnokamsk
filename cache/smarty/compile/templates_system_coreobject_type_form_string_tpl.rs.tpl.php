<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 17:33:11
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/coreobject/type/form/string.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10278557005788f42717bd62-89753606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f4a1fe87dde8559aba1b21c62e7149169d06e30' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/coreobject/type/form/string.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '10278557005788f42717bd62-89753606',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
    'attr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788f4271d48d3_88185771',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788f4271d48d3_88185771')) {function content_5788f4271d48d3_88185771($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['attr'] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value->getAttrArray(), null, 0);?>
<input name="<?php echo $_smarty_tpl->tpl_vars['field']->value->getFormName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value->get();?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value->getMaxLength()>0) {?>maxlength="<?php echo $_smarty_tpl->tpl_vars['field']->value->getMaxLength();?>
"<?php }?> <?php echo $_smarty_tpl->tpl_vars['field']->value->getAttr();?>
 <?php if (!$_smarty_tpl->tpl_vars['attr']->value['type']) {?>type="text"<?php }?>/>
<?php echo $_smarty_tpl->getSubTemplate ("%system%/coreobject/type/form/block_error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
