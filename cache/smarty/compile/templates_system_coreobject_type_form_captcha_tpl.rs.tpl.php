<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 17:33:11
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/coreobject/type/form/captcha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12003105635788f42734f196-60905596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09aa43aa199db174eddff888d1bdd8d77f5ccc42' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/coreobject/type/form/captcha.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '12003105635788f42734f196-60905596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
    'router' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788f427360335_99464696',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788f427360335_99464696')) {function content_5788f427360335_99464696($_smarty_tpl) {?><img src="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('kaptcha',array('rand',$_smarty_tpl->tpl_vars['field']->value->getRandom()));?>
" width="100" height="42"> 
<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['field']->value->getFormName();?>
" <?php echo $_smarty_tpl->tpl_vars['field']->value->getAttr();?>
><?php }} ?>
