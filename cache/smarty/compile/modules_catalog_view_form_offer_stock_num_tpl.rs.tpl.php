<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 13:57:20
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/offer/stock_num.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86140402957bc2c1056b7a2-15082265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cf53d1456bfc6b5af6530cae35879d0cdd43f28' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/offer/stock_num.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '86140402957bc2c1056b7a2-15082265',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'warehouses' => 0,
    'warehouse' => 0,
    'elem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bc2c10596e35_50913504',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc2c10596e35_50913504')) {function content_57bc2c10596e35_50913504($_smarty_tpl) {?><?php if (!is_callable('smarty_function_static_call')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.static_call.php';
?><?php echo smarty_function_static_call(array('var'=>'warehouses','callback'=>array('\Catalog\Model\WareHouseApi','getWarehousesList')),$_smarty_tpl);?>

<div class="offer-stock-num">
    <?php  $_smarty_tpl->tpl_vars['warehouse'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['warehouse']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['warehouses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['warehouse']->key => $_smarty_tpl->tpl_vars['warehouse']->value) {
$_smarty_tpl->tpl_vars['warehouse']->_loop = true;
?>
        <p class="label"><?php echo $_smarty_tpl->tpl_vars['warehouse']->value['title'];?>
</p>
        <input name="stock_num[<?php echo $_smarty_tpl->tpl_vars['warehouse']->value['id'];?>
]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['elem']->value['stock_num'][$_smarty_tpl->tpl_vars['warehouse']->value['id']];?>
"/><br/>
    <?php } ?>
</div><?php }} ?>
