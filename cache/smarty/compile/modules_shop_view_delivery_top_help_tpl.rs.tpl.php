<?php /* Smarty version Smarty-3.1.18, created on 2018-04-03 14:58:26
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/shop/view/delivery/top_help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9366399735ac36c629c3c32-93201192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba63c7bc2026eef481576687846d7920ee91105a' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/shop/view/delivery/top_help.tpl',
      1 => 1457614300,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '9366399735ac36c629c3c32-93201192',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ac36c629fd454_58458679',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac36c629fd454_58458679')) {function content_5ac36c629fd454_58458679($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

Данный раздел позволяет управлять списком способов доставки, доступных покупателям при оформлении заказа.

<br><br>

Система позволяет для каждого способа доставки указывать географические зоны, к которым данный вид доставки будут применен,
а также использовать требуемый расчетный класс, для автоматического расчета стоимости доставки.

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
