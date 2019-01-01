<?php /* Smarty version Smarty-3.1.18, created on 2018-04-06 05:03:57
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/property/values.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19356066125ac6d58d4f2a95-59492022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '746a32aacc562b5e84ccd29ab347d0956265e6f3' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/property/values.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '19356066125ac6d58d4f2a95-59492022',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ac6d58d55bb66_10454630',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac6d58d55bb66_10454630')) {function content_5ac6d58d55bb66_10454630($_smarty_tpl) {?><?php if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
?><div id="values_row" <?php if ($_smarty_tpl->tpl_vars['elem']->value['type']!='list') {?>style="display:none"<?php }?>>
    <?php echo $_smarty_tpl->tpl_vars['elem']->value['__values']->getTitle();?>
<br>
    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__values']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__values']), 0);?>

    <br>
    <a data-href="<?php echo smarty_function_adminUrl(array('do'=>'ajaxGetValues','property_id'=>$_smarty_tpl->tpl_vars['elem']->value['id']),$_smarty_tpl);?>
" class="uline getValues">Получить значения у товаров</a>
</div>

<script>
$(function() {
    $('select[name="type"]').change(function() {
        var type = $(this).val();
        $('#values_row').toggle(type == 'list');
    }).change();
    
    $('#values_row .getValues').click(function() {
        $.ajaxQuery({
            url: $(this).data('href'),
            success: function(response) {
                $('#values_row [name="values"]').text(response.values);
            }
        });
    });
});
</script><?php }} ?>
