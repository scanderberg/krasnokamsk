<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:51:50
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/help/ctrl_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6759907235788dc669a9030-94641416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6336674c62a6d9f50f906fcd8272c3503b8e342' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/help/ctrl_index.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '6759907235788dc669a9030-94641416',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc66af1423_07571452',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc66af1423_07571452')) {function content_5788dc66af1423_07571452($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Данный раздел позволяет управлять товарами и категориями товаров в системе.<br>
Каждый товар может быть определен в одну или несколько категорий одновременно. Существует 2 типа категорий:
<ul>
    <li><i>Обычная категория</i> - объединяет товары по какому-либо признаку</li>
    <li><i>Спецкатегория</i> - наделяет товары, находящиеся в этой категории определенными ярлыками. Например: "Новинка", "Популярный", и.т.д.</li>
</ul>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
