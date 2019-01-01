<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 13:56:40
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/product/specdir.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204266483057bc2be87f2c79-22442556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc8c82e840c9a212aad2fce892cc23a9ee899677' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/product/specdir.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '204266483057bc2be87f2c79-22442556',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
    'spec' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bc2be880c5f7_47007953',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc2be880c5f7_47007953')) {function content_57bc2be880c5f7_47007953($_smarty_tpl) {?><div>
    <?php  $_smarty_tpl->tpl_vars['spec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['spec']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['elem']->value->getSpecDirs(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['spec']->key => $_smarty_tpl->tpl_vars['spec']->value) {
$_smarty_tpl->tpl_vars['spec']->_loop = true;
?>
    <input type="checkbox" name="xspec[<?php echo $_smarty_tpl->tpl_vars['spec']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['spec']->value['id'];?>
" id="spec_<?php echo $_smarty_tpl->tpl_vars['spec']->value['id'];?>
" <?php if (is_array($_smarty_tpl->tpl_vars['elem']->value['xspec'])&&in_array($_smarty_tpl->tpl_vars['spec']->value['id'],$_smarty_tpl->tpl_vars['elem']->value['xspec'])) {?>checked<?php }?>>
    <label for="spec_<?php echo $_smarty_tpl->tpl_vars['spec']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['spec']->value['name'];?>
</label><br>
    <?php } ?>
</div><?php }} ?>
