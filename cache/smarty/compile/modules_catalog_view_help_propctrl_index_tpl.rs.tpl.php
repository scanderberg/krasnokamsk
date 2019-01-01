<?php /* Smarty version Smarty-3.1.18, created on 2016-12-06 10:07:12
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/help/propctrl_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:857131947584663a0dfe855-00095234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5a2f4ce0d97cbf6693884c620e4c00bff31b995' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/help/propctrl_index.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '857131947584663a0dfe855-00095234',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_584663a0f114c0_86069085',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584663a0f114c0_86069085')) {function content_584663a0f114c0_86069085($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Характеристики (они же свойства) товаров позволяют детально описать возможности товаров.
<p>Указывая в дальнейшем у товаров или у групп товаров характеристики, Вы автоматически включаете возможность сравнения товаров, 
а также возможность детального поиска товаров по заданным параметрам. Для удобства можно разделить характеристики по гуппам.
<i>Например, в группу "Физические данные" можно поместить свойства "ширина, глубина, вес".</i><br>
</p>


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
