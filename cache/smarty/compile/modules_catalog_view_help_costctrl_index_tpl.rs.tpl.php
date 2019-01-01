<?php /* Smarty version Smarty-3.1.18, created on 2018-04-06 05:31:13
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/help/costctrl_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182649445ac6dbf10abe34-54335633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c527a067f104504fd740ba3a9e2cf04871a3513f' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/help/costctrl_index.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '182649445ac6dbf10abe34-54335633',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ac6dbf112bf06_50232656',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac6dbf112bf06_50232656')) {function content_5ac6dbf112bf06_50232656($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Система позволяет хранить более одной цены для каждого товара. Перечень имеющихся цен задается в данном разделе.<br>
Цены бывают "заданные вручную" и автоматические. 
Автоматические цены высчитываются по указанной формуле от цен, заданных "вручную", 
и существуют для того, чтобы гибко управлять ценовой политикой на сайте, не изменяя при этом заданных "вручную цен"<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
