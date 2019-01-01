<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 16:25:26
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/users/authorization.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19673827755788e4467c4ce5-93821706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45d909be451ee570c7e854f9c4dd4d4e5196460b' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/users/authorization.tpl',
      1 => 1460043203,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '19673827755788e4467c4ce5-93821706',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status_message' => 0,
    'router' => 0,
    'this_controller' => 0,
    'data' => 0,
    'url' => 0,
    'error' => 0,
    'Setup' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788e4468a5af8_12354309',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788e4468a5af8_12354309')) {function content_5788e4468a5af8_12354309($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['status_message']->value)) {?><div class="pageError"><?php echo $_smarty_tpl->tpl_vars['status_message']->value;?>
</div><?php }?>
<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('users-front-auth');?>
" class="authorization">
    <?php echo $_smarty_tpl->tpl_vars['this_controller']->value->myBlockIdInput();?>

    <input type="hidden" name="referer" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['referer'];?>
">
    <?php if ($_smarty_tpl->tpl_vars['url']->value->request('dialogWrap',@constant('TYPE_INTEGER'))) {?>
        <h2 data-dialog-options='{ "width": "360" }'>Авторизация</h2>
        <div class="dialogForm">
            <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
            <input type="text" name="login" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['login'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Setup']->value['DEFAULT_DEMO_LOGIN'] : $tmp);?>
" data-deftext="e-mail" class="login">
            <input type="text" value="пароль" class="def-value password" id="emptyPassword" <?php if ($_smarty_tpl->tpl_vars['Setup']->value['DEFAULT_DEMO_PASS']) {?>style="display:none"<?php }?>>
            <input type="password" name="pass" class="password" id="realPassword" <?php if (!$_smarty_tpl->tpl_vars['Setup']->value['DEFAULT_DEMO_PASS']) {?>style="display:none"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['Setup']->value['DEFAULT_DEMO_PASS'];?>
">
        
            <div class="floatWrap">
                <div class="rememberBlock">
                    <input type="checkbox" id="rememberMe" name="remember" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['remember']) {?>checked<?php }?>> <label for="rememberMe">Запомнить меня</label>
                </div>
                <button type="submit">Войти</button>
            </div>
            
            <div class="noAccount">
                Нет аккаунта? &nbsp;&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('users-front-register');?>
" class="inDialog">Зарегистрируйтесь</a><br>
                Забыли пароль? &nbsp;&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('users-front-auth',array("Act"=>"recover"));?>
" class="inDialog">Восстановить пароль</a>            
            </div>
        </div>
        <script type="text/javascript">
            $(function() {
                $('#emptyPassword').focus(function() {
                    $(this).hide();
                    $('#realPassword').show().focus();
                });
                $('#realPassword').blur(function() {
                    if ($(this).val() == '') {
                        $(this).hide();
                        $('#emptyPassword').show();
                    }
                })
            });
        </script>
    <?php } else { ?>
        <table class="formTable">
            <tr>
                <td class="key">E-mail</td>
                <td class="value"><input type="text" size="30" name="login" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['login'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>class="has-error"<?php }?>>
                <span class="formFieldError"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
                </td>
            </tr>
            <tr>
                <td class="key">Пароль</td>
                <td class="value"><input type="password" size="30" name="pass" <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>class="has-error"<?php }?>>
                    <div class="rememberBox">
                        <input type="checkbox" id="rememberMe" name="remember" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['remember']) {?>checked<?php }?>> <label for="rememberMe">Запомнить меня</label>
                    </div>
                </td>
            </tr>        
        </table>
        <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('users-front-auth',array("Act"=>"recover"));?>
" class="forgotPassword"><span>Забыли пароль?</span></a>    
        <button type="submit" class="formSave">Войти</button>    
    <?php }?>
</form><?php }} ?>
