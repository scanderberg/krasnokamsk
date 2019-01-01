<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 17:33:11
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/coreobject/userform.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1959654675788f427310399-49687635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf2521ba8a5c62322afdec880b45673904682e7f' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/coreobject/userform.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '1959654675788f427310399-49687635',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fld' => 0,
    'values' => 0,
    'has_error' => 0,
    'options' => 0,
    'option' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788f42733fa80_83015783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788f42733fa80_83015783')) {function content_5788f42733fa80_83015783($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['fld']->value['type']=='string') {?>
    <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['fld']->value['fieldname'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['fld']->value['alias']];?>
" <?php if ($_smarty_tpl->tpl_vars['fld']->value['maxlength']>0) {?>maxlength="<?php echo $_smarty_tpl->tpl_vars['fld']->value['maxlength'];?>
"<?php }?> class="<?php if ($_smarty_tpl->tpl_vars['has_error']->value) {?> has-error<?php }?>" placeholder="<?php echo $_smarty_tpl->tpl_vars['fld']->value['title'];?>
">
<?php } elseif ($_smarty_tpl->tpl_vars['fld']->value['type']=='list') {?>
    <select name="<?php echo $_smarty_tpl->tpl_vars['fld']->value['fieldname'];?>
">
        <?php if ($_smarty_tpl->tpl_vars['fld']->value['necessary']) {?>
        <option value="">Не выбрано</option>
        <?php }?>
        <?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
        <option<?php if ($_smarty_tpl->tpl_vars['option']->value==$_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['fld']->value['alias']]) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value;?>
</option>
        <?php } ?>
    </select>
<?php } elseif ($_smarty_tpl->tpl_vars['fld']->value['type']=='bool') {?>
    <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fld']->value['fieldname'];?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['fld']->value['alias']]) {?>checked<?php }?>>
<?php }?><?php }} ?>
