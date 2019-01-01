<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 13:56:40
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/coreobject/type/form/datetime.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165804274457bc2be824c938-84812341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3b3ca2fe4b6189b34999388c126184e7d853ab0' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/coreobject/type/form/datetime.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '165804274457bc2be824c938-84812341',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bc2be82ab356_27296617',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc2be82ab356_27296617')) {function content_57bc2be82ab356_27296617($_smarty_tpl) {?><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['field']->value->getFormName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value->get();?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value->getMaxLength()>0) {?>maxlength="<?php echo $_smarty_tpl->tpl_vars['field']->value->getMaxLength();?>
"<?php }?> <?php echo $_smarty_tpl->tpl_vars['field']->value->getAttr();?>
 datetime="datetime"/><?php }} ?>
