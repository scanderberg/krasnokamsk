<?php /* Smarty version Smarty-3.1.18, created on 2016-07-16 07:40:27
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/coreobject/type/form/checkbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13175025495789babbb2cce4-61197269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8044d0c1654f0c991468ce7687d295792d3b6694' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/coreobject/type/form/checkbox.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '13175025495789babbb2cce4-61197269',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5789babbb49461_19784336',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5789babbb49461_19784336')) {function content_5789babbb49461_19784336($_smarty_tpl) {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['field']->value->getFormName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value->getCheckboxParam('on');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value->get()==$_smarty_tpl->tpl_vars['field']->value->getCheckboxParam('on')) {?>checked<?php }?> <?php echo $_smarty_tpl->tpl_vars['field']->value->getAttr();?>
>
<?php echo $_smarty_tpl->getSubTemplate ("%system%/coreobject/type/form/block_error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
