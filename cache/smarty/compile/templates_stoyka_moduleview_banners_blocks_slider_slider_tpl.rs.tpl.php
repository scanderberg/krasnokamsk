<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:56:24
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/banners/blocks/slider/slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9156303935788dd78b548a7-60342635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcacd95a716b9222e70edd37565fa191f79ed3ca' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/banners/blocks/slider/slider.tpl',
      1 => 1458834877,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '9156303935788dd78b548a7-60342635',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mod_js' => 0,
    'zone' => 0,
    'banners' => 0,
    'banner' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dd78c03238_78721701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dd78c03238_78721701')) {function content_5788dd78c03238_78721701($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
?><?php echo smarty_function_addjs(array('file'=>((string)$_smarty_tpl->tpl_vars['mod_js']->value)."jquery.photoslider.js",'basepath'=>"root"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['zone']->value) {?>
<?php $_smarty_tpl->tpl_vars['banners'] = new Smarty_variable($_smarty_tpl->tpl_vars['zone']->value->getBanners(), null, 0);?>
<div class="bannerSlider" id='top-slider' align='center'>
<div class="prev"></div>
<div class="next"></div>
    <ul class="banners">
        <?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['banner']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->_loop = true;
 $_smarty_tpl->tpl_vars['banner']->index++;
 $_smarty_tpl->tpl_vars['banner']->first = $_smarty_tpl->tpl_vars['banner']->index === 0;
?>
        <li class="item <?php if ($_smarty_tpl->tpl_vars['banner']->first) {?> act<?php }?>" <?php echo $_smarty_tpl->tpl_vars['banner']->value->getDebugAttributes();?>
>
            <a <?php if ($_smarty_tpl->tpl_vars['banner']->value['link']) {?>href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['link'];?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['banner']->value['targetblank']) {?>target="_blank"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['banner']->value->getBannerUrl($_smarty_tpl->tpl_vars['zone']->value['width'],$_smarty_tpl->tpl_vars['zone']->value['height'],'axy');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['title'];?>
"></a>
        </li>
        <?php } ?>
    </ul>
	
    <div class="pages" align='center'  id='top-slider-thumb'>
    <?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['banner']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->_loop = true;
 $_smarty_tpl->tpl_vars['banner']->index++;
 $_smarty_tpl->tpl_vars['banner']->first = $_smarty_tpl->tpl_vars['banner']->index === 0;
?>
        <a href="#" class="<?php if ($_smarty_tpl->tpl_vars['banner']->first) {?>act<?php }?>"></a>
    <?php } ?>
    </div>
</div>
<?php }?><?php }} ?>
