<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:51:51
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/filter/type/abstract.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15297999525788dc67283d26-62939295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f3cc061e101cc31d9572982d0b795ac3910cc56' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/filter/type/abstract.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '15297999525788dc67283d26-62939295',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fitem' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc672a4e49_33133556',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc672a4e49_33133556')) {function content_5788dc672a4e49_33133556($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['fitem']->value->getTitle()) {?><label <?php echo $_smarty_tpl->tpl_vars['fitem']->value->getTitleAttrString();?>
><?php echo $_smarty_tpl->tpl_vars['fitem']->value->getTitle();?>
</label><br><?php }?>

<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fitem']->value->getPrefilters(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <?php echo $_smarty_tpl->tpl_vars['item']->value->getView();?>

<?php } ?>
    
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['fitem']->value->tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
