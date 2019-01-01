<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 13:58:07
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/catalog/property_val.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191403923757bc2c3f236b71-88205327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '391a0818a4ec852e2ca5cecca78c9bb7be3adfcf' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/catalog/property_val.tpl',
      1 => 1458682266,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '191403923757bc2c3f236b71-88205327',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'self' => 0,
    'values' => 0,
    'disabled' => 0,
    'key' => 0,
    'oneitem' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bc2c3f37e1c8_76901918',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc2c3f37e1c8_76901918')) {function content_57bc2c3f37e1c8_76901918($_smarty_tpl) {?>    <?php if ($_smarty_tpl->tpl_vars['self']->value['type']=='list') {?>
        <?php $_smarty_tpl->tpl_vars['values'] = new Smarty_variable($_smarty_tpl->tpl_vars['self']->value->valuesArr(true), null, 0);?>
        <input type="hidden" name="prop[<?php echo $_smarty_tpl->tpl_vars['self']->value['id'];?>
][value][]" value="" class="h-val">        
        <?php  $_smarty_tpl->tpl_vars['oneitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneitem']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneitem']->key => $_smarty_tpl->tpl_vars['oneitem']->value) {
$_smarty_tpl->tpl_vars['oneitem']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['oneitem']->key;
?>
        <span class="inline-item property-type-list">
            <input type="checkbox" name="prop[<?php echo $_smarty_tpl->tpl_vars['self']->value['id'];?>
][value][]" class="h-val" <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
 id="ch_<?php echo $_smarty_tpl->tpl_vars['self']->value['id'];?>
<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['oneitem']->value;?>
" <?php if (is_array($_smarty_tpl->tpl_vars['value']->value)&&in_array($_smarty_tpl->tpl_vars['oneitem']->value,$_smarty_tpl->tpl_vars['value']->value)) {?>checked<?php }?>>
            <label for="ch_<?php echo $_smarty_tpl->tpl_vars['self']->value['id'];?>
<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['oneitem']->value;?>
</label>
        </span>
        <?php } ?>        
    <?php } elseif ($_smarty_tpl->tpl_vars['self']->value['type']=='bool') {?>
        <input type="hidden" name="prop[<?php echo $_smarty_tpl->tpl_vars['self']->value['id'];?>
][value]" value="0" class="h-val">
        <input type="checkbox" value="1" <?php if (!empty($_smarty_tpl->tpl_vars['value']->value)) {?>checked<?php }?> name="prop[<?php echo $_smarty_tpl->tpl_vars['self']->value['id'];?>
][value]" class="h-val" <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
>
    <?php } else { ?>
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" name="prop[<?php echo $_smarty_tpl->tpl_vars['self']->value['id'];?>
][value]" class="h-val" <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
>
    <?php }?><?php }} ?>
