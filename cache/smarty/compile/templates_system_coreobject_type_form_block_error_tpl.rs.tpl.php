<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 17:33:11
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/coreobject/type/form/block_error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14993786685788f4271d9f87-31358649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd2bcf88a5224a07c9fcdca2b61d86f1e9509d7f' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/coreobject/type/form/block_error.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '14993786685788f4271d9f87-31358649',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view_options' => 0,
    'field' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788f42728cdd5_42629529',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788f42728cdd5_42629529')) {function content_5788f42728cdd5_42629529($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['view_options']->value||$_smarty_tpl->tpl_vars['view_options']->value['error']) {?>
<div class="field-error top-corner" data-field="<?php echo $_smarty_tpl->tpl_vars['field']->value->getName();?>
">
    <?php if ($_smarty_tpl->tpl_vars['field']->value->hasErrors()) {?>
        <span class="text"><i class="cor"></i>
        <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field']->value->getErrors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<br>
        <?php } ?>
        </span>
    <?php }?>
</div>
<?php }?><?php }} ?>
