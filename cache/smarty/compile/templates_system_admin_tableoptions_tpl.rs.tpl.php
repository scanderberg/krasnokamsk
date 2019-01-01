<?php /* Smarty version Smarty-3.1.18, created on 2016-10-28 08:21:09
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/tableoptions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20208865815812e0450c70a9-36132289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee416a342599b5af01b11ffab7b685d2ac29896d' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/tableoptions.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '20208865815812e0450c70a9-36132289',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elements' => 0,
    'key' => 0,
    'column' => 0,
    'sortn' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5812e0451effd6_79182452',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5812e0451effd6_79182452')) {function content_5812e0451effd6_79182452($_smarty_tpl) {?>
<p class="caption-help">Выберите колонки, которые должны отображаться<br> в таблице, а также сортировку по-умолчанию</p>
<form class="crud-form">
    <table id="tableOptions" data-table-id="<?php echo $_smarty_tpl->tpl_vars['elements']->value['tableControl']->getId();?>
">
    <?php  $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['column']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['elements']->value['tableControl']->getTable()->getCustomizableColumns(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['column']->key => $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['column']->key;
?>
        <tr data-field="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
            <td class="chk<?php if (!$_smarty_tpl->tpl_vars['column']->value->property['hidden']) {?> checked<?php }?>"><input type="checkbox" class="column" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if (!$_smarty_tpl->tpl_vars['column']->value->property['hidden']) {?>checked<?php }?>></td>
            <td>
                <?php if ($_smarty_tpl->tpl_vars['column']->value->property['Sortable']) {?>            
                    <?php if (isset($_smarty_tpl->tpl_vars['column']->value->property['CurrentSort'])) {?>
                        <?php if ($_smarty_tpl->tpl_vars['column']->value->property['CurrentSort']==@constant('SORTABLE_ASC')) {?>
                            <?php $_smarty_tpl->tpl_vars['sortn'] = new Smarty_variable("asc", null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars['sortn'] = new Smarty_variable("desc", null, 0);?>
                        <?php }?>
                        <input type="hidden" class="current-sort-column" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                        <input type="hidden" class="current-sort-direction" value="<?php echo $_smarty_tpl->tpl_vars['column']->value->property['CurrentSort'];?>
">
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars['sortn'] = new Smarty_variable("no", null, 0);?>
                    <?php }?>
                    <a class="a-underline ch-sort <?php echo $_smarty_tpl->tpl_vars['sortn']->value;?>
" data-can-be="<?php echo $_smarty_tpl->tpl_vars['column']->value->property['Sortable'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['column']->value->getTitle();?>
</span></a>
                <?php } else { ?>
                    <span><?php echo $_smarty_tpl->tpl_vars['column']->value->getTitle();?>
</span>
                <?php }?>
            </td>
        </tr>
    <?php } ?>
    </table>
</form>

<script>
    $(function() {
        var $context = $('#tableOptions');
        $context.tableOptions();
        
        var cookie_options = {    
            expires: new Date((new Date()).valueOf() + 1000*3600*24*365*5)
        };
        var columns_key = $context.data('tableId')+'[columns]';
        var sort_key = $context.data('tableId')+'[sort]';
        
        //Сохраняем настройки
        $('.saveToCookie').click(function() {
            //Подготавливаем параметры
            var columns_value = new Array();
            $('.column', $context).each(function() {
                columns_value.push($(this).val()+'='+(this.checked ? 'Y' : 'N'));
            });
            $.cookie(columns_key, columns_value.join(','), cookie_options);
            
            $('.asc, .desc', $context).each(function() {
                var sort_direction = $(this).hasClass('asc') ? 'asc' : 'desc';
                var sort_field = $(this).closest('[data-field]').data('field');
                $.cookie(sort_key, sort_field+'='+sort_direction, cookie_options);
            });
            
            $context.closest('.dialog-window').dialog('close');
            updatable.updateTarget($context);
        });
        
        //Сбрасываем настройки
        $('.reset').click(function() {
            $.cookie(columns_key, null);
            $.cookie(sort_key, null);
            
            $($context).closest('.dialog-window').dialog('close');
            updatable.updateTarget(this);
            
        });        
    });
</script><?php }} ?>
