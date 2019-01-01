<?php /* Smarty version Smarty-3.1.18, created on 2016-10-27 11:40:09
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/dialog/products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20702865305811bd694ee035-39964993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '543ab926924df09c25d9a4621be04dae6eef0afe' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/dialog/products.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '20702865305811bd694ee035-39964993',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'paginator' => 0,
    'hideProductCheckbox' => 0,
    'item' => 0,
    'products_dirs' => 0,
    'cat' => 0,
    'costtypes' => 0,
    'cost' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5811bd6960d196_32644421',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5811bd6960d196_32644421')) {function content_5811bd6960d196_32644421($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?>
<?php if (count($_smarty_tpl->tpl_vars['list']->value)>0) {?>
<div class="mini-paginator before-table">
    <a class="pag_left" href="JavaScript:;" gopage="<?php if ($_smarty_tpl->tpl_vars['paginator']->value['page']>1) {?><?php echo $_smarty_tpl->tpl_vars['paginator']->value['page']-1;?>
<?php } else { ?>1<?php }?>">&nbsp;</a>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['paginator']->value['page'];?>
" size="3" class="pag_page">
    <a class="pag_right" href="JavaScript:;" gopage="<?php if ($_smarty_tpl->tpl_vars['paginator']->value['page']<$_smarty_tpl->tpl_vars['paginator']->value['totalPages']) {?><?php echo $_smarty_tpl->tpl_vars['paginator']->value['page']+1;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['paginator']->value['totalPages'];?>
<?php }?>">&nbsp;</a> из <?php echo $_smarty_tpl->tpl_vars['paginator']->value['totalPages'];?>
 | всего записей: <?php echo $_smarty_tpl->tpl_vars['paginator']->value['total'];?>
 | показывать по <input type="text" class="pag_pagesize" value="<?php echo $_smarty_tpl->tpl_vars['paginator']->value['pageSize'];?>
" size="3">
    <input type="button" value="OK" class="pag_submit">
</div>
<?php }?>
<?php if (count($_smarty_tpl->tpl_vars['list']->value)>0) {?>
<table class="product-list">
<thead>
    <tr>
        <th <?php if (!$_smarty_tpl->tpl_vars['hideProductCheckbox']->value) {?>colspan="2"<?php }?>>Название</th>
        <th>№</th>
        <th class="textright">Артикул</th>
    </tr>
</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<tr data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
    <?php if (!$_smarty_tpl->tpl_vars['hideProductCheckbox']->value) {?>
    <td class="chk">
        <input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" data-weight="<?php echo $_smarty_tpl->tpl_vars['item']->value['weight'];?>
" catids="<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products_dirs']->value[$_smarty_tpl->tpl_vars['item']->value['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>,<?php echo $_smarty_tpl->tpl_vars['cat']->value;?>
<?php } ?>,">
    </td>
    <?php }?>
    <td class="title"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
    <td class="no"><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
    <td class="barcode" align="right"><?php echo $_smarty_tpl->tpl_vars['item']->value['barcode'];?>
</td>
</tr>
<?php } ?>
</tbody>
</table>
<?php } else { ?>
<br><br><br><br><br><br><br><br>
<table width="100%">
<tr>
    <td align="center" class="no-goods"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Нет товаров<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
</tr>
</table>
<?php }?>
<?php if (count($_smarty_tpl->tpl_vars['list']->value)>0) {?>
<div class="mini-paginator">
    <a class="pag_left" href="JavaScript:;" gopage="<?php if ($_smarty_tpl->tpl_vars['paginator']->value['page']>1) {?><?php echo $_smarty_tpl->tpl_vars['paginator']->value['page']-1;?>
<?php } else { ?>1<?php }?>">&nbsp;</a>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['paginator']->value['page'];?>
" size="3" class="pag_page">
    <a class="pag_right" href="JavaScript:;" gopage="<?php if ($_smarty_tpl->tpl_vars['paginator']->value['page']<$_smarty_tpl->tpl_vars['paginator']->value['totalPages']) {?><?php echo $_smarty_tpl->tpl_vars['paginator']->value['page']+1;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['paginator']->value['totalPages'];?>
<?php }?>">&nbsp;</a> из <?php echo $_smarty_tpl->tpl_vars['paginator']->value['totalPages'];?>
 | всего записей: <?php echo $_smarty_tpl->tpl_vars['paginator']->value['total'];?>
 | показывать по <input type="text" class="pag_pagesize" value="<?php echo $_smarty_tpl->tpl_vars['paginator']->value['pageSize'];?>
" size="3">
    <input type="button" value="OK" class="pag_submit">
</div>
<?php }?>


<div class="hidden">
    <div class="to-dialog-buttonpane" style="float:left;">
        <br>
        Тип цены:
        <select name="costtype">
        <?php  $_smarty_tpl->tpl_vars['cost'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cost']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['costtypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cost']->key => $_smarty_tpl->tpl_vars['cost']->value) {
$_smarty_tpl->tpl_vars['cost']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['cost']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['cost']->value->title;?>
</option>
        <?php } ?>
        </select>
    </div>
</div>
<?php }} ?>
