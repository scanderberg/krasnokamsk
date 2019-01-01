<?php /* Smarty version Smarty-3.1.18, created on 2016-07-23 09:51:28
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/auth.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1743892426579313f0791115-86708987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3896841513f4ee660cab7a017644a80b61c051f1' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/auth.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '1743892426579313f0791115-86708987',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app' => 0,
    'js' => 0,
    'Setup' => 0,
    'current_lang' => 0,
    'locale_list' => 0,
    'locale_key' => 0,
    'i' => 0,
    'url' => 0,
    'locale' => 0,
    'err' => 0,
    'data' => 0,
    'referer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_579313f0b10302_83241908',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579313f0b10302_83241908')) {function content_579313f0b10302_83241908($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addcss')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addcss.php';
if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
?><?php echo smarty_function_addcss(array('file'=>"admin/style.css",'basepath'=>"common"),$_smarty_tpl);?>
<?php echo smarty_function_addcss(array('file'=>"admin/framework.css",'basepath'=>"common"),$_smarty_tpl);?>
<?php echo smarty_function_addjs(array('file'=>"jquery.min.js",'basepath'=>"common"),$_smarty_tpl);?>
<?php echo smarty_function_addjs(array('file'=>"jquery.form.js",'basepath'=>"common"),$_smarty_tpl);?>
<?php echo smarty_function_addjs(array('file'=>"jquery.tooltip.js",'basepath'=>"common"),$_smarty_tpl);?>
<?php echo smarty_function_addjs(array('file'=>"jquery.deftext.js",'basepath'=>"common"),$_smarty_tpl);?>
<?php echo smarty_function_addjs(array('file'=>"admindebug.js",'basepath'=>"common"),$_smarty_tpl);?>
<?php echo smarty_function_addjs(array('file'=>"admin.js",'basepath'=>"common"),$_smarty_tpl);?>
<?php echo smarty_function_addjs(array('file'=>"jquery.rsframework.js",'basepath'=>"common"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->tpl_vars['app']->value->setBodyClass('admin-style authbody');?>

<?php if ($_smarty_tpl->tpl_vars['js']->value) {?><?php echo smarty_function_addjs(array('file'=>"auth.js",'basepath'=>"common"),$_smarty_tpl);?>
<?php }?>
<div class="win">
    <div class="title-box">
        <img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['Setup']->value['IMG_PATH'];?>
/adminstyle/logo.gif">
        
        <div class="select-lang rs-list-button">
            <span class="rs-active rs-dropdown-ext-handler" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Выбор языка<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"><?php echo $_smarty_tpl->tpl_vars['locale_list']->value[$_smarty_tpl->tpl_vars['current_lang']->value];?>
</span><?php if (count($_smarty_tpl->tpl_vars['locale_list']->value)>1) {?><a class="rs-dropdown-handler">&nbsp;</a>
            <ul class="rs-dropdown">
                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable("0", null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['locale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['locale']->_loop = false;
 $_smarty_tpl->tpl_vars['locale_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['locale_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['locale']->key => $_smarty_tpl->tpl_vars['locale']->value) {
$_smarty_tpl->tpl_vars['locale']->_loop = true;
 $_smarty_tpl->tpl_vars['locale_key']->value = $_smarty_tpl->tpl_vars['locale']->key;
?>
                    <?php if ($_smarty_tpl->tpl_vars['current_lang']->value!=$_smarty_tpl->tpl_vars['locale_key']->value) {?>
                    <li <?php if (!$_smarty_tpl->tpl_vars['i']->value) {?>class="first"<?php }?>><a href="<?php echo smarty_function_adminUrl(array('do'=>false,'mod_controller'=>false,'Act'=>'changeLang','lang'=>$_smarty_tpl->tpl_vars['locale_key']->value,'referer'=>$_smarty_tpl->tpl_vars['url']->value->getSelfUrl()),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['locale']->value;?>
</a></li>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
                    <?php }?>                    
                <?php } ?>
            </ul>
            <?php }?>
        </div>
    </div>
    <div class="form-box<?php if (!empty($_smarty_tpl->tpl_vars['err']->value)) {?> has-error<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['data']->value['successText'])) {?> success<?php }?>">
        <div class="error-message"><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</div>
        <div class="success-message"><?php echo $_smarty_tpl->tpl_vars['data']->value['successText'];?>
</div>
        
        <form method="POST" id="auth" action="<?php echo smarty_function_adminUrl(array('mod_controller'=>false,'do'=>false,'Act'=>"auth"),$_smarty_tpl);?>
" class="body-box" <?php if ($_smarty_tpl->tpl_vars['data']->value['do']=='recover') {?>style="display:none"<?php }?>>
            <input type="hidden" name="lang" value="ru">
            <input type="hidden" name="referer" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['referer']->value, ENT_QUOTES, 'UTF-8', true);?>
">
            <h1><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Авторизация<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
            <div class="height-saver">
                <p class="login"><label><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
E-mail<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
                    <input type="text" id="login" name="login" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['login'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Setup']->value['DEFAULT_DEMO_LOGIN'] : $tmp);?>
"></p>
                    
                <p class="pass"><label><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Пароль<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
                    <input type="password" id="pass" name="pass" value="<?php echo $_smarty_tpl->tpl_vars['Setup']->value['DEFAULT_DEMO_PASS'];?>
"></p>
                    
                <p class="remember"><input type="checkbox" name="remember" value="1" id="remember">
                    <label for="remember"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Запомнить меня<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label></p>
            </div>
            <p class="buttons">
                <button type="submit"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
войти<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</button>
                <a href="<?php echo smarty_function_adminUrl(array('mod_controller'=>false,'do'=>"recover",'Act'=>"auth"),$_smarty_tpl);?>
" class="forget-pass to-recover"><span><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Забыли пароль?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></a>
            </p>
        </form>
        
        <form method="POST" id="recover" action="<?php echo smarty_function_adminUrl(array('mod_controller'=>false,'do'=>"recover",'Act'=>"auth"),$_smarty_tpl);?>
" class="body-box recover" <?php if ($_smarty_tpl->tpl_vars['data']->value['do']=='recover') {?>style="display:block"<?php }?>>
            <h1><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Восстановить пароль<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
            <div class="height-saver">
                <p class="login"><label><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
E-mail<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
                    <input type="text" id="login" name="login" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['login'], ENT_QUOTES, 'UTF-8', true);?>
"></p>        
                
                <p class="help">
                    <i class="corner"></i>
                    На указанный E-mail будет отправлено письмо с дальнейшими инструкциями по восстановленю пароля
                </p>    
            </div>
            <p class="buttons">
                <button type="submit"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
отправить<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</button>
                <a href="<?php echo smarty_function_adminUrl(array('mod_controller'=>false,'Act'=>"auth",'do'=>false),$_smarty_tpl);?>
" class="forget-pass back-to-auth"><span><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
авторизация<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></a>
            </p>
        </form>
    </div>
    
</div><?php }} ?>
