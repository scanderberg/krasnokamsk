<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 17:33:11
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/users/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1646007255788f427057d50-02389892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6608382a80b793f5c80071b4d2e356b3fa11a8a' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/users/register.tpl',
      1 => 1460043203,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '1646007255788f427057d50-02389892',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'user' => 0,
    'item' => 0,
    'router' => 0,
    'this_controller' => 0,
    'referer' => 0,
    'conf_userfields' => 0,
    'fld' => 0,
    'errname' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788f42711fab2_35007819',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788f42711fab2_35007819')) {function content_5788f42711fab2_35007819($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
?><?php echo smarty_function_addjs(array('file'=>"jquery.activetabs.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['url']->value->request('dialogWrap',@constant('TYPE_INTEGER'))) {?>
    <h2 data-dialog-options='{ "width": "755" }'>Регистрация пользователя</h2>
<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['user']->value->getNonFormErrors())>0) {?>
    <div class="pageError">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user']->value->getNonFormErrors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <p><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</p>
        <?php } ?>
    </div>
<?php }?>    

<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('users-front-register');?>
">
    <?php echo $_smarty_tpl->tpl_vars['this_controller']->value->myBlockIdInput();?>

    <input type="hidden" name="referer" value="<?php echo $_smarty_tpl->tpl_vars['referer']->value;?>
">
    <input type="hidden" name="is_company" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['is_company'];?>
">
    <div class="userProfile activeTabs" data-input-name="is_company">
        <div class="formSection">
            <span class="sectionListBlock">
                <ul class="lineList tabList">
                    <li><a class="item <?php if (!$_smarty_tpl->tpl_vars['user']->value['is_company']) {?>act<?php }?>" data-input-val="0" data-tab="#profile"><i>частное лицо</i></a></li>
                    <li><a class="item <?php if ($_smarty_tpl->tpl_vars['user']->value['is_company']) {?>act<?php }?>" data-class="thiscompany" data-input-val="1" data-tab="#profile"><i>компания</i></a></li>
                </ul>
            </span>
        </div>
        
        <table class="formTable tabFrame<?php if ($_smarty_tpl->tpl_vars['user']->value['is_company']) {?> thiscompany<?php }?>" id="profile">
            <tbody class="organization">
                <tr>
                    <td class="key">Название организации:</td>
                    <td class="value">
                        <?php echo $_smarty_tpl->tpl_vars['user']->value->getPropertyView('company');?>

                        <div class="help">Например: ООО "Аудитор"</div>
                    </td>
                </tr>
                <tr>
                    <td class="key">ИНН:</td>
                    <td class="value">
                        <?php echo $_smarty_tpl->tpl_vars['user']->value->getPropertyView('company_inn');?>

                        <div class="help">10 или 12 цифр</div>
                    </td>
                </tr>                
            </tbody>                  
            <tbody>
            <tr>
                <td class="key">Имя</td>
                <td class="value">
                    <?php echo $_smarty_tpl->tpl_vars['user']->value->getPropertyView('name');?>

                    <div class="help">Может состоять только из букв, знака тире. Например: Иван</div>
                </td>
            </tr>
            <tr>
                <td class="key">Фамилия</td>
                <td class="value">
                    <?php echo $_smarty_tpl->tpl_vars['user']->value->getPropertyView('surname');?>

                    <div class="help">Может состоять только из букв, знака тире. Например: Петров</div>
                </td>    
            </tr>
            <tr>
                <td class="key">Отчество</td>
                <td class="value">
                    <?php echo $_smarty_tpl->tpl_vars['user']->value->getPropertyView('midname');?>

                    <div class="help">Может состоять только из букв, знака тире. Например: Иванович</div>
                </td>    
            </tr>
            <tr>
                <td class="key">Телефон</td>
                <td class="value">
                    <?php echo $_smarty_tpl->tpl_vars['user']->value->getPropertyView('phone');?>

                    <div class="help">Например: +7 918 00011222. Можно указывать несколько номеров, разделяя их запятой</div>
                </td>    
            </tr>    
            <tr>
                <td class="key">E-mail</td>
                <td class="value">
                    <?php echo $_smarty_tpl->tpl_vars['user']->value->getPropertyView('e_mail');?>

                </td>    
            </tr>   
            <tr>
                <td class="key">Пароль</td>
                <td class="value">
                    <div class="ib">
                        <input type="password" name="openpass" <?php if (count($_smarty_tpl->tpl_vars['user']->value->getErrorsByForm('openpass'))) {?>class="has-error"<?php }?>>
                        <div class="help">Пароль</div>
                    </div>
                    <div class="ib ml10">
                        <input type="password" name="openpass_confirm">
                        <div class="help">Повтор пароля</div>
                    </div>
                    <div class="formFieldError">
                        <?php echo $_smarty_tpl->tpl_vars['user']->value->getErrorsByForm('openpass',',');?>

                    </div>
                </td>    
            </tr>        
            
            <?php if ($_smarty_tpl->tpl_vars['conf_userfields']->value->notEmpty()) {?>
                <?php  $_smarty_tpl->tpl_vars['fld'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fld']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['conf_userfields']->value->getStructure(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fld']->key => $_smarty_tpl->tpl_vars['fld']->value) {
$_smarty_tpl->tpl_vars['fld']->_loop = true;
?>
                <tr>
                    <td class="key"><?php echo $_smarty_tpl->tpl_vars['fld']->value['title'];?>
</td>
                    <td class="value">
                        <?php echo $_smarty_tpl->tpl_vars['conf_userfields']->value->getForm($_smarty_tpl->tpl_vars['fld']->value['alias']);?>

                        <?php $_smarty_tpl->tpl_vars['errname'] = new Smarty_variable($_smarty_tpl->tpl_vars['conf_userfields']->value->getErrorForm($_smarty_tpl->tpl_vars['fld']->value['alias']), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['error'] = new Smarty_variable($_smarty_tpl->tpl_vars['user']->value->getErrorsByForm($_smarty_tpl->tpl_vars['errname']->value,', '), null, 0);?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                            <span class="formFieldError"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
                        <?php }?>                        
                    </td>
                </tr>
                <?php } ?>
            <?php }?>   
            <?php if ($_smarty_tpl->tpl_vars['user']->value['__captcha']->isEnabled()) {?>
                <tr class="captcha">
                    <td class="key">Защитный код</td>
                    <td class="value">
                        <?php echo $_smarty_tpl->tpl_vars['user']->value->getPropertyView('captcha');?>

                    </td>    
                </tr>
            <?php }?>
            </tbody>
        </table>
    </div>

    <button type="submit" class="formSave">Сохранить</button>
</form><?php }} ?>
