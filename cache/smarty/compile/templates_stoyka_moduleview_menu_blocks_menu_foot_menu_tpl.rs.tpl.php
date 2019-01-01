<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:52:33
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/menu/blocks/menu/foot_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9790427915788dc91a95ea5-73591057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f49a70524d8cf758abf6309d0d00f5fe3d0ca457' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/menu/blocks/menu/foot_menu.tpl',
      1 => 1459176271,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '9790427915788dc91a95ea5-73591057',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
    'this_controller' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc91b44b19_25033689',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc91b44b19_25033689')) {function content_5788dc91b44b19_25033689($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['items']->value) {?>

<br><br>

<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<span><?php if ($_smarty_tpl->tpl_vars['item']->value['fields']['typelink']!='separator') {?><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['fields']->getHref();?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['fields']['target_blank']) {?>target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['fields']['title'];?>
</a><?php } else { ?>&nbsp;<?php }?><span>
<br><br>
    <?php } ?>

<?php } else { ?>
    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['this_controller']->value->getSettingUrl();?>
<?php $_tmp5=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("theme:default/block_stub.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>"noBack blockSmall blockLeft blockLogo",'do'=>array($_tmp5=>t("Настройте блок"))), 0);?>

<?php }?><?php }} ?>
