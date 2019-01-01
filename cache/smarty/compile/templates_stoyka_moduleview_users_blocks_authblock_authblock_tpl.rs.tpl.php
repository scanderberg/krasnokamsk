<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:52:33
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/users/blocks/authblock/authblock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8050528915788dc91452b86-82775395%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e592f04067b6e9bc062f2194ecb254e4fe0340cb' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/users/blocks/authblock/authblock.tpl',
      1 => 1458667187,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '8050528915788dc91452b86-82775395',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_auth' => 0,
    'router' => 0,
    'url' => 0,
    'referer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc914b9889_20167337',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc914b9889_20167337')) {function content_5788dc914b9889_20167337($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['is_auth']->value) {?>
<div class="auth-top" style='padding-right: 10px!important; padding-top: 2px!important; padding-bottom: 2px!important;'>
		
<div class="authorized" style='width: 240px!important;'>
    <div class="top">

        <div class="my">
            <div class="dropblock">
                <a class="dropdown-handler">Личный кабинет</a>
                <ul class="dropdown">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('users-front-profile');?>
">профиль</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('shop-front-myorders');?>
">мои заказы</a></li>

                </ul>
            </div>

		
        </div>

		
    </div>     

</div>

<div class="top-exit" >			
<a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('users-front-auth',array('Act'=>'logout'));?>
" class="exit">Выход</a> 
</div>	

</div>
<?php } else { ?>
<div class="auth-top">
    <?php $_smarty_tpl->tpl_vars['referer'] = new Smarty_variable(urlencode($_smarty_tpl->tpl_vars['url']->value->server('REQUEST_URI')), null, 0);?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('users-front-auth',array('referer'=>$_smarty_tpl->tpl_vars['referer']->value));?>
" class="first inDialog"><span>Войти</span></a> | 
    <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('users-front-register',array('referer'=>$_smarty_tpl->tpl_vars['referer']->value));?>
" class="inDialog"><span>Зарегистрироваться</span></a>
</div>
<?php }?><?php }} ?>
