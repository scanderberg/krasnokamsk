<?php /* Smarty version Smarty-3.1.18, created on 2016-07-16 07:40:27
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/coreobject/type/form/textarea.tpl" */ ?>
<?php /*%%SmartyHeaderCode:373491745789babb71d201-65983404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ea6b278b67a596cf533ebc427c032328f0050ab' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/coreobject/type/form/textarea.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '373491745789babb71d201-65983404',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5789babb7a24d8_72404659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5789babb7a24d8_72404659')) {function content_5789babb7a24d8_72404659($_smarty_tpl) {?><textarea name="<?php echo $_smarty_tpl->tpl_vars['field']->value->getFormName();?>
" <?php echo $_smarty_tpl->tpl_vars['field']->value->getAttr();?>
><?php echo $_smarty_tpl->tpl_vars['field']->value->get();?>
</textarea>
<?php echo $_smarty_tpl->getSubTemplate ("%system%/coreobject/type/form/block_error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
