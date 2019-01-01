<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 13:56:40
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/product/cost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54104329657bc2be82b2558-57086516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3040572039cf72016ed58b92728976d2391f4611' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/product/cost.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '54104329657bc2be82b2558-57086516',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
    'onecost' => 0,
    'id' => 0,
    'curr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bc2be849cc61_05461419',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc2be849cc61_05461419')) {function content_57bc2be849cc61_05461419($_smarty_tpl) {?><table class="intable">
<?php echo $_smarty_tpl->tpl_vars['elem']->value->calculateUserCost();?>

<?php  $_smarty_tpl->tpl_vars['onecost'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['onecost']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['elem']->value->getCostList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['onecost']->key => $_smarty_tpl->tpl_vars['onecost']->value) {
$_smarty_tpl->tpl_vars['onecost']->_loop = true;
?>
    <tr>
        <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['onecost']->value['title'];?>
</td>
        <td>
        <input type="text" name="excost[<?php echo $_smarty_tpl->tpl_vars['onecost']->value['id'];?>
][cost_original_val]" value="<?php echo $_smarty_tpl->tpl_vars['elem']->value['excost'][$_smarty_tpl->tpl_vars['onecost']->value['id']]['cost_original_val'];?>
" <?php if ($_smarty_tpl->tpl_vars['onecost']->value['type']=='auto') {?>disabled<?php }?>>
        <?php if ($_smarty_tpl->tpl_vars['onecost']->value['type']=='auto') {?><span class="hint" title="Автовычесляемое поле, будет расчитано после сохранения">?</span><?php }?>
        </td>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['onecost']->value['type']=='manual') {?>
            <select name="excost[<?php echo $_smarty_tpl->tpl_vars['onecost']->value['id'];?>
][cost_original_currency]">
                <?php  $_smarty_tpl->tpl_vars['curr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['curr']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['elem']->value->getCurrencies(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['curr']->key => $_smarty_tpl->tpl_vars['curr']->value) {
$_smarty_tpl->tpl_vars['curr']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['curr']->key;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['elem']->value['excost'][$_smarty_tpl->tpl_vars['onecost']->value['id']]['cost_original_currency']==$_smarty_tpl->tpl_vars['id']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['curr']->value;?>
</option>
                <?php } ?>
            </select>
            <?php }?>
        </td>  
    </tr>
<?php } ?>
</table><?php }} ?>
