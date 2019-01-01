<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 13:56:40
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/property_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155980552157bc2be8895db8-95442627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd91fc0f8d451888abb6f8eda97b51a5b464c05cf' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/property_form.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '155980552157bc2be8895db8-95442627',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Setup' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bc2be88e9974_70556989',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc2be88e9974_70556989')) {function content_57bc2be88e9974_70556989($_smarty_tpl) {?><div class="property-form" style="display:none">
    <table width="100%" class="property-table">
            <tr class="p-proplist-block">
                <td class="key">Выберите характеристику</td>
                <td><select class="p-proplist">
                        <option value="new">Новая характеристика</option>
                    </select>
                    <span class="ploading"><img src="<?php echo $_smarty_tpl->tpl_vars['Setup']->value['IMG_PATH'];?>
/adminstyle/small-loader.gif">идет загрузка...</span>
                    <br>
                    <span class="fieldhelp">Не рекомендуется создавать новую характеристику, если подобная уже имеется</span>
                </td>
            </tr>
            <tr class="p-group-block">
                <td class="key">Группа</td>
                <td><select class="p-parent_id">
                        <option value="0">Без группы</option>
                    </select><span class="makenew"> или создать новую </span><input type="text" class="p-new-group">
                    
                    <br>
                    <span class="fieldhelp">Тематическая группа характеристики</span>
                </td>
            </tr>        
            <tr class="p-title-block">
                <td class="key">Название</td>
                <td><input type="text" class="p-title"><div class="field-error top-corner" data-field="title"></div><br>
                    <span class="fieldhelp">Будет отражаться в описани товара. Например: "диаметр соеденительной втулки"</span>
                </td>
            </tr>
            <tr>
                <td class="key">Тип</td>
                <td><select class="p-type">
                    <option value="int">Число</option>
                    <option value="string">Строка</option>
                    <option value="list">Список</option>
                    <option value="bool">Да/Нет</option>
                </select></td>
            </tr>
            <tr>
                <td class="key">Единица измерения</td>
                <td><input type="text" class="p-unit" style="width:100px"><br>
                    <span class="fieldhelp">Будет отображаться после значения (до 50 знаков)</span>
                </td>
            </tr>        
            <tr class="p-values-block" style="display:none">
                <td class="key">Возможные значения</td>
                <td><textarea class="p-values"></textarea> <a class="apply underline"><span>применить</span></a><br>
                <span class="fieldhelp">Укажите через точку с запятой или с новой строки значения для списка<br>
                Например: "10 мм; 20 мм; 30 мм"</span>
                </td>
            </tr>                    
            <tr class="p-value-block">
                <td class="key">Значение</td>
                <td><span class="p-val-block"><input type="text" class="p-val"></span><br>
                    <span class="fieldhelp">Будет отображаться у товаров</span>
                </td>
            </tr>                            
            <tr>
                <td></td>
                <td>
                    <a class="add disabled">Добавить</a>
                    <a class="close">свернуть</a>                                    
                </td>
            </tr>
        </table>
</div>
<div class="some-property-form" style="display:none">
    <table width="100%" class="some-property-table">
        <tr>
            <td class="key">Выберите характеристики 
            <div class="fieldhelp">Удерживая CTRL можно выбрать несколько характеристик</div></td>
            <td><select class="some-props" size="20" style="width:300px; height:250px;" multiple="multiple" disabled="disabled">
                <option>Идет загрузка...</option>
            </select></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <a class="add-some disabled">Добавить</a>
                <a class="close">свернуть</a>
            </td>
        </tr>                        
    </table>
</div><?php }} ?>
