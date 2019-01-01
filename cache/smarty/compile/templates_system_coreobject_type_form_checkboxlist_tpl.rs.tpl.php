<?php /* Smarty version Smarty-3.1.18, created on 2018-04-03 15:13:01
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/coreobject/type/form/checkboxlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6323666515ac36fcd734ef3-02376426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd52432ca6a480f78656d4aa73ed8a7186394063d' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/coreobject/type/form/checkboxlist.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '6323666515ac36fcd734ef3-02376426',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ac36fcd8b1db5_78795494',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac36fcd8b1db5_78795494')) {function content_5ac36fcd8b1db5_78795494($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value->getList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
    <div>
        <label><input name="<?php echo $_smarty_tpl->tpl_vars['field']->value->getFormName();?>
" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['key']->value,(array)$_smarty_tpl->tpl_vars['field']->value->get())) {?>checked="checked"<?php }?>> <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</label>
    </div>
<?php } ?>
<?php echo $_smarty_tpl->getSubTemplate ("%system%/coreobject/type/form/block_error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
