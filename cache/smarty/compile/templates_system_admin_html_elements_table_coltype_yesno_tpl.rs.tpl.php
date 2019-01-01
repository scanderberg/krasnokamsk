<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:51:51
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/table/coltype/yesno.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5543355685788dc67a94155-69515186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c17343268ad294bdb444177548f714f062c7ecd9' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/table/coltype/yesno.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '5543355685788dc67a94155-69515186',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cell' => 0,
    'extra_class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc67aada22_31972809',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc67aada22_31972809')) {function content_5788dc67aada22_31972809($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['cell']->value->getValue()) {?>
    <?php $_smarty_tpl->tpl_vars['extra_class'] = new Smarty_variable(" on", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['extra_class'] = new Smarty_variable(" off", null, 0);?>
<?php }?>
<div <?php echo $_smarty_tpl->tpl_vars['cell']->value->getAttr(array('class'=>" ".((string)$_smarty_tpl->tpl_vars['extra_class']->value)));?>
>
    <div class="rs-border">
        <div class="rs-back"></div>
        <div class="rs-handle"></div>        
    </div>
</div>
<?php }} ?>
