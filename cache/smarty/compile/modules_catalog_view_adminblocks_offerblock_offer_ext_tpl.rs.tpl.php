<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 13:56:41
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/adminblocks/offerblock/offer_ext.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187916136357bc2be9253082-71305201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bed37a602a1955c26e7a80b6499070706ed6cc1' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/adminblocks/offerblock/offer_ext.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '187916136357bc2be9253082-71305201',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
    'product_id' => 0,
    'offer_page_size' => 0,
    'filter_parts' => 0,
    'part' => 0,
    'filter' => 0,
    'paginator' => 0,
    'router' => 0,
    'offers' => 0,
    'offer' => 0,
    'currencies' => 0,
    'onecost' => 0,
    'unit' => 0,
    'default_currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bc2be92fe8d4_26514939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc2be92fe8d4_26514939')) {function content_57bc2be92fe8d4_26514939($_smarty_tpl) {?><?php if (!is_callable('smarty_function_static_call')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.static_call.php';
if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><?php $_smarty_tpl->tpl_vars['currencies'] = new Smarty_variable($_smarty_tpl->tpl_vars['elem']->value->getCurrencies(), null, 0);?>
<?php echo smarty_function_static_call(array('var'=>'default_currency','callback'=>array('\Catalog\Model\CurrencyApi','getBaseCurrency')),$_smarty_tpl);?>


<div class="filter-line virtual-form" data-action="<?php echo smarty_function_adminUrl(array('do'=>false,'product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'offer_page_size'=>$_smarty_tpl->tpl_vars['offer_page_size']->value,'mod_controller'=>"catalog-block-offerblock"),$_smarty_tpl);?>
">
    <div class="filter-top">
        <a class="openfilter" onclick="$(this).closest('.filter-line').toggleClass('open'); return false;"><span>Фильтр</span></a>
        <?php if (count($_smarty_tpl->tpl_vars['filter_parts']->value)>1) {?>
        <span class="part clean_all"><a class="clean" data-href="<?php echo smarty_function_adminUrl(array('do'=>false,'product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'mod_controller'=>"catalog-block-offerblock"),$_smarty_tpl);?>
"></a></span>            
        <?php }?>
        <?php  $_smarty_tpl->tpl_vars['part'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['part']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter_parts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['part']->key => $_smarty_tpl->tpl_vars['part']->value) {
$_smarty_tpl->tpl_vars['part']->_loop = true;
?>
            <span class="part"><?php echo $_smarty_tpl->tpl_vars['part']->value['text'];?>
<a class="clean" data-href="<?php echo $_smarty_tpl->tpl_vars['part']->value['clean_url'];?>
"></a></span>
        <?php } ?>
    </div>
    <table class="filter-form">
        <tr>
            <td class="key">Название</td>
            <td class="val"><input type="text" name="offer_filter[title]" value="<?php echo $_smarty_tpl->tpl_vars['filter']->value['title'];?>
"></td>
        </tr>
        <tr>
            <td class="key">Артикул</td>
            <td class="val"><input type="text" name="offer_filter[barcode]" value="<?php echo $_smarty_tpl->tpl_vars['filter']->value['barcode'];?>
"></td>
        </tr>
        <tr>
            <td class="key">Общий остаток</td>
            <td class="val"><select name="offer_filter[cmp_num]">
                <option <?php if ($_smarty_tpl->tpl_vars['filter']->value['cmp_num']=='=') {?>selected<?php }?>>=</option>
                <option <?php if ($_smarty_tpl->tpl_vars['filter']->value['cmp_num']=='&lt;') {?>selected<?php }?>>&lt;</option>
                <option <?php if ($_smarty_tpl->tpl_vars['filter']->value['cmp_num']=='&gt;') {?>selected<?php }?>>&gt;</option>
            </select>
            <input type="text" name="offer_filter[num]" value="<?php echo $_smarty_tpl->tpl_vars['filter']->value['num'];?>
">
            </td>
        </tr>
        <tr>
            <td></td>
            <td><span class="button save virtual-submit">Применить</span></td>
        </tr>
    </table>
</div>

<div class="tools-top">
    <div class="paginator virtual-form" data-action="<?php echo smarty_function_adminUrl(array('do'=>false,'product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'offer_filter'=>$_smarty_tpl->tpl_vars['filter']->value,'mod_controller'=>"catalog-block-offerblock"),$_smarty_tpl);?>
">
        <?php echo $_smarty_tpl->tpl_vars['paginator']->value->getView(array('short'=>true));?>

    </div>
    <a class="add-offer">Добавить комплектацию</a>
</div>            

<table class="rs-table editable-table offer-list localform" data-sort-request="<?php echo $_smarty_tpl->tpl_vars['router']->value->getAdminUrl(false,array('odo'=>'offerMove','product_id'=>$_smarty_tpl->tpl_vars['product_id']->value),'catalog-block-offerblock');?>
" data-refresh-url="<?php echo smarty_function_adminUrl(array('do'=>false,'product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'offer_filter'=>$_smarty_tpl->tpl_vars['filter']->value,'offer_page'=>$_smarty_tpl->tpl_vars['paginator']->value->page,'offer_page_size'=>$_smarty_tpl->tpl_vars['offer_page_size']->value,'mod_controller'=>"catalog-block-offerblock"),$_smarty_tpl);?>
">
    <thead>
        <tr>
            <th class="chk" style="width:26px">
                <div class="chkhead-block">
                    <input type="checkbox" data-name="offers[]" class="chk_head select-page" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Отметить элементы на этой странице<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
                    <div class="onover">
                        <input type="checkbox" class="select-all" value="on" name="selectAll" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Отметить элементы на всех страницах<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
                    </div>
                </div>
            </th>
            <th class="drag" width="20"><span class="sortable sortdot asc"><span></span></span></th>                        
            <th class="title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Название<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
            <th class="barcode"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Артикул<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
            <th class="amount"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Остаток<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
            <th class="price"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Цена<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
            <th class="actions"></th>
        </tr>
    </thead>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars['offer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['offer']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['offers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['offer']->key => $_smarty_tpl->tpl_vars['offer']->value) {
$_smarty_tpl->tpl_vars['offer']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['offer']->key;
?>
        <tr class="item" data-id="<?php echo $_smarty_tpl->tpl_vars['offer']->value['id'];?>
">
            <td class="chk"><input type="checkbox" name="offers[]" value="<?php echo $_smarty_tpl->tpl_vars['offer']->value['id'];?>
"></td>
            <td class="drag drag-handle"><a data-sortid="<?php echo $_smarty_tpl->tpl_vars['offer']->value['id'];?>
" class="sort dndsort"></a></td>                            
            <td class="title clickable"><?php echo $_smarty_tpl->tpl_vars['offer']->value['title'];?>
</td>
            <td class="barcode clickable"><?php echo $_smarty_tpl->tpl_vars['offer']->value['barcode'];?>
</td>
            <td class="amount"><?php echo $_smarty_tpl->tpl_vars['offer']->value['num'];?>
</td>
            <td class="price clickable">
                <?php if ($_smarty_tpl->tpl_vars['offer']->value['pricedata_arr']['oneprice']['use']) {?>
                    <?php echo $_smarty_tpl->tpl_vars['offer']->value['pricedata_arr']['oneprice']['znak'];?>
 <?php echo (($tmp = @$_smarty_tpl->tpl_vars['offer']->value['pricedata_arr']['oneprice']['original_value'])===null||$tmp==='' ? "0" : $tmp);?>

                    <?php if ($_smarty_tpl->tpl_vars['offer']->value['pricedata_arr']['oneprice']['unit']=='%') {?>%<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['offer']->value['pricedata_arr']['oneprice']['unit']];?>
<?php }?>
                <?php } else { ?>
                    <?php  $_smarty_tpl->tpl_vars['onecost'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['onecost']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['elem']->value->getCostList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['onecost']->key => $_smarty_tpl->tpl_vars['onecost']->value) {
$_smarty_tpl->tpl_vars['onecost']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['onecost']->value['type']!='auto') {?>
                            <div class="one-price">                                
                                <?php echo (($tmp = @$_smarty_tpl->tpl_vars['offer']->value['pricedata_arr']['price'][$_smarty_tpl->tpl_vars['onecost']->value['id']]['znak'])===null||$tmp==='' ? "+" : $tmp);?>

                                <?php echo (($tmp = @$_smarty_tpl->tpl_vars['offer']->value['pricedata_arr']['price'][$_smarty_tpl->tpl_vars['onecost']->value['id']]['original_value'])===null||$tmp==='' ? "0" : $tmp);?>

                                <?php $_smarty_tpl->tpl_vars['unit'] = new Smarty_variable($_smarty_tpl->tpl_vars['offer']->value['pricedata_arr']['price'][$_smarty_tpl->tpl_vars['onecost']->value['id']]['unit'], null, 0);?>
                                <?php if ($_smarty_tpl->tpl_vars['unit']->value=='%') {?>%<?php } elseif ($_smarty_tpl->tpl_vars['unit']->value>0) {?><?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['unit']->value];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['default_currency']->value['id']];?>
<?php }?>
                                 <?php echo $_smarty_tpl->tpl_vars['onecost']->value['title'];?>

                            </div>
                        <?php }?>
                    <?php } ?>
                <?php }?>
            </td>
            <td class="actions">
                <span class="loader"></span>
                <a class="offer-edit icon i-edit"></a>
                <a class="offer-del delete">удалить</a>
            </td>
        </tr>
    <?php } ?>
    <?php if (empty($_smarty_tpl->tpl_vars['offers']->value)) {?>
        <tr class="empty-row no-hover">
            <td colspan="7">нет дополнительных комплектаций</td>
        </tr>
    <?php }?>
    </tbody>
</table>

<div class="tools-bottom">
    <div class="paginator virtual-form" data-action="<?php echo smarty_function_adminUrl(array('do'=>false,'product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'offer_filter'=>$_smarty_tpl->tpl_vars['filter']->value,'mod_controller'=>"catalog-block-offerblock"),$_smarty_tpl);?>
">
        <?php echo $_smarty_tpl->tpl_vars['paginator']->value->getView();?>
                        
    </div>
    <span class="checked-offers">Отмеченные комплектации</span> <a class="button edit">Редактировать</a> <a class="button delete">Удалить</a>
</div><?php }} ?>
