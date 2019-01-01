<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:51:51
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/filter/property_filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4650188365788dc679135b6-48748964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ac91b6b59a35905e435c4bb6edd205d07945db3' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/filter/property_filter.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '4650188365788dc679135b6-48748964',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fitem' => 0,
    'cat_properties' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc6793d379_05062620',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc6793d379_05062620')) {function content_5788dc6793d379_05062620($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><div class="property-filter-toogle">
    <a class="toggle<?php if ($_smarty_tpl->tpl_vars['fitem']->value->isActiveFilter()) {?> open<?php }?>"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
искать по характеристикам<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
</div>
<div class="property-filter-forms" <?php if (!$_smarty_tpl->tpl_vars['fitem']->value->isActiveFilter()) {?>style="display:none"<?php }?>>
    <?php $_smarty_tpl->tpl_vars['cat_properties'] = new Smarty_variable($_smarty_tpl->tpl_vars['fitem']->value->getProperties(), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['cat_properties']->value) {?>
    <table class="property-filter-table">
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat_properties']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <tr>
            <td class="prop_name"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
            <td>
                <?php echo $_smarty_tpl->getSubTemplate ("%catalog%/filter/view_filter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prop'=>$_smarty_tpl->tpl_vars['item']->value), 0);?>

            </td>
        </tr>
    <?php } ?>
    </table>    
    <?php } else { ?>
        <div class="no-category-properties">У выбранной категории нет характеристик</div>
    <?php }?>
</div>

<script>
$(function() {
    $('.property-filter-toogle .toggle').click(function() {
        var is_open = $(this).hasClass('open');
        $(this).toggleClass('open');
        $('.property-filter-forms').toggle(!is_open);
    });
});
</script><?php }} ?>
