<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:56:24
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/catalog/blocks/category/category_middle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:965421455788dd78c57773-94225065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9769a5f43097e1e09324a850b661444d64140f5e' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/catalog/blocks/category/category_middle.tpl',
      1 => 1459346083,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '965421455788dd78c57773-94225065',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dirlist' => 0,
    'dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dd78cabf12_72819074',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dd78cabf12_72819074')) {function content_5788dd78cabf12_72819074($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
?>
<?php if ($_smarty_tpl->tpl_vars['dirlist']->value) {?>
    <?php echo smarty_function_addjs(array('file'=>"jquery.mainmenu.js",'basepath'=>"common"),$_smarty_tpl);?>

	
        <?php  $_smarty_tpl->tpl_vars['dir'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dir']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dirlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dir']->key => $_smarty_tpl->tpl_vars['dir']->value) {
$_smarty_tpl->tpl_vars['dir']->_loop = true;
?>
		

		<a href="<?php echo $_smarty_tpl->tpl_vars['dir']->value['fields']->getUrl();?>
">
        <div class='middleCategory'>
		<img align='left' src="<?php if (!empty($_smarty_tpl->tpl_vars['dir']->value['fields']['image'])) {?><?php echo $_smarty_tpl->tpl_vars['dir']->value['fields']['__image']->getUrl(250,250,'xy');?>
<?php } else { ?>templates/stoyka/resource/img/no-photo.png<?php }?>"  width="250px" title="<?php echo $_smarty_tpl->tpl_vars['dir']->value['fields']['name'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['dir']->value['fields']['name'];?>
" />
		<div class="descrCategory"><?php echo $_smarty_tpl->tpl_vars['dir']->value['fields']['name'];?>
</div>
        </div>
		</a>
        <?php } ?>
	
	
	
<?php } else { ?>
    <?php ob_start();?><?php echo smarty_function_adminUrl(array('do'=>false,'mod_controller'=>"catalog-ctrl"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("theme:default/block_stub.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>"blockCategory",'do'=>array(array('title'=>t("Добавьте категории товаров"),'href'=>$_tmp1))), 0);?>

<?php }?><?php }} ?>
