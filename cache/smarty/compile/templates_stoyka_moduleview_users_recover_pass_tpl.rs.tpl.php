<?php /* Smarty version Smarty-3.1.18, created on 2016-07-16 06:49:52
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/users/recover_pass.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12240058655789aee09a5e95-83613747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '945676cc40a2ad5c5be07a5f398d01677e665187' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/users/recover_pass.tpl',
      1 => 1460043203,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '12240058655789aee09a5e95-83613747',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'router' => 0,
    'this_controller' => 0,
    'url' => 0,
    'error' => 0,
    'data' => 0,
    'send_success' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5789aee0bd02c6_27333159',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5789aee0bd02c6_27333159')) {function content_5789aee0bd02c6_27333159($_smarty_tpl) {?><form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('users-front-auth',array("Act"=>"recover"));?>
" class="authorization">
    <?php echo $_smarty_tpl->tpl_vars['this_controller']->value->myBlockIdInput();?>

    <?php if ($_smarty_tpl->tpl_vars['url']->value->request('dialogWrap',@constant('TYPE_INTEGER'))) {?>
        <h2 data-dialog-options='{ "width": "360" }'>Восстановление пароля</h2>
        <div class="dialogForm">
            <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
            <input type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['login'];?>
" data-deftext="e-mail" class="login" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['login'];?>
" <?php if ($_smarty_tpl->tpl_vars['send_success']->value) {?>readonly<?php }?>>
            <?php if ($_smarty_tpl->tpl_vars['send_success']->value) {?>
                <div class="recoverText success">
                    <i></i>
                    Письмо успешно отправлено. Следуйте инструкциям в письме
                </div>            
            <?php } else { ?>
                <div class="recoverText">
                    <i></i>
                    На указанный E-mail будет отправлено письмо с дальнейшими инструкциями по восстановлению пароля
                </div>
                <div class="floatWrap">
                    <button type="submit">Отправить</button>
                </div>
            <?php }?>
            
            <div class="noAccount">
                Нет аккаунта? &nbsp;&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('users-front-register');?>
" class="inDialog">Зарегистрируйтесь</a><br>
                Вспомнили пароль? &nbsp;&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('users-front-auth');?>
" class="inDialog">Авторизуйтесь</a>
            </div>
        </div>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['send_success']->value) {?>
            <div class="formSuccessText">E-mail: <?php echo $_smarty_tpl->tpl_vars['data']->value['login'];?>
<br>
                Письмо успешно отправлено. Следуйте инструкциям в письме</div>
        <?php } else { ?>
        <table class="formTable">
            <tr>
                <td class="key">E-mail</td>
                <td class="value"><input type="text" size="30" name="login" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['login'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>class="has-error"<?php }?>>
                <span class="formFieldError"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
                <div class="help">На указанный E-mail будет отправлено письмо с дальнейшими инструкциями по восстановлению пароля</div>
                </td>
            </tr>
        </table>
        <button type="submit" class="formSave">Отправить</button>    
        <?php }?>
    <?php }?>
</form><?php }} ?>
