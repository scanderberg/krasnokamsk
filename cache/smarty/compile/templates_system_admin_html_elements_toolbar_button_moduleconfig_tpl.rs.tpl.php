<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:51:50
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/toolbar/button/moduleconfig.tpl" */ ?>
<?php /*%%SmartyHeaderCode:932825985788dc66e97d92-82798030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80d669789640e80134982f43d1afa726d4d7fce8' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/toolbar/button/moduleconfig.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '932825985788dc66e97d92-82798030',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'button' => 0,
    'Setup' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc66ef4e13_11138973',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc66ef4e13_11138973')) {function content_5788dc66ef4e13_11138973($_smarty_tpl) {?><a <?php if ($_smarty_tpl->tpl_vars['button']->value->getHref()!='') {?>href="<?php echo $_smarty_tpl->tpl_vars['button']->value->getHref();?>
"<?php }?> <?php echo $_smarty_tpl->tpl_vars['button']->value->getAttrLine();?>
><img src="<?php echo $_smarty_tpl->tpl_vars['Setup']->value['IMG_PATH'];?>
/adminstyle/modoptions.png"><?php if ($_smarty_tpl->tpl_vars['button']->value->getTitle()) {?><span class="lmarg"><?php echo $_smarty_tpl->tpl_vars['button']->value->getTitle();?>
</span><?php }?></a><?php }} ?>
