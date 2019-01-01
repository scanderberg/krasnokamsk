<?php /* Smarty version Smarty-3.1.18, created on 2017-05-12 13:38:53
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/users/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1725042270591590bd528690-20633238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f59d92efb4b285a84acb89ca99542b966bec485' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/users/profile.tpl',
      1 => 1460043365,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '1725042270591590bd528690-20633238',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'item' => 0,
    'result' => 0,
    'this_controller' => 0,
    'referer' => 0,
    'conf_userfields' => 0,
    'fld' => 0,
    'errname' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_591590bd640af0_86342379',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591590bd640af0_86342379')) {function content_591590bd640af0_86342379($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
if (!is_callable('smarty_function_csrf')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.csrf.php';
?><?php echo smarty_function_addjs(array('file'=>"jquery.activetabs.js"),$_smarty_tpl);?>


<div align='center' class='mainProducts'>
<div align='center' class='fixProducts'>


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

<?php if ($_smarty_tpl->tpl_vars['result']->value) {?>
    <div class="formResult success"><?php echo $_smarty_tpl->tpl_vars['result']->value;?>
</div>
<?php }?>

<form method="POST">
    <?php echo smarty_function_csrf(array(),$_smarty_tpl);?>

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

                        <div class="help">Например: ООО Аудиторская фирма "Аудитор"</div>
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

                    <div class="help">Может состоять только из букв, знака тире. Например: Константинопольский</div>
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

                    <div class="help">Например +71234567890</div>
                </td>    
            </tr>    
            <tr>
                <td class="key">E-mail</td>
                <td class="value">
                    <?php echo $_smarty_tpl->tpl_vars['user']->value->getPropertyView('e_mail');?>

                    <div class="help">Например aaa@mail.ru</div>
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
            </tbody>
        </table>
        
        <div class="formSection">
            <span class="formSectionTitle">Пароль</span>
            <span class="inline ml10">
                <input type="checkbox" name="changepass" id="changepass" value="1" <?php if ($_smarty_tpl->tpl_vars['user']->value['changepass']) {?>checked<?php }?>>
                <label for="changepass">Сменить пароль</label>
            </span>
        </div>
        <div class="changePasswordFrame">
            <table class="formTable">
                <tr>
                    <td class="key">Текущий пароль:</td>
                    <td class="value">
                        <input type="password" name="current_pass" size="38" <?php if (count($_smarty_tpl->tpl_vars['user']->value->getErrorsByForm('pass'))) {?>class="has-error"<?php }?>>
                        <span class="formFieldError"><?php echo $_smarty_tpl->tpl_vars['user']->value->getErrorsByForm('pass',',');?>
</span>
                    </td>
                </tr>
                <tr>
                    <td class="key">Новый пароль:</td>
                    <td class="value">
                        <input type="password" name="openpass" size="38" <?php if (count($_smarty_tpl->tpl_vars['user']->value->getErrorsByForm('openpass'))) {?>class="has-error"<?php }?>>
                        <span class="formFieldError"><?php echo $_smarty_tpl->tpl_vars['user']->value->getErrorsByForm('openpass',',');?>
</span>
                    </td>
                </tr>                
                <tr>
                    <td class="key">Повтор нового пароля:</td>
                    <td class="value">
                        <input type="password" name="openpass_confirm" size="38">
                    </td>
                </tr>                                    
            </table>        
        </div>
    </div>

    <button type="submit" class="formSave">Сохранить</button>
</form>

<br><br><br>

</div>
</div>


<script>
$(function() {
    var changePassword = function() {
        $('.changePasswordFrame').toggle(this.checked);
    }
    changePassword.call( $('#changepass').change(changePassword).get(0) );
});
</script><?php }} ?>
