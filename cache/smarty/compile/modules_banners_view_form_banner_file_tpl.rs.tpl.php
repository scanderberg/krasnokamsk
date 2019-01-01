<?php /* Smarty version Smarty-3.1.18, created on 2018-04-03 14:51:35
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/banners/view/form/banner/file.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9935786375ac36ac7178007-68460428%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ade7b5089e15f24dd794815b32832570e8b5caa4' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/banners/view/form/banner/file.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '9935786375ac36ac7178007-68460428',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
    'elem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ac36ac71d63e5_44280092',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac36ac71d63e5_44280092')) {function content_5ac36ac71d63e5_44280092($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['field']->value->get()!='') {?>
    <?php if ($_smarty_tpl->tpl_vars['elem']->value->isImageFile()) {?><img src="<?php echo $_smarty_tpl->tpl_vars['elem']->value->getImageUrl(200,300);?>
"><br><?php }?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['field']->value->getLink();?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['field']->value->getFileName();?>
</a>&nbsp;
    <input type="checkbox" value="1" name="del_<?php echo $_smarty_tpl->tpl_vars['field']->value->getName();?>
">Удалить<br>
<?php }?>
<input type="file" name="<?php echo $_smarty_tpl->tpl_vars['field']->value->getFormName();?>
"><?php }} ?>
