<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 19:45:56
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/users/view/notice/toadmin_register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40114480857891344311384-33720718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7835ea45d70d5cabb71c1e728a9b0132a3c41d7b' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/users/view/notice/toadmin_register.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '40114480857891344311384-33720718',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_578913443ae951_35360192',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578913443ae951_35360192')) {function content_578913443ae951_35360192($_smarty_tpl) {?><p>Уважаемый, администратор!</p>
<p>На сайте <?php echo $_smarty_tpl->tpl_vars['url']->value->getDomainStr();?>
 зарегистрирован пользователь!</p>

<p>ID: <?php echo $_smarty_tpl->tpl_vars['data']->value->user['id'];?>
<br>
Ф.И.О.: <?php echo $_smarty_tpl->tpl_vars['data']->value->user['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value->user['surname'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value->user['midname'];?>
<br>
E-mail: <?php echo $_smarty_tpl->tpl_vars['data']->value->user['e_mail'];?>
<br>
Телефон: <?php echo $_smarty_tpl->tpl_vars['data']->value->user['phone'];?>
<br>
<?php if ($_smarty_tpl->tpl_vars['data']->value->user['is_company']) {?>Название организации: <?php echo $_smarty_tpl->tpl_vars['data']->value->user['company'];?>
<br>
ИНН: <?php echo $_smarty_tpl->tpl_vars['data']->value->user['company_inn'];?>
<br>
<?php }?>
-------------------------------------<br>
Логин: <?php echo $_smarty_tpl->tpl_vars['data']->value->user['login'];?>
<br>
Пароль: <?php echo $_smarty_tpl->tpl_vars['data']->value->password;?>
<br>

<p>Автоматическая рассылка <?php echo $_smarty_tpl->tpl_vars['url']->value->getDomainStr();?>
.</p><?php }} ?>
