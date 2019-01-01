<?php /* Smarty version Smarty-3.1.18, created on 2018-04-07 08:25:58
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/form/config/userfield.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6800237025ac85666a89f50-12499363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2116a970595dd277309563a98930c3a16bb979e3' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/form/config/userfield.tpl',
      1 => 1460044871,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '6800237025ac85666a89f50-12499363',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ac85666adc863_44899867',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac85666adc863_44899867')) {function content_5ac85666adc863_44899867($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['elem']->value->getUserFieldsManager()->getAdminForm(t('Будут запрошены при оформлении заказа'));?>
<?php }} ?>
