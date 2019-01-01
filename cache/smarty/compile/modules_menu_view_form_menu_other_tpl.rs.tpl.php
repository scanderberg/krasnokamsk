<?php /* Smarty version Smarty-3.1.18, created on 2018-04-03 14:43:43
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/menu/view/form/menu/other.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1844450465ac368efc27053-69086113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d69ae7e0391ab7b9e8e42e9445dd1b0cb62eecd' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/menu/view/form/menu/other.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '1844450465ac368efc27053-69086113',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
    'router' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ac368efc47b71_60073370',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac368efc47b71_60073370')) {function content_5ac368efc47b71_60073370($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__typelink']->getOriginalTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__typelink']), 0);?>

<script type="text/javascript">
    $(function() { 
        var updateTypeForm = function() {
            var type = $('select[name="typelink"]').val();
            $.ajaxQuery({
                url: '<?php echo $_smarty_tpl->tpl_vars['router']->value->getAdminUrl("getMenuTypeForm");?>
',
                data: { type: type },
                success: function(response) {
                    try {
                        $('#menu-type-form .tinymce').tinymce().remove();
                    } catch(e) {}
                    $('#menu-type-form').html(response.html);
                }
            })
        }
        $('select[name="typelink"]').change(function() {
            updateTypeForm();
        });
    });
</script>
</td></tr>
<tbody id="menu-type-form">
    <?php if (!isset($_smarty_tpl->tpl_vars['type_object'])) $_smarty_tpl->tpl_vars['type_object'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['type_object']->value = $_smarty_tpl->tpl_vars['elem']->value->getTypeObject()) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("%menu%/form/menu/type_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>
</tbody>
<tr><td><?php }} ?>
