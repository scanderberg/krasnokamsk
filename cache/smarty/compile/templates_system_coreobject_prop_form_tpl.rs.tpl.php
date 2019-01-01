<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 17:33:11
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/coreobject/prop_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6113794345788f42712ddd5-28192850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb60e03dd49501742f7b62d2a7f2f61651348520' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/coreobject/prop_form.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '6113794345788f42712ddd5-28192850',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view_params' => 0,
    'prop' => 0,
    'object' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788f427170fe1_51497952',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788f427170fe1_51497952')) {function content_5788f427170fe1_51497952($_smarty_tpl) {?>
<?php if (!$_smarty_tpl->tpl_vars['view_params']->value||$_smarty_tpl->tpl_vars['view_params']->value['form']) {?>
    <?php echo $_smarty_tpl->tpl_vars['prop']->value->formView(array('form'=>true));?>
 
<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['view_params']->value||$_smarty_tpl->tpl_vars['view_params']->value['error']) {?>
    <?php $_smarty_tpl->tpl_vars['error'] = new Smarty_variable($_smarty_tpl->tpl_vars['object']->value->getErrorsByForm($_smarty_tpl->tpl_vars['prop']->value->name,', '), null, 0);?>
    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?><span class="formFieldError" data-field="<?php echo $_smarty_tpl->tpl_vars['prop']->value->name;?>
"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span><?php }?>
<?php }?><?php }} ?>
