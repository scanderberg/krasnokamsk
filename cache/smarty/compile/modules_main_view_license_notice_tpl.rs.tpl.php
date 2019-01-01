<?php /* Smarty version Smarty-3.1.18, created on 2017-03-15 09:36:53
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/main/view/license_notice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162413554958c8e1051238c5-13621932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e28325b97ca4ad13c99434593f26c3f376c0b8e' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/main/view/license_notice.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '162413554958c8e1051238c5-13621932',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Setup' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58c8e1051cbf88_82168003',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c8e1051cbf88_82168003')) {function content_58c8e1051cbf88_82168003($_smarty_tpl) {?><?php if (@constant('SCRIPT_TRIAL_STATUS')!='DISABLED'||@constant('SCRIPT_TRIAL_STATUS')=='OVERDUE'||@constant('SITE_LIMIT_ERROR')||@constant('SCRIPT_TYPE_ERROR')) {?>
<div class="notice-box no-padd" style="margin-top:10px;">
    <?php if (@constant('SCRIPT_TRIAL_STATUS')!='DISABLED') {?>
    <div class="notice-bg">
        ReadyScript работает в <strong>пробном режиме</strong>. Весь функционал доступен в полном объеме. 
        После окончания пробного периода сайты прекратят свою работу. 
        Исключение составляют сайты, расположенные на доменных именах для разработки - .local и .test, 
        их работа будет продолжена после окончания пробного периода.
    </div>
    <?php }?>
    <div class="notice-errors">
        <?php if (@constant('SCRIPT_TRIAL_STATUS')=='OVERDUE') {?><p>Пробный период истек, необходимо добавить лицензию.</p><?php }?>
        <?php if (@constant('SITE_LIMIT_ERROR')) {?><p>Превышено число сайтов, разрешенных в лицензии</p><?php }?>
        <?php if (@constant('SCRIPT_TYPE_ERROR')) {?><p>Комплектация продукта не соответствует лицензии</p><?php }?>
    </div>
</div>
<?php }?>

<div class="notice-box no-padd" style="margin-top:10px">
    <div class="notice-bg">
        Текущая комплектация системы: <strong><?php echo $_smarty_tpl->tpl_vars['Setup']->value['SCRIPT_TYPE'];?>
</strong>. Версия ядра: <strong><?php echo $_smarty_tpl->tpl_vars['Setup']->value['VERSION'];?>
</strong>
    </div>
</div><?php }} ?>
