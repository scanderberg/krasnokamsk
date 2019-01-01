<?php /* Smarty version Smarty-3.1.18, created on 2018-04-07 08:33:53
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/siteupdate/view/widget/checkupdates.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17834056765ac858410f1b33-96914567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddcb98e8f71b9e7dbce8f176683af0f3f3434749' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/siteupdate/view/widget/checkupdates.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '17834056765ac858410f1b33-96914567',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mod_css' => 0,
    'mod_js' => 0,
    'state' => 0,
    'expire_days' => 0,
    'mod_img' => 0,
    'msg' => 0,
    'Setup' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ac858411819e3_46837709',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac858411819e3_46837709')) {function content_5ac858411819e3_46837709($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addcss')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addcss.php';
if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><?php echo smarty_function_addcss(array('file'=>((string)$_smarty_tpl->tpl_vars['mod_css']->value)."checkupdates.css",'basepath'=>"root"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>((string)$_smarty_tpl->tpl_vars['mod_js']->value)."checkupdates.js",'basepath'=>"root"),$_smarty_tpl);?>


<div class="checkUpdatesWidget" data-checkupdate-url="<?php echo smarty_function_adminUrl(array('mod_controller'=>"siteupdate-widget-checkupdates",'cudo'=>"checkUpdates"),$_smarty_tpl);?>
">
    <?php if ($_smarty_tpl->tpl_vars['state']->value=='nolicense') {?>
        <div class="nolicense">
            <p><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Лицензионный ключ не установлен. Получение обновлений недоступно<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
            <a class="greenButton" href="<?php echo smarty_function_adminUrl(array('do'=>false,'mod_controller'=>"main-license"),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
установить лицензию<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['state']->value=='actual') {?>
        <div class="padd5">
            <table class="frame60 allok">
                <tr>
                    <td class="checkForUpdates"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Система обновлена до последней версии<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
                </tr>
            </table>
            <table class="frame40 timeleft">
                <tr>
                    <td>
                        <a href="<?php echo smarty_function_adminUrl(array('do'=>false,'mod_controller'=>"main-license"),$_smarty_tpl);?>
"><span class="l1"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('expire'=>$_smarty_tpl->tpl_vars['expire_days']->value)); $_block_repeat=true; echo smarty_block_t(array('expire'=>$_smarty_tpl->tpl_vars['expire_days']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%expire [plural:%expire:день|дня|дней]<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('expire'=>$_smarty_tpl->tpl_vars['expire_days']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span><br>
                            <span class="l2"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
срок подписки на обновления<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></a>
                    </td>                            
                </tr>
            </table>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['state']->value=='needupdate') {?>
        <div class="padd5">
            <div class="frame60">
                <p class="updateText checkForUpdates"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Доступны новые обновления<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
                <table class="needUpdate">
                    <tr>
                        <td class="gotoUpdate">
                            <a href="<?php echo smarty_function_adminUrl(array('do'=>false,'mod_controller'=>"siteupdate-wizard"),$_smarty_tpl);?>
#start" class="hasUpdate"><img src="<?php echo $_smarty_tpl->tpl_vars['mod_img']->value;?>
/checkupdates.png"><span>выполнить обновление</span></a>
                        </td>
                    </tr>
                </table>
            </div>
            <table class="frame40 timeleft">
                <tr>
                    <td>
                        <a href="<?php echo smarty_function_adminUrl(array('do'=>false,'mod_controller'=>"main-license"),$_smarty_tpl);?>
"><span class="l1"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('expire'=>$_smarty_tpl->tpl_vars['expire_days']->value)); $_block_repeat=true; echo smarty_block_t(array('expire'=>$_smarty_tpl->tpl_vars['expire_days']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%expire [plural:%expire:день|дня|дней]<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('expire'=>$_smarty_tpl->tpl_vars['expire_days']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span><br>
                            <span class="l2"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
срок подписки на обновления<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></a>
                    </td>
                </tr>
            </table>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['state']->value=='expirelicense') {?>
        <div class="padd5">
            <table class="frame60">
                <tr>
                    <td><p><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Срок доступных обновлений истек. <br>Приобретите лицензию на обновление продукта.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
                        <a class="greenButton" href="<?php echo smarty_function_adminUrl(array('do'=>false,'mod_controller'=>"main-license"),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
приобрести лицензию<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
                    </td>
                </tr>
            </table>
            <table class="frame40 timeleft">
                <tr>
                    <td>
                        <a href="<?php echo smarty_function_adminUrl(array('do'=>false,'mod_controller'=>"main-license"),$_smarty_tpl);?>
"><span class="l1"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Лицензия истекла<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></a>
                    </td>
                </tr>
            </table>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['state']->value=='error') {?>
        <div class="errors">
            <p class="msg"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
            <a class="checkForUpdates"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
повторить попытку<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
        </div>
    <?php } else { ?>
        <div class="checking">
            <img src="<?php echo $_smarty_tpl->tpl_vars['Setup']->value['IMG_PATH'];?>
/adminstyle/ajax-loader.gif"><br>
            <p><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Идет проверка обновлений<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
        </div>
    <?php }?>
</div>

<script>
    $.allReady(function() {
        $('.checkUpdatesWidget').checkUpdates();
    });
</script><?php }} ?>
