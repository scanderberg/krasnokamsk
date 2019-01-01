<?php /* Smarty version Smarty-3.1.18, created on 2017-03-17 13:38:06
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/main/view/form/config/dadata_token.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58887964058cbbc8ea7a435-30493083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb9a392c4698c3e1f06adaeb52c48df9493e8e61' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/main/view/form/config/dadata_token.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '58887964058cbbc8ea7a435-30493083',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58cbbc8ea96252_99789733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58cbbc8ea96252_99789733')) {function content_58cbbc8ea96252_99789733($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__dadata_token']->getOriginalTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__dadata_token']), 0);?>

<script>
    $(function() {
        var token_tr = $('input[name="dadata_token"]').closest('tr');
        $('select[name="geo_ip_service"]').change(function() {
            token_tr.toggle( $(this).val() == 'dadata' );
        }).change();
    });
</script><?php }} ?>
