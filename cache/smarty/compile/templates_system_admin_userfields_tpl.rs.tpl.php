<?php /* Smarty version Smarty-3.1.18, created on 2018-04-03 15:13:01
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/userfields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19653877245ac36fcd965141-73077218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a5c5433f1635f66ed1d29f266649fefbffdf57d' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/userfields.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '19653877245ac36fcd965141-73077218',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manager' => 0,
    'before_phrase' => 0,
    'item' => 0,
    'key' => 0,
    'type_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ac36fcd9ef5a7_08350050',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac36fcd9ef5a7_08350050')) {function content_5ac36fcd9ef5a7_08350050($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><?php echo smarty_function_addjs(array('file'=>"jquery.tablednd.js",'basepath'=>"common"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"table.js",'basepath'=>"common"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"tmpl.min.js",'basepath'=>"common"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"jquery.userfields.js",'basepath'=>"common"),$_smarty_tpl);?>

<div class="userfields-container" data-key="<?php echo $_smarty_tpl->tpl_vars['manager']->value->getField();?>
">
    <?php if ($_smarty_tpl->tpl_vars['before_phrase']->value) {?>
        <div class="c-help"><?php echo $_smarty_tpl->tpl_vars['before_phrase']->value;?>
</div>
    <?php }?>
    <?php $_smarty_tpl->tpl_vars['key'] = new Smarty_variable($_smarty_tpl->tpl_vars['manager']->value->getField(), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['type_list'] = new Smarty_variable(array('string'=>'Строка','list'=>'Список','bool'=>'Да/Нет'), null, 0);?>
    <table class="rs-table">
        <thead>
            <tr>
                <th style="width:26px"><div class="chkhead-block">
                        <input type="checkbox" data-name="chk[]" class="chk_head select-page" alt="">
                    </div>
                </th>
                <th width="20"></th>
                <th><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Название<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
                <th><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Тип<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
                <th><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Макс. кол-во символов<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
                <th><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Обязательное<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
                <th><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Значение по умолчанию<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
                <th></th>
            </tr>
        </thead>
        <tbody class="property-container">
            <tr class="empty no-over">
                <td colspan="8"></td>
            </tr>    
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['manager']->value->getStructure(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <tr class="property-item">
                <td class="chk">
                    <input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['alias'];?>
" name="chk[]">
                    <input value="<?php echo $_smarty_tpl->tpl_vars['item']->value['alias'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['item']->value['alias'];?>
][alias]" class="h-alias" type="hidden">
                    <input value="<?php echo $_smarty_tpl->tpl_vars['item']->value['maxlength'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['item']->value['alias'];?>
][maxlength]" class="h-maxlength" type="hidden">
                    <input value="<?php echo $_smarty_tpl->tpl_vars['item']->value['necessary'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['item']->value['alias'];?>
][necessary]" class="h-necessary" type="hidden">
                    <input value="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['item']->value['alias'];?>
][title]" class="h-title" type="hidden">
                    <input value="<?php echo $_smarty_tpl->tpl_vars['item']->value['type'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['item']->value['alias'];?>
][type]" class="h-type" type="hidden">
                    <input value="<?php echo $_smarty_tpl->tpl_vars['item']->value['values'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['item']->value['alias'];?>
][values]" class="h-values" type="hidden">
                    <input value="<?php echo $_smarty_tpl->tpl_vars['item']->value['val'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['item']->value['alias'];?>
][val]" class="h-val" type="hidden">
                </td>
                <td class="dh p-drag-handle">
                    <a data-sortid="165" class="sort p-dndsort"></a>
                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['type_list']->value[$_smarty_tpl->tpl_vars['item']->value['type']];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['maxlength'];?>
</td>
                <td><?php if (!empty($_smarty_tpl->tpl_vars['item']->value['necessary'])) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Да<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php } else { ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Нет<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?></td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['val'];?>
</td>
                <td>
                    <div class="tools">
                        <a class="tool edit"></a>
                    </div>
                </td>
            </tr>
            <?php } ?>        
        </tbody>
        <tbody>
            <tr class="norecord" <?php if ($_smarty_tpl->tpl_vars['manager']->value->getStructure()) {?>style="display:none"<?php }?>>
                <td align="center" colspan="8"> Нет элементов</td>
            </tr>        
        </tbody>
    </table>

    <div class="rs-under-tools">
        <a class="item add"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Добавить поле<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
        <a class="item del"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Удалить<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
    </div>
    
    
    <div id="userfield-dialog" style="display:none">
        <table width="99%" class="property-table">
            <tr>
                <td colspan="2" class="p-result"></td>
            </tr>
            <tr class="p-proplist-block">
                <td class="key">Идентификатор
                <span class="help">допустимы только английские буквы, символ "подчеркивание"<br>
                Например: "years"
                </span>
                </td>
                <td><input type="text" class="p-alias"></td>
            </tr>
            <tr>
                <td width="220" class="key">Название поля
                <span class="help">Например: "возраст"</span>
                </td>
                <td><input type="text" class="p-title"></td>
            </tr>
            <tr>
                <td class="key">Тип</td>
                <td><select name="p-type" class="p-type">
                    <option value="string">Строка</option>
                    <option value="list">Список</option>
                    <option value="bool">Да/Нет</option>
                </select></td>
            </tr>
            <tr class="p-values-block" style="display:none">
                <td class="key">Возможные значения
                <span class="help">Укажите через запятую значения для списка<br>
                Например: "10 лет, 20 лет, 30 лет"
                </span>
                </td>
                <td><input type="text" class="p-values"></td>
            </tr>            
            <tr>
                <td class="key">Значение по умолчанию
                <span class="help">
                Будет присвоено товарам по умолчанию
                </span>
                </td>
                <td><input type="text" class="p-val"></td>
            </tr>        
            <tr>
                <td width="220" class="key">Максимальное число символов
                <span class="help">Например: "255"</span>
                </td>
                <td><input type="text" class="p-maxlength"></td>
            </tr>
            <tr>
                <td width="220" class="key">Обязательное
                </td>
                <td><input type="checkbox" class="p-necessary" value="1"></td>
            </tr>                        
        </table>
    </div>
    
        
    <script type="text/x-tmpl" id="userfield-line">
        <tr class="property-item">
            <td class="chk">
                <input type="checkbox" value="{%=o.alias%}" name="chk[]">
                <input value="{%=o.alias%}" name="{%=o.key%}[{%=o.alias%}][alias]" class="h-alias" type="hidden">
                <input value="{%=o.maxlength%}" name="{%=o.key%}[{%=o.alias%}][maxlength]" class="h-maxlength" type="hidden">
                <input value="{%=o.necessary%}" name="{%=o.key%}[{%=o.alias%}][necessary]" class="h-necessary" type="hidden" {% if (o.necessary){ %}checked{% } %}>
                <input value="{%=o.title%}" name="{%=o.key%}[{%=o.alias%}][title]" class="h-title" type="hidden">
                <input value="{%=o.type%}" name="{%=o.key%}[{%=o.alias%}][type]" class="h-type" type="hidden">
                <input value="{%=o.values%}" name="{%=o.key%}[{%=o.alias%}][values]" class="h-values" type="hidden">
                <input value="{%=o.val%}" name="{%=o.key%}[{%=o.alias%}][val]" class="h-val" type="hidden">
            </td>
            <td class="drag-handle">
                <a data-sortid="{%=o.alias%}" class="sort dndsort"></a>
            </td>
            <td>
                {%=o.title%}
            </td>
            <td>{%=o.type_str%}</td>
            <td>{%=o.maxlength%}</td>
            <td>{%=o.necessary_str%}</td>
            <td>{%=o.val_str%}</td>
            <td>
                <div class="tools">
                    <a class="tool edit"></a>
                </div>
            </td>
        </tr>    
    </script>
    
</div><?php }} ?>
