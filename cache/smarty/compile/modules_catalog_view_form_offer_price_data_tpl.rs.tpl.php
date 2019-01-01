<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 13:57:20
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/offer/price_data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57473790557bc2c103c2629-22706578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c0a4647ce7124a3ea8a67d7c41aaf0e65e928bd' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/offer/price_data.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '57473790557bc2c103c2629-22706578',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
    'product' => 0,
    'pricedata_arr' => 0,
    'onecost' => 0,
    'currencies' => 0,
    'curr_id' => 0,
    'curr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bc2c10486c01_83406586',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc2c10486c01_83406586')) {function content_57bc2c10486c01_83406586($_smarty_tpl) {?>
<div class="offer-price-data">
    <?php $_smarty_tpl->tpl_vars['product'] = new Smarty_variable($_smarty_tpl->tpl_vars['elem']->value->getProduct(), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['currencies'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getCurrencies(), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['pricedata_arr'] = new Smarty_variable($_smarty_tpl->tpl_vars['elem']->value['pricedata_arr'], null, 0);?>
    
    <input type="checkbox" name="pricedata_arr[oneprice][use]" class="oneprice" value="1" id="op_<?php echo $_smarty_tpl->tpl_vars['elem']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['pricedata_arr']->value['oneprice']['use']) {?>checked<?php }?>>
    <label for="op_<?php echo $_smarty_tpl->tpl_vars['elem']->value['id'];?>
">Для всех типов цен</label><br>

    <div class="vtable" <?php if ($_smarty_tpl->tpl_vars['pricedata_arr']->value['oneprice']['use']) {?>style="display:none"<?php }?>>
        <?php  $_smarty_tpl->tpl_vars['onecost'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['onecost']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value->getCostList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['onecost']->key => $_smarty_tpl->tpl_vars['onecost']->value) {
$_smarty_tpl->tpl_vars['onecost']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['onecost']->value['type']!='auto') {?>
        <div>
            <p class="label"><?php echo $_smarty_tpl->tpl_vars['onecost']->value['title'];?>
</p>
        
            <select name="pricedata_arr[price][<?php echo $_smarty_tpl->tpl_vars['onecost']->value['id'];?>
][znak]">
                <option <?php if ($_smarty_tpl->tpl_vars['pricedata_arr']->value['price'][$_smarty_tpl->tpl_vars['onecost']->value['id']]['znak']=='+') {?>selected<?php }?>>+</option>
                <option <?php if ($_smarty_tpl->tpl_vars['pricedata_arr']->value['price'][$_smarty_tpl->tpl_vars['onecost']->value['id']]['znak']=='=') {?>selected<?php }?>>=</option>
                
            </select>&nbsp;
            <input name="pricedata_arr[price][<?php echo $_smarty_tpl->tpl_vars['onecost']->value['id'];?>
][original_value]" type="text" size="7" value="<?php echo $_smarty_tpl->tpl_vars['pricedata_arr']->value['price'][$_smarty_tpl->tpl_vars['onecost']->value['id']]['original_value'];?>
">&nbsp;
            <select name="pricedata_arr[price][<?php echo $_smarty_tpl->tpl_vars['onecost']->value['id'];?>
][unit]">
                <?php  $_smarty_tpl->tpl_vars['curr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['curr']->_loop = false;
 $_smarty_tpl->tpl_vars['curr_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['curr']->key => $_smarty_tpl->tpl_vars['curr']->value) {
$_smarty_tpl->tpl_vars['curr']->_loop = true;
 $_smarty_tpl->tpl_vars['curr_id']->value = $_smarty_tpl->tpl_vars['curr']->key;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['curr_id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['pricedata_arr']->value['price'][$_smarty_tpl->tpl_vars['onecost']->value['id']]['unit']==$_smarty_tpl->tpl_vars['curr_id']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['curr']->value;?>
</option>
                <?php } ?>
                <option value="%" <?php if ($_smarty_tpl->tpl_vars['pricedata_arr']->value['price'][$_smarty_tpl->tpl_vars['onecost']->value['id']]['unit']=='%') {?>selected<?php }?>>%</option>
            </select>
        </div>
        <?php }?>
        <?php } ?>
    </div>

    <div class="oneprice-data" <?php if (!$_smarty_tpl->tpl_vars['pricedata_arr']->value['oneprice']['use']) {?>style="display:none"<?php }?>>
        <select name="pricedata_arr[oneprice][znak]">
            <option <?php if ($_smarty_tpl->tpl_vars['pricedata_arr']->value['oneprice']['znak']=='+') {?>selected<?php }?>>+</option>                                
            <option <?php if ($_smarty_tpl->tpl_vars['pricedata_arr']->value['oneprice']['znak']=='=') {?>selected<?php }?>>=</option>
        </select> 
        <input name="pricedata_arr[oneprice][original_value]" type="text" size="7" value="<?php echo $_smarty_tpl->tpl_vars['pricedata_arr']->value['oneprice']['original_value'];?>
"> 
        <select name="pricedata_arr[oneprice][unit]">
            <?php  $_smarty_tpl->tpl_vars['curr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['curr']->_loop = false;
 $_smarty_tpl->tpl_vars['curr_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['curr']->key => $_smarty_tpl->tpl_vars['curr']->value) {
$_smarty_tpl->tpl_vars['curr']->_loop = true;
 $_smarty_tpl->tpl_vars['curr_id']->value = $_smarty_tpl->tpl_vars['curr']->key;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['curr_id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['pricedata_arr']->value['oneprice']['unit']==$_smarty_tpl->tpl_vars['curr_id']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['curr']->value;?>
</option>
            <?php } ?>                                
            <option value="%" <?php if ($_smarty_tpl->tpl_vars['pricedata_arr']->value['oneprice']['unit']=='%') {?>selected<?php }?>>%</option>
        </select>
    </div>
</div><?php }} ?>
