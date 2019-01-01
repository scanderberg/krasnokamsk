<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 19:44:25
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/checkout/address.tpl" */ ?>
<?php /*%%SmartyHeaderCode:220834078578912e9867733-23964427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b2f98cca975e85f9216132d2a8b3cb8bc9bd86d' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/checkout/address.tpl',
      1 => 1462802667,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '220834078578912e9867733-23964427',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order' => 0,
    'errors' => 0,
    'item' => 0,
    'is_auth' => 0,
    'user' => 0,
    'reg_userfields' => 0,
    'fld' => 0,
    'errname' => 0,
    'error' => 0,
    'address_list' => 0,
    'address' => 0,
    'router' => 0,
    'region_tools_url' => 0,
    'regcount' => 0,
    'conf_userfields' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_578912e9a497e7_66353289',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578912e9a497e7_66353289')) {function content_578912e9a497e7_66353289($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
if (!is_callable('smarty_function_urlmake')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.urlmake.php';
?><?php echo smarty_function_addjs(array('file'=>"order.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['errors'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getNonFormErrors(), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
    <div class="pageError">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <p><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</p>
        <?php } ?>
    </div>
<?php }?>

<form method="POST" id="order-form">
    <?php if ($_smarty_tpl->tpl_vars['is_auth']->value) {?>
    <div class="formSection">
        <span class="formSectionTitle">Покупатель</span>
        <a href="<?php echo smarty_function_urlmake(array('logout'=>true),$_smarty_tpl);?>
" class="ml10">сменить пользователя (Выход)</a>
    </div>    
    
    <table class="formTable">
        <?php if ($_smarty_tpl->tpl_vars['user']->value['is_company']) {?>
        <tbody>
            <tr>
                <td class="key">Название организации<span style="color: red!important;">*</span>:</td>
                <td class="value">
                    <?php echo $_smarty_tpl->tpl_vars['user']->value['company'];?>

                </td>
            </tr>
            <tr>
                <td class="key">ИНН<span style="color: red!important;">*</span>:</td>
                <td class="value">
                    <?php echo $_smarty_tpl->tpl_vars['user']->value['company_inn'];?>

                </td>
            </tr>                
        </tbody>
        <?php }?>
        <tbody>
            <tr>
                <td class="key">Имя<span style="color: red!important;">*</span>:</td>
                <td class="value">
                    <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>

                </td>
            </tr>
            <tr>
                <td class="key">Фамилия<span style="color: red!important;">*</span>:</td>
                <td class="value">
                    <?php echo $_smarty_tpl->tpl_vars['user']->value['surname'];?>

                </td>
            </tr>
            <tr>
                <td class="key">Отчество<span style="color: red!important;">*</span>:</td>
                <td class="value">
                    <?php echo $_smarty_tpl->tpl_vars['user']->value['midname'];?>

                </td>
            </tr>                    
            <tr>
                <td class="key">Телефон<span style="color: red!important;">*</span>:</td>
                <td class="value">
                    <?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>

                </td>
            </tr>                    
            <tr>
                <td class="key">E-mail<span style="color: red!important;">*</span>:</td>
                <td class="value">
                    <?php echo $_smarty_tpl->tpl_vars['user']->value['e_mail'];?>

                </td>
            </tr>
        </tbody>
    </table>
    <?php } else { ?>
    <input type="hidden" name="user_type" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['user_type'];?>
">
    <div class="userProfile activeTabs" data-input-name="user_type">
        <div class="formSection">
            <span class="sectionListBlock">
                <ul class="lineList tabList">
                    <li><a class="item <?php if ($_smarty_tpl->tpl_vars['order']->value['user_type']=='person') {?> act<?php }?>" data-tab="#user-tab1" data-input-val="person" href="JavaScript:;">Частное лицо</a></li>
                    <li><a class="item<?php if ($_smarty_tpl->tpl_vars['order']->value['user_type']=='company') {?> act<?php }?>" data-tab="#user-tab1" data-class="thiscompany" data-input-val="company" href="JavaScript:;">Компания</a></li>
                    <li><a class="item<?php if ($_smarty_tpl->tpl_vars['order']->value['user_type']=='noregister') {?> act<?php }?>" data-tab="#user-tab2" data-input-val="noregister" href="JavaScript:;">Без регистрации</a></li>
                    <li><a class="item<?php if ($_smarty_tpl->tpl_vars['order']->value['user_type']=='user') {?> act<?php }?>" data-tab="#user-tab3" data-input-val="user" href="JavaScript:;">Я регистрировался ранее</a></li>
                </ul>
            </span>
        </div>
    
        <div class="tabFrame <?php if ($_smarty_tpl->tpl_vars['order']->value['user_type']=='user'||$_smarty_tpl->tpl_vars['order']->value['user_type']=='noregister') {?> hidden<?php }?><?php if ($_smarty_tpl->tpl_vars['order']->value['user_type']=='company') {?> thiscompany<?php }?>" id="user-tab1">
            <table class="formTable">
                <tbody class="organization">
                <tr>
                    <td class="key">Название организации<span style="color: red!important;">*</span>:</td>
                    <td class="value">
                        <?php echo $_smarty_tpl->tpl_vars['order']->value->getPropertyView('reg_company');?>

                        <div class="help">Например: ООО Аудиторская фирма "Аудитор"</div>
                    </td>
                </tr>
                <tr>
                    <td class="key">ИНН<span style="color: red!important;">*</span>:</td>
                    <td class="value">
                        <?php echo $_smarty_tpl->tpl_vars['order']->value->getPropertyView('reg_company_inn');?>

                        <div class="help">10 или 12 цифр</div>
                    </td>
                </tr>                
                </tbody>            
                <tbody>
                <tr>
                    <td class="key">Имя<span style="color: red!important;">*</span>:</td>
                    <td class="value">
                        <?php echo $_smarty_tpl->tpl_vars['order']->value->getPropertyView('reg_name');?>

                        <div class="help">Имя покупателя, владельца аккаунта</div>
                    </td>
                </tr>
                <tr>
                    <td class="key">Фамилия<span style="color: red!important;">*</span>:</td>
                    <td class="value">
                        <?php echo $_smarty_tpl->tpl_vars['order']->value->getPropertyView('reg_surname');?>

                        <div class="help">Фамилия покупателя, владельца аккаунта</div>
                    </td>
                </tr>                    
                <tr>
                    <td class="key">Отчество:</td>
                    <td class="value">
                        <?php echo $_smarty_tpl->tpl_vars['order']->value->getPropertyView('reg_midname');?>

                    </td>
                </tr>                    
                <tr>
                    <td class="key">Телефон<span style="color: red!important;">*</span>:</td>
                    <td class="value">
                        <?php echo $_smarty_tpl->tpl_vars['order']->value->getPropertyView('reg_phone');?>

                        <div class="help">В формате: +7(123)9876543</div>
                    </td>
                </tr>                    
                <tr>
                    <td class="key">E-mail<span style="color: red!important;">*</span>:</td>
                    <td class="value">
                        <?php echo $_smarty_tpl->tpl_vars['order']->value->getPropertyView('reg_e_mail');?>

                    </td>
                </tr>
                <tr>
                    <td class="key">Пароль:</td>
                    <td class="value">
                        <input type="checkbox" name="reg_autologin" <?php if ($_smarty_tpl->tpl_vars['order']->value['reg_autologin']) {?>checked<?php }?> value="1" id="reg-autologin">
                        <label for="reg-autologin">Получить автоматически на e-mail</label>
                        <div class="help">Нужен для проверки статуса заказа, обращения в поддержку, входа в кабинет</div>
                        <div id="manual-login" <?php if ($_smarty_tpl->tpl_vars['order']->value['reg_autologin']) {?>style="display:none"<?php }?>>
                            <div class="inline f">
                                <?php echo $_smarty_tpl->tpl_vars['order']->value['__reg_openpass']->formView(array('form'));?>

                                <div class="help">Пароль</div>
                            </div>
                            <div class="inline">
                                <?php echo $_smarty_tpl->tpl_vars['order']->value['__reg_pass2']->formView();?>

                                <div class="help">Повтор пароля</div>
                            </div>
                            <div class="inline">
                                <div class="form-error"><?php echo $_smarty_tpl->tpl_vars['order']->value->getErrorsByForm('reg_openpass',', ');?>
</div>
                            </div>
                        </div>
						
                    </td>
                </tr>
				
                <?php  $_smarty_tpl->tpl_vars['fld'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fld']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reg_userfields']->value->getStructure(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fld']->key => $_smarty_tpl->tpl_vars['fld']->value) {
$_smarty_tpl->tpl_vars['fld']->_loop = true;
?>
                <tr>
                    <td class="key"><?php echo $_smarty_tpl->tpl_vars['fld']->value['title'];?>
</td>
                    <td class="value">
                        <?php echo $_smarty_tpl->tpl_vars['reg_userfields']->value->getForm($_smarty_tpl->tpl_vars['fld']->value['alias']);?>

                        <?php $_smarty_tpl->tpl_vars['errname'] = new Smarty_variable($_smarty_tpl->tpl_vars['reg_userfields']->value->getErrorForm($_smarty_tpl->tpl_vars['fld']->value['alias']), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['error'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getErrorsByForm($_smarty_tpl->tpl_vars['errname']->value,', '), null, 0);?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                            <span class="form-error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
                        <?php }?>                        
                    </td>
					
                </tr>
                <?php } ?>                

				
                </tbody>
            </table>
            </div>
            <div class="tabFrame<?php if ($_smarty_tpl->tpl_vars['order']->value['user_type']!='noregister') {?> hidden<?php }?>" id="user-tab2">
                    <table class="formTable">
                        <tbody>
                        <tr>
                            <td class="key">Ф.И.О.<span style="color: red!important;">*</span>:</td>
                            <td class="value">
                                <?php echo $_smarty_tpl->tpl_vars['order']->value->getPropertyView('user_fio');?>

                                <div class="help">Фамилия, Имя и Отчество покупателя</div>
                            </td>
                        </tr>    
                        <tr>
                            <td class="key">E-mail<span style="color: red!important;">*</span>:</td>
                            <td class="value">
                                <?php echo $_smarty_tpl->tpl_vars['order']->value->getPropertyView('user_email');?>

                                <div class="help">E-mail покупателя</div>
                            </td>
                        </tr>  
                        <tr>
                            <td class="key">Телефон<span style="color: red!important;">*</span>:</td>
                            <td class="value">
                                <?php echo $_smarty_tpl->tpl_vars['order']->value->getPropertyView('user_phone');?>

                                <div class="help">В формате: +7(123)9876543</div>
                            </td>
                        </tr>                    
                    </table>
            </div>
            <div class="tabFrame<?php if ($_smarty_tpl->tpl_vars['order']->value['user_type']!='user') {?> hidden<?php }?>" id="user-tab3">
                    <table class="formTable">
                        <tbody>
                        <tr>
                            <td class="key">Логин<span style="color: red!important;">*</span>:</td>
                            <td class="value">
                                <?php echo $_smarty_tpl->tpl_vars['order']->value->getPropertyView('login');?>

                            </td>
                        </tr>    
                        <tr>
                            <td class="key">Пароль<span style="color: red!important;">*</span>:</td>
                            <td class="value">
                                <?php echo $_smarty_tpl->tpl_vars['order']->value->getPropertyView('password');?>

                                <a href="?ologin=1" id="order_login">Вход</a>
                            </td>
                        </tr>                    
                    </table>
            </div>
       </div>
	   
       <?php }?>
       
	   
       <div class="formSection">
            <span class="formSectionTitle">Регион, город (обсуждается с менеджером после заказа)</span>
       </div>
       
       <?php if (count($_smarty_tpl->tpl_vars['address_list']->value)>0) {?>
            <div class="existsAddress">
                Использовать следующий адрес:
                <table id="address-list">
                    <?php  $_smarty_tpl->tpl_vars['address'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['address']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['address_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['address']->key => $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->_loop = true;
?>
                    <tr>
                        <td><input type="radio" name="use_addr" value="<?php echo $_smarty_tpl->tpl_vars['address']->value['id'];?>
" id="adr_<?php echo $_smarty_tpl->tpl_vars['address']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['order']->value['use_addr']==$_smarty_tpl->tpl_vars['address']->value['id']) {?>checked<?php }?>></td>
                        <td>
                            <label for="adr_<?php echo $_smarty_tpl->tpl_vars['address']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['address']->value->getLineView();?>
</label>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('shop-front-checkout',array('Act'=>'deleteAddress','id'=>$_smarty_tpl->tpl_vars['address']->value['id']));?>
" class="deleteAddress"/></a>
                        </td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td><input type="radio" name="use_addr" value="0" id="use_addr_new" <?php if ($_smarty_tpl->tpl_vars['order']->value['use_addr']==0) {?>checked<?php }?>></td>
                        <td><label for="use_addr_new">Другой адрес</label></td>
                    </tr>                
                </table>
            </div>
        <?php } else { ?>
            <input type="hidden" name="use_addr" value="0">
        <?php }?>
        <table class="formTable">
            <tbody class="new-address">
                <tr>
                    <td class="key">Страна<span style="color: red!important;">*</span>:</td>
                    <td class="value">
                        <?php $_smarty_tpl->tpl_vars['region_tools_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['router']->value->getUrl('shop-front-regiontools',array("Act"=>'listByParent')), null, 0);?>
                        <?php echo $_smarty_tpl->tpl_vars['order']->value->getPropertyView('addr_country_id',array('data-region-url'=>$_smarty_tpl->tpl_vars['region_tools_url']->value));?>

                        <div class="help">Например: Россия</div>
                    </td>
                </tr>
                <tr>
                    <td class="key">Область, Город<span style="color: red!important;">*</span>:</td>
                    <td class="value">
                        <div class="inline f">
                            <?php $_smarty_tpl->tpl_vars['regcount'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->regionList(), null, 0);?>
                            <span <?php if (count($_smarty_tpl->tpl_vars['regcount']->value)==0) {?>style="display:none"<?php }?> id="region-select">
                                <?php echo $_smarty_tpl->tpl_vars['order']->value['__addr_region_id']->formView();?>

                            </span>
                            
                            <span <?php if (count($_smarty_tpl->tpl_vars['regcount']->value)>0) {?>style="display:none"<?php }?> id="region-input">
                                <?php echo $_smarty_tpl->tpl_vars['order']->value['__addr_region']->formView();?>

                            </span>
                            <div class="help">Область/Край</div>
                        </div>
                        <div class="inline">
                            <?php echo $_smarty_tpl->tpl_vars['order']->value->getPropertyView('addr_city');?>

                            <div class="help">Город</div>
                        </div>
                    </td>
                </tr>                    
                <tr style="display: none!important;">
                    <td class="key">Индекс, Адрес:</td>
                    <td class="value">
                        <div class="inline f">
<input name="addr_zipcode" value="&nbsp;&nbsp;" maxlength="20"  size="10" type="text" />
<div class="field-error top-corner" data-field="addr_zipcode"></div>
                            <div class="help">Индекс</div>
                        </div>
                        <div class="inline">
<input name="addr_address" value="&nbsp;&nbsp;" maxlength="255"  size="64" type="text" />
                            <div class="help">Адрес. Например: ул. Красная, 100, офис 71</div>
                        </div>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td class="key">Контактное лицо:</td>
                    <td class="value">
                        <?php echo $_smarty_tpl->tpl_vars['order']->value->getPropertyView('contact_person');?>

                        <div class="help">Лицо, которое встретит доставку. Например: Иван Иванович Пуговкин</div>
                    </td>
                </tr>
                <?php if ($_smarty_tpl->tpl_vars['order']->value['__code']->isEnabled()) {?>
                    <tr>
                        <td class="key">Защитный код<span style="color: red!important;">*</span>:</td>
                        <td class="value">
                            <?php echo $_smarty_tpl->tpl_vars['order']->value->getPropertyView('code');?>

                            <div class="help">Необходим для защиты от спам роботов</div>
                        </td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
        
    <?php if ($_smarty_tpl->tpl_vars['conf_userfields']->value->notEmpty()) {?>
        <br>
        <div class="formSection">
            <span class="formSectionTitle">дополнительные сведения</span>
        </div>
        <table class="formTable">
            <tbody>
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
                    <?php $_smarty_tpl->tpl_vars['error'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getErrorsByForm($_smarty_tpl->tpl_vars['errname']->value,', '), null, 0);?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                        <span class="form-error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
                    <?php }?>                        
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>        
    <?php }?>

		 
    <button type="submit" class="formSave">Далее</button>
	<br>
	<div align="center">
    <span style="color: red!important;">* - Обязательные поля для заполнения!</span>
    </div> 
	
</form>
<br><br><br><?php }} ?>
