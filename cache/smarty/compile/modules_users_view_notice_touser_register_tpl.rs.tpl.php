<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 19:45:54
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/users/view/notice/touser_register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6691638257891342740c14-77686612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '886dc822a889637c72ea6e4c9c23c34599931325' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/users/view/notice/touser_register.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '6691638257891342740c14-77686612',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'data' => 0,
    'router' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5789134278fc43_17229018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5789134278fc43_17229018')) {function content_5789134278fc43_17229018($_smarty_tpl) {?><p>Вы успешно зарегистрированы! Мы рады приветствовать Вас на сайте <?php echo $_smarty_tpl->tpl_vars['url']->value->getDomainStr();?>
.</p>

<p>Логин: <?php echo $_smarty_tpl->tpl_vars['data']->value->user['login'];?>
<br>
Пароль: <?php echo $_smarty_tpl->tpl_vars['data']->value->password;?>
</p>

<p>Используйте этот логин и пароль для входа в личный кабинет по адресу <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('users-front-profile',array(),true);?>
"><?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('users-front-profile',array(),true);?>
</a>.<br>
В личном кабинете можно посмотреть историю Ваших заказов, их текущие статусы, а также написать письмо в службу поддержки клиентов.</p>

<p>Чтобы сократить время оформления заказа, Вы можете использовать этот логин и пароль при следующем оформлении заказа.<br>
Пожалуйста обратите внимание, что Вы можете изменять пароль в любое время редактируя ваш Профиль.</p>

<p>С наилучшими пожеланиями, <br>
     администрация интернет магазина <?php echo $_smarty_tpl->tpl_vars['url']->value->getDomainStr();?>
.</p><?php }} ?>
