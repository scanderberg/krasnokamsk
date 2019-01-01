<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:52:33
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/menu/blocks/menu/hor_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3330974145788dc913337c2-56371245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72da3f2da5f223c588e7e129f9b43d4a99040d22' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/menu/blocks/menu/hor_menu.tpl',
      1 => 1459178619,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '3330974145788dc913337c2-56371245',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc913b51a6_06304656',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc913b51a6_06304656')) {function content_5788dc913b51a6_06304656($_smarty_tpl) {?><?php if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
?><?php if ($_smarty_tpl->tpl_vars['items']->value) {?>

        <?php echo $_smarty_tpl->getSubTemplate ("blocks/menu/branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('menu_level'=>$_smarty_tpl->tpl_vars['items']->value), 0);?>


<?php } else { ?>
    <?php ob_start();?><?php echo smarty_function_adminUrl(array('do'=>"add",'mod_controller'=>"menu-ctrl"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("theme:default/block_stub.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>"noBack blockSmall blockLeft blockMenu",'do'=>array($_tmp1=>t("Добавьте пункт меню"))), 0);?>

<?php }?><?php }} ?>
