<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 13:58:07
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/property_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116470286257bc2c3f193277-48651087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5fd0aec380de841919e2ac91626773b98c6a01d' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/property_product.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '116470286257bc2c3f193277-48651087',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'properties' => 0,
    'item' => 0,
    'owner_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bc2c3f22e333_77638130',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc2c3f22e333_77638130')) {function content_57bc2c3f22e333_77638130($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['properties']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['item']->value['is_my']) {?>
        <tr class="property-item" data-property-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" data-is-my="1">
            <td class="item-title">
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" name="prop[<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
][id]" class="h-id">
                <input type="hidden" value="1" name="prop[<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
][is_my]" class="h-product_id">
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['xml_id'];?>
" name="prop[<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
][xml_id]" class="h-xml_id">
                <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['unit'])) {?>, <?php echo $_smarty_tpl->tpl_vars['item']->value['unit'];?>
<?php }?>
            </td>
            <td class="item-info">
                <span class="hint help-icon" title="Тип: <?php echo $_smarty_tpl->tpl_vars['item']->value['__type']->textView();?>
">?</span>
            </td>
            <td class="item-useval"></td>
            <td class="item-val">
               <?php echo $_smarty_tpl->tpl_vars['item']->value->valView();?>

            </td>
            <td class="item-public">
                <?php if ($_smarty_tpl->tpl_vars['owner_type']->value=='group') {?>
                <input type="checkbox" name="prop[<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
][public]" value="1" class="h-public" title="Отображать в поиске на сайте" <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['public'])) {?>checked<?php }?>>
                <?php }?>
            </td>
            <td class="item-tools">
                <a title="Редактировать параметры характеристики" class="p-edit"></a>
                <a title="Удалить характеристику" class="p-del" href="JavaScript:;">удалить</a>
            </td>
        </tr>
    <?php } else { ?>
        <tr class="property-item" data-property-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" data-is-my="0">
            <td class="item-title">
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" name="prop[<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
][id]" class="h-id">
                <input type="hidden" value="0" name="prop[<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
][is_my]" class="h-group_id">
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['xml_id'];?>
" name="prop[<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
][xml_id]" class="h-xml_id">
                <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['unit'])) {?>, <?php echo $_smarty_tpl->tpl_vars['item']->value['unit'];?>
<?php }?>
            </td>
            <td class="item-info">
                <span class="hint help-icon" title="Тип: <?php echo $_smarty_tpl->tpl_vars['item']->value['__type']->textView();?>
">?</span>
            </td>        
            <td class="item-useval">
                <input type="checkbox" value="1" name="prop[<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
][usevalue]" class="h-useval" <?php if ($_smarty_tpl->tpl_vars['item']->value['useval']) {?>checked<?php }?> title="Отметье, чтобы задать персональное значение, иначе будет использоваться значение категории товара">
            </td>
            <td class="item-val">
                <?php echo $_smarty_tpl->tpl_vars['item']->value->valView();?>

            </td>
            <td class="item-public">
                <?php if ($_smarty_tpl->tpl_vars['owner_type']->value=='group') {?>
                <input type="checkbox" name="prop[<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
][public]" value="1"  class="h-val-linked" title="Отображать в поиске на сайте" <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['public'])) {?>checked<?php }?>>
                <?php }?>
            </td>
            <td class="item-tools">
                <a title="Редактировать параметры характеристики" class="p-edit"></a>
            </td>
        </tr>
    <?php }?>
<?php } ?><?php }} ?>
