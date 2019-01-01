<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 13:56:40
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/coreobject/type/form/hidden.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29595164457bc2be81fff97-64746599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1b0e670a429e381b7079a2db7cbf7e4c67bd23b' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/coreobject/type/form/hidden.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '29595164457bc2be81fff97-64746599',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bc2be8218a18_62850218',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc2be8218a18_62850218')) {function content_57bc2be8218a18_62850218($_smarty_tpl) {?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['field']->value->getFormName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value->get();?>
" <?php echo $_smarty_tpl->tpl_vars['field']->value->getAttr();?>
 /><?php }} ?>
