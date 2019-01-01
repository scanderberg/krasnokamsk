<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 16:27:23
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/catalog/blocks/category/category_left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11687489205788e4bb0575d6-31501245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e15d6a40f775c90518b04601fc03f360fdabac5b' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/catalog/blocks/category/category_left.tpl',
      1 => 1459531147,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '11687489205788e4bb0575d6-31501245',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dirlist' => 0,
    'dir' => 0,
    'pathids' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788e4bb104ed4_46868075',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788e4bb104ed4_46868075')) {function content_5788e4bb104ed4_46868075($_smarty_tpl) {?><?php if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
?>
<?php if ($_smarty_tpl->tpl_vars['dirlist']->value) {?>
<div class='leftCategory'>
<?php  $_smarty_tpl->tpl_vars['dir'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dir']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dirlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dir']->key => $_smarty_tpl->tpl_vars['dir']->value) {
$_smarty_tpl->tpl_vars['dir']->_loop = true;
?>
<a href="<?php echo $_smarty_tpl->tpl_vars['dir']->value['fields']->getUrl();?>
" <?php if (in_array($_smarty_tpl->tpl_vars['dir']->value['fields']['id'],$_smarty_tpl->tpl_vars['pathids']->value)) {?>id="this-act"<?php }?>><div class='leftPunct'><?php echo $_smarty_tpl->tpl_vars['dir']->value['fields']['name'];?>
</div></a>
<br>
<?php } ?>
</div>

	
	
	
	
	
	
	
	
<?php } else { ?>
    <?php ob_start();?><?php echo smarty_function_adminUrl(array('do'=>false,'mod_controller'=>"catalog-ctrl"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("theme:default/block_stub.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>"blockCategory",'do'=>array(array('title'=>t("Добавьте категории товаров"),'href'=>$_tmp1))), 0);?>

<?php }?><?php }} ?>
