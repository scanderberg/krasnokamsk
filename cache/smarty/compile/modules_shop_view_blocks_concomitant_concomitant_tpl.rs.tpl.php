<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 19:44:08
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/shop/view/blocks/concomitant/concomitant.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2014474766578912d88e74f6-31087702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05e80c28124bceb92fc7d156cc62c3177174ef4d' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/shop/view/blocks/concomitant/concomitant.tpl',
      1 => 1457614300,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '2014474766578912d88e74f6-31087702',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shop_config' => 0,
    'this_controller' => 0,
    'list' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_578912d89b96d5_03650427',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578912d89b96d5_03650427')) {function content_578912d89b96d5_03650427($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['check_quantity'] = new Smarty_variable($_smarty_tpl->tpl_vars['shop_config']->value['check_quantity'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['catalog_config'] = new Smarty_variable($_smarty_tpl->tpl_vars['this_controller']->value->getModuleConfig(), null, 0);?> 
<?php if ($_smarty_tpl->tpl_vars['list']->value) {?>
    <div class="concomitantBlock">
        <div class="concomitantTitle">
            Сопутствующие товары
        </div>
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
            <div class="concomitantItem">
                <input id="concomitantItem<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" type="checkbox" name="concomitant[]" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"/> 
                <label for="concomitantItem<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
 (+<?php echo $_smarty_tpl->tpl_vars['product']->value->getCost();?>
 <?php echo $_smarty_tpl->tpl_vars['product']->value->getCurrency();?>
)</label>
            </div>
        <?php } ?>
    </div>
<?php }?><?php }} ?>
