<?php /* Smarty version Smarty-3.1.18, created on 2016-07-16 18:10:11
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/menu/blocks/menu/punkt2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1585768948578a4e537dd2a8-55823287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef8d4ce347ddd10c7d81b7e21cde3a9794b57ff1' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/menu/blocks/menu/punkt2.tpl',
      1 => 1459952936,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '1585768948578a4e537dd2a8-55823287',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu_level' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_578a4e538629f0_48347206',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578a4e538629f0_48347206')) {function content_578a4e538629f0_48347206($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu_level']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>

<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['fields']->getHref();?>
" style="display: block!important;" <?php if ($_smarty_tpl->tpl_vars['item']->value['fields']['target_blank']) {?>target="_blank"<?php }?>>
<div style="line-height: 24px!important;">

<?php if ($_smarty_tpl->tpl_vars['item']->value['fields']['typelink']!='separator') {?><?php echo $_smarty_tpl->tpl_vars['item']->value['fields']['title'];?>
<?php } else { ?>&nbsp;<?php }?>

</div>
</a>

<?php } ?><?php }} ?>
