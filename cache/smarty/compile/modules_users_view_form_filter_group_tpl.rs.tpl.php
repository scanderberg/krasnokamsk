<?php /* Smarty version Smarty-3.1.18, created on 2018-04-03 16:37:50
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/users/view/form/filter/group.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13947570995ac383ae92e4d7-78121292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '389139ba24966af9cb4b03918478c5f724ff1fe7' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/users/view/form/filter/group.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '13947570995ac383ae92e4d7-78121292',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cell' => 0,
    'groups' => 0,
    'group' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ac383ae9bfc05_66308818',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac383ae9bfc05_66308818')) {function content_5ac383ae9bfc05_66308818($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['groups'] = new Smarty_variable($_smarty_tpl->tpl_vars['cell']->value->getRow()->getUserGroups(false), null, 0);?>
<?php if (!empty($_smarty_tpl->tpl_vars['groups']->value)) {?>
    <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['group']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['group']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['group']->iteration++;
 $_smarty_tpl->tpl_vars['group']->last = $_smarty_tpl->tpl_vars['group']->iteration === $_smarty_tpl->tpl_vars['group']->total;
?>
       <?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
<?php if (!$_smarty_tpl->tpl_vars['group']->last) {?>, <?php }?>
    <?php } ?>
<?php } else { ?>
    Без группы
<?php }?>
<?php }} ?>
