<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 13:56:41
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/productform/taxes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212717928657bc2be97b6474-17120053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '217f8994ab04b12c29f0a1cbbf5bc60a5a006dd6' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/productform/taxes.tpl',
      1 => 1460044894,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '212717928657bc2be97b6474-17120053',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
    'field' => 0,
    'key' => 0,
    'checked_taxes' => 0,
    'tax' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bc2be97f0d87_76242739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc2be97f0d87_76242739')) {function content_57bc2be97f0d87_76242739($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><input type="hidden" name="tax_ids" value="<?php echo $_smarty_tpl->tpl_vars['elem']->value['tax_ids'];?>
">

<input type="checkbox" class="tax_items" value="category" id="tax_category" <?php if ($_smarty_tpl->tpl_vars['elem']->value['tax_ids']=='category') {?>checked<?php }?>> 
<label for="tax_category"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Как у основной категории<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label><br>
<?php $_smarty_tpl->tpl_vars['checked_taxes'] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['elem']->value['tax_ids']), null, 0);?>

<?php  $_smarty_tpl->tpl_vars['tax'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tax']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value->getList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tax']->key => $_smarty_tpl->tpl_vars['tax']->value) {
$_smarty_tpl->tpl_vars['tax']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tax']->key;
?>
    <input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="tax_items tax_items_other" id="tax_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['checked_taxes']->value)) {?>checked<?php }?>> 
    <label for="tax_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tax']->value;?>
</label><br>
<?php } ?>

<script>
$(function() {
    var checkTax = function() {
        if (this.checked) {
            $('.tax_items_other').prop('checked', false).prop('disabled', true);
        } else {
            $('.tax_items_other').prop('disabled', false);
        }
    }
    
    $('#tax_category').change(checkTax).change();
    $('.tax_items').change(function() {
        var value = new Array();
        $('.tax_items:checked').each(function() {
            value.push($(this).val());
        });
        $('input[name="tax_ids"]').val(value.join(','));
    });
})
</script><?php }} ?>
