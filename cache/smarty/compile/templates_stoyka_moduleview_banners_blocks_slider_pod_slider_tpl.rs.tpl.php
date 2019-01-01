<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:56:24
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/banners/blocks/slider/pod-slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18853799175788dd78c22945-62392276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33fafd0de8a36eff99c97965548b04c983d1c26e' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/banners/blocks/slider/pod-slider.tpl',
      1 => 1458837416,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '18853799175788dd78c22945-62392276',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'zone' => 0,
    'banners' => 0,
    'banner' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dd78c49a05_90904258',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dd78c49a05_90904258')) {function content_5788dd78c49a05_90904258($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['zone']->value) {?>
<?php $_smarty_tpl->tpl_vars['banners'] = new Smarty_variable($_smarty_tpl->tpl_vars['zone']->value->getBanners(), null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
        <div class="pod-slider" align='center'>
            <a <?php if ($_smarty_tpl->tpl_vars['banner']->value['link']) {?>href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['link'];?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['banner']->value['targetblank']) {?>target="_blank"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['banner']->value->getBannerUrl($_smarty_tpl->tpl_vars['zone']->value['width'],$_smarty_tpl->tpl_vars['zone']->value['height'],'axy');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['title'];?>
"></a>
        </div>
        <?php } ?>
<?php }?><?php }} ?>
