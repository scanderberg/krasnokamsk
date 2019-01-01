<?php /* Smarty version Smarty-3.1.18, created on 2016-07-23 09:54:37
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/templates/view/help/blockctrl_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:259652844579314ad6f13a3-99779541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '235695c449b34d753d7d9a35f7c7a6b9013ec7f7' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/templates/view/help/blockctrl_index.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '259652844579314ad6f13a3-99779541',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_579314ad749508_32909682',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579314ad749508_32909682')) {function content_579314ad749508_32909682($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
В этом разделе можно задать расположение блоков на различных страницах.
Блок - это видимая часть модуля, которая может отображать пользователю определенную информацию. 
Каждый модуль может содержать множество блоков, например модуль "Каталог" может содержать блоки: "список категорий", "список товаров в категории", "посление просмотренные товары", и т.д.
<p>Секции необходимы, чтобы задавать структуру страницы по сетке и удерживать блоки или вложенные секции согласно заданной ширине.</p>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
