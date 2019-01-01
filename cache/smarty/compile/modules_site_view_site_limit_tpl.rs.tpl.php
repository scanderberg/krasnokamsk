<?php /* Smarty version Smarty-3.1.18, created on 2017-03-17 13:41:05
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/site/view/site_limit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189618691558cbbd41872d53-04287473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd911eb90d49249819b3c6e747722d3298ccc1fb5' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/site/view/site_limit.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '189618691558cbbd41872d53-04287473',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'max_site_count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58cbbd418e14b2_13015291',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58cbbd418e14b2_13015291')) {function content_58cbbd418e14b2_13015291($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><?php $_smarty_tpl->tpl_vars['max_site_count'] = new Smarty_variable(__GET_MAX_SITE_LIMIT(), null, 0);?>
<?php if (__GET_MAX_SITE_LIMIT()==0) {?>
<?php $_smarty_tpl->tpl_vars['max_site_count'] = new Smarty_variable(t('неограничено'), null, 0);?>
<?php }?>
<div class="max-site-notice"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('max_site_count'=>$_smarty_tpl->tpl_vars['max_site_count']->value)); $_block_repeat=true; echo smarty_block_t(array('max_site_count'=>$_smarty_tpl->tpl_vars['max_site_count']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Максимальное количество сайтов: %max_site_count<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('max_site_count'=>$_smarty_tpl->tpl_vars['max_site_count']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div><?php }} ?>
