<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:51:51
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/table/coltype/actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7657499195788dc674b79a6-57122474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ef561d499f9a4ee5716a83f5be129c393427064' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/table/coltype/actions.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '7657499195788dc674b79a6-57122474',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cell' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc675276e3_99165319',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc675276e3_99165319')) {function content_5788dc675276e3_99165319($_smarty_tpl) {?><div class="tools">
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cell']->value->getActions(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <?php if (!$_smarty_tpl->tpl_vars['item']->value->isHidden()) {?>
            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['item']->value->getTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool'=>$_smarty_tpl->tpl_vars['item']->value), 0);?>

        <?php }?>
    <?php } ?>
</div><?php }} ?>
