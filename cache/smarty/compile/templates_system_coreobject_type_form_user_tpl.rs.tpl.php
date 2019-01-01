<?php /* Smarty version Smarty-3.1.18, created on 2018-04-03 14:48:55
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/coreobject/type/form/user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4257857985ac36a27460fc8-46588015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e4406a3a3e1e5a603ad914037107a0e1c20c220' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/coreobject/type/form/user.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '4257857985ac36a27460fc8-46588015',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ac36a274c5971_47466182',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac36a274c5971_47466182')) {function content_5ac36a274c5971_47466182($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
?><?php echo smarty_function_addjs(array('file'=>"jquery.deftext.js",'basepath'=>"common"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"jquery.userselect.js",'basepath'=>"common"),$_smarty_tpl);?>


<input type="text" data-name="<?php echo $_smarty_tpl->tpl_vars['field']->value->getFormName();?>
" class="user-select" <?php if ($_smarty_tpl->tpl_vars['field']->value->get()>0) {?> value="<?php echo $_smarty_tpl->tpl_vars['field']->value->getUser()->getFio();?>
"<?php }?> <?php echo $_smarty_tpl->tpl_vars['field']->value->getAttr();?>
 data-request-url="<?php echo $_smarty_tpl->tpl_vars['field']->value->getRequestUrl();?>
">
<?php if ($_smarty_tpl->tpl_vars['field']->value->get()>0) {?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['field']->value->getFormName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value->get();?>
"><?php }?><?php }} ?>
