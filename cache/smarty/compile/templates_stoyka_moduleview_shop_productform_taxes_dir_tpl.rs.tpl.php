<?php /* Smarty version Smarty-3.1.18, created on 2016-10-27 11:38:07
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/productform/taxes_dir.tpl" */ ?>
<?php /*%%SmartyHeaderCode:881293755811bcefa3dbb3-22876167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a90b2c192808b190e7e58bc3eb360413f04d3cb5' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/productform/taxes_dir.tpl',
      1 => 1460044894,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '881293755811bcefa3dbb3-22876167',
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
  'unifunc' => 'content_5811bcefaf96d4_49867405',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5811bcefaf96d4_49867405')) {function content_5811bcefaf96d4_49867405($_smarty_tpl) {?><input type="hidden" name="tax_ids" value="<?php echo $_smarty_tpl->tpl_vars['elem']->value['tax_ids'];?>
">
    <input type="checkbox" value="all" class="tax_items" id="tax_all" <?php if ($_smarty_tpl->tpl_vars['elem']->value['tax_ids']=='all') {?>checked<?php }?>> 
    <label for="tax_all">Все налоги</label><br>
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
    $('#tax_all').change(checkTax).change();    
    
    
    $('.tax_items').change(function() {
        var value = [];
        $('.tax_items:checked').each(function() {
            value.push($(this).val());
        });
        $('input[name="tax_ids"]').val(value.join(','));
    });
})
</script><?php }} ?>
