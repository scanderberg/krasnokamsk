<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 13:58:07
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/property_group_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68606750557bc2c3f06b6d0-16065151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db3124f7770704393285d06f478c55b8a3614431' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/property_group_product.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '68606750557bc2c3f06b6d0-16065151',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'group' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bc2c3f18cdc8_48128800',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc2c3f18cdc8_48128800')) {function content_57bc2c3f18cdc8_48128800($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><tbody class="group-body" data-gid="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['group']->value['group']['id'])===null||$tmp==='' ? "0" : $tmp);?>
">
    <tr class="property-group noover">
        <td colspan="6"><div class="back"><?php if ($_smarty_tpl->tpl_vars['group']->value['group']['id']>0) {?><?php echo $_smarty_tpl->tpl_vars['group']->value['group']['title'];?>
<?php } else { ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Без группы<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?></div></td>
    </tr>
</tbody>
<tbody class="overable" data-group-id="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['group']->value['group']['id'])===null||$tmp==='' ? "0" : $tmp);?>
">
    <?php if (!empty($_smarty_tpl->tpl_vars['group']->value['properties'])) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("property_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('properties'=>$_smarty_tpl->tpl_vars['group']->value['properties']), 0);?>

    <?php }?>
</tbody><?php }} ?>
