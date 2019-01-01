<?php /* Smarty version Smarty-3.1.18, created on 2017-03-17 13:41:05
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/site/view/top_help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14178801858cbbd418e7d47-40503376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0c2056b099e755face7f1258448e4f8567793dc' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/site/view/top_help.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '14178801858cbbd418e7d47-40503376',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58cbbd41933a35_24278194',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58cbbd41933a35_24278194')) {function content_58cbbd41933a35_24278194($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

Система управления контентом ReadyScript является мультисайтовой. <br>
Это означает, что из одной панели администратора вы можете управлять сразу несколькими интернет-магазинами. <br>
В данном разделе вы можете управлять списком ваших сайтов: удалять, создавать и редактировать существующие. 
Для каждого сайта может быть задана своя тема оформления, могут быть привязаны разные домены и выбран отдельный язык.
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
