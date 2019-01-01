<?php /* Smarty version Smarty-3.1.18, created on 2016-07-16 18:10:11
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/menu/blocks/menu/left_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:528185370578a4e536bc618-18929770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2125924a7db584847a1bade57b4ec6536bddf26d' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/menu/blocks/menu/left_menu.tpl',
      1 => 1459951624,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '528185370578a4e536bc618-18929770',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_578a4e53779d37_31618908',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578a4e53779d37_31618908')) {function content_578a4e53779d37_31618908($_smarty_tpl) {?><?php if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
?><?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
<div class="topLeft" style="widht: 200px!important">
        <?php echo $_smarty_tpl->getSubTemplate ("blocks/menu/punkt.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('menu_level'=>$_smarty_tpl->tpl_vars['items']->value), 0);?>

</div>
<?php } else { ?>
    <?php ob_start();?><?php echo smarty_function_adminUrl(array('do'=>"add",'mod_controller'=>"menu-ctrl"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("theme:default/block_stub.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>"noBack blockSmall blockLeft blockMenu",'do'=>array($_tmp1=>t("Добавьте пункт меню"))), 0);?>

<?php }?><?php }} ?>
