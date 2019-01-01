<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:52:33
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/catalog/blocks/category/category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5822973605788dc915e4ee4-54628726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96963f5d6dfde57d4e52d6fa45e3355923f5ae6d' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/catalog/blocks/category/category.tpl',
      1 => 1458828593,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '5822973605788dc915e4ee4-54628726',
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
  'unifunc' => 'content_5788dc9178d849_92121376',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc9178d849_92121376')) {function content_5788dc9178d849_92121376($_smarty_tpl) {?><?php if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
?>
<?php if ($_smarty_tpl->tpl_vars['dirlist']->value) {?>
<div class='all-category'>
<?php  $_smarty_tpl->tpl_vars['dir'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dir']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dirlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dir']->key => $_smarty_tpl->tpl_vars['dir']->value) {
$_smarty_tpl->tpl_vars['dir']->_loop = true;
?>
<a href="<?php echo $_smarty_tpl->tpl_vars['dir']->value['fields']->getUrl();?>
" <?php if (in_array($_smarty_tpl->tpl_vars['dir']->value['fields']['id'],$_smarty_tpl->tpl_vars['pathids']->value)) {?>id="this-act"<?php }?>><div class='main-category'><?php echo $_smarty_tpl->tpl_vars['dir']->value['fields']['name'];?>
</div></a>
<?php } ?>
</div>

	
	
	
	
	
	
	
	
<?php } else { ?>
    <?php ob_start();?><?php echo smarty_function_adminUrl(array('do'=>false,'mod_controller'=>"catalog-ctrl"),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("theme:default/block_stub.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>"blockCategory",'do'=>array(array('title'=>t("Добавьте категории товаров"),'href'=>$_tmp2))), 0);?>

<?php }?><?php }} ?>
