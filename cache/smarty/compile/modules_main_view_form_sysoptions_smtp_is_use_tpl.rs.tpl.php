<?php /* Smarty version Smarty-3.1.18, created on 2016-12-06 10:08:38
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/main/view/form/sysoptions/smtp_is_use.tpl" */ ?>
<?php /*%%SmartyHeaderCode:895509447584663f6c65c39-06887566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26869520c841c8cd50689e6a444aa0882a3a0d57' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/main/view/form/sysoptions/smtp_is_use.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '895509447584663f6c65c39-06887566',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_584663f6cf9c63_89056749',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584663f6cf9c63_89056749')) {function content_584663f6cf9c63_89056749($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__smtp_is_use']->getOriginalTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__smtp_is_use']), 0);?>

<script>
    $(function() {       
        $('[name="smtp_is_use"]').change(function() {
            var enable = $(this).is(':checked');
            $('[name="smtp_host"], [name="smtp_port"], [name="smtp_secure"], [name="smtp_auth"], [name="smtp_username"], [name="smtp_password"]').each(function() {
                $(this).closest('tr').toggle(enable);
            });
        }).change();
        
        $('[name="smtp_auth"]').change(function() {
            var enable = $(this).is(':checked');
            $('[name="smtp_username"], [name="smtp_password"]').prop('disabled', !enable);
        }).change();
    });
</script><?php }} ?>
