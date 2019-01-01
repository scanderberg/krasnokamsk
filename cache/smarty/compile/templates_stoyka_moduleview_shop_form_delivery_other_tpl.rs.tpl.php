<?php /* Smarty version Smarty-3.1.18, created on 2018-04-03 14:58:45
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/form/delivery/other.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17258257745ac36c75593066-30452422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cea30205fb501b80a886f30035cc16c14e568125' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/form/delivery/other.tpl',
      1 => 1460044871,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '17258257745ac36c75593066-30452422',
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
  'unifunc' => 'content_5ac36c75683f41_16446142',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac36c75683f41_16446142')) {function content_5ac36c75683f41_16446142($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__class']->getOriginalTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__class']), 0);?>

<script type="text/javascript">
    $(function() { 
        var updateTypeForm = function() {
            var type = $('select[name="class"]').val();
            $.ajaxQuery({
                url: '<?php echo $_smarty_tpl->tpl_vars['router']->value->getAdminUrl("getDeliveryTypeForm");?>
',
                data: { type: type },
                success: function(response) {
                    $('#delivery-type-form').html(response.html);
                }
            })
        }
        $('select[name="class"]').change(function() {
            updateTypeForm();
        });
    });
</script>
</td></tr>
<tbody id="delivery-type-form">
    <?php if (!isset($_smarty_tpl->tpl_vars['type_object'])) $_smarty_tpl->tpl_vars['type_object'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['type_object']->value = $_smarty_tpl->tpl_vars['elem']->value->getTypeObject()) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("%shop%/form/delivery/type_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>
</tbody>
<tr><td><?php }} ?>
