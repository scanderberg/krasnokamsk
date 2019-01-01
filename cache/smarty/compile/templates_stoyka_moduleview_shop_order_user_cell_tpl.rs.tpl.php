<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:51:53
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/order_user_cell.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1131476525788dc69ae86e8-64333233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f60d23d3ce52f30a92c9ea35f102e01acf7f041' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/order_user_cell.tpl',
      1 => 1460044064,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '1131476525788dc69ae86e8-64333233',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cell' => 0,
    'order' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc69b11436_31418056',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc69b11436_31418056')) {function content_5788dc69b11436_31418056($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['order'] = new Smarty_variable($_smarty_tpl->tpl_vars['cell']->value->getRow(), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['order']->value['user_id']>0) {?>
    <?php $_smarty_tpl->tpl_vars['user'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getUser(), null, 0);?>
    <?php echo $_smarty_tpl->tpl_vars['user']->value->getFio();?>
 <span class="cell-sgray">(<?php echo $_smarty_tpl->tpl_vars['cell']->value->getValue();?>
)</span>
    <?php if ($_smarty_tpl->tpl_vars['user']->value['is_company']) {?><div class="cell-sgray"><?php echo $_smarty_tpl->tpl_vars['user']->value['company'];?>
, ИНН: <?php echo $_smarty_tpl->tpl_vars['user']->value['company_inn'];?>
</div><?php }?>
<?php } else { ?>
    <?php if (!empty($_smarty_tpl->tpl_vars['order']->value['user_fio'])) {?><?php echo $_smarty_tpl->tpl_vars['order']->value['user_fio'];?>
<?php } else { ?>Пользователь не указан<?php }?>  <span class="cell-sgray">(Без регистрации)</span>
<?php }?>
<?php }} ?>
