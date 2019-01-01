<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:52:32
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12788526915788dc90c74458-25984915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3b29cbe76b44b808d363c09dcbfcbea060f813a' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/layout.tpl',
      1 => 1460380520,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '12788526915788dc90c74458-25984915',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app' => 0,
    'shop_config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc90d76ce3_93311593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc90d76ce3_93311593')) {function content_5788dc90d76ce3_93311593($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addcss')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addcss.php';
if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
if (!is_callable('smarty_function_addmeta')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addmeta.php';
if (!is_callable('smarty_modifier_devnull')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/modifier.devnull.php';
if (!is_callable('smarty_function_tryinclude')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.tryinclude.php';
?>


<?php echo smarty_function_addcss(array('file'=>"/rss-news/",'basepath'=>"root",'rel'=>"alternate",'type'=>"application/rss+xml",'title'=>"t('Новости')"),$_smarty_tpl);?>
<?php echo smarty_function_addcss(array('file'=>"//fonts.googleapis.com/css?family=Neucha&amp;subset=cyrillic",'basepath'=>"root",'no_compress'=>true),$_smarty_tpl);?>
<?php echo smarty_function_addcss(array('file'=>"960gs/reset.css"),$_smarty_tpl);?>
<?php echo smarty_function_addcss(array('file'=>"style.css?v=4"),$_smarty_tpl);?>
<?php echo smarty_function_addcss(array('file'=>"960gs/960_orig.css",'before'=>"<!--[if lte IE 8]>",'after'=>"<![endif]-->"),$_smarty_tpl);?>
<?php echo smarty_function_addcss(array('file'=>"960gs/mobile.css"),$_smarty_tpl);?>
<?php echo smarty_function_addcss(array('file'=>"960gs/720.css"),$_smarty_tpl);?>
<?php echo smarty_function_addcss(array('file'=>"960gs/960.css"),$_smarty_tpl);?>
<?php echo smarty_function_addcss(array('file'=>"960gs/1200.css"),$_smarty_tpl);?>
<?php echo smarty_function_addcss(array('file'=>"colorbox.css"),$_smarty_tpl);?>
<?php echo smarty_function_addcss(array('file'=>"mystyle.css"),$_smarty_tpl);?>
 <?php echo smarty_function_addjs(array('file'=>"html5shiv.js",'unshift'=>true,'header'=>true),$_smarty_tpl);?>
<?php echo smarty_function_addjs(array('file'=>"jquery.min.js",'name'=>"jquery",'basepath'=>"common",'unshift'=>true,'header'=>true),$_smarty_tpl);?>
<?php echo smarty_function_addjs(array('file'=>"jquery.autocomplete.js"),$_smarty_tpl);?>
<?php echo smarty_function_addjs(array('file'=>"jquery.deftext.js",'basepath'=>"common"),$_smarty_tpl);?>
<?php echo smarty_function_addjs(array('file'=>"jquery.form.js",'basepath'=>"common"),$_smarty_tpl);?>
<?php echo smarty_function_addjs(array('file'=>"jquery.cookie.js",'basepath'=>"common"),$_smarty_tpl);?>
<?php echo smarty_function_addjs(array('file'=>"jquery.switcher.js"),$_smarty_tpl);?>
<?php echo smarty_function_addjs(array('file'=>"jquery.ajaxpagination.js"),$_smarty_tpl);?>
<?php echo smarty_function_addjs(array('file'=>"jquery.colorbox-min.js"),$_smarty_tpl);?>
<?php echo smarty_function_addjs(array('file'=>"jquery.activetabs.js"),$_smarty_tpl);?>
<?php echo smarty_function_addjs(array('file'=>"jquery.formstyler.min.js"),$_smarty_tpl);?>
<?php echo smarty_function_addjs(array('file'=>"jcarousel/jquery.jcarousel.min.js"),$_smarty_tpl);?>
<?php echo smarty_function_addjs(array('file'=>"jquery.touchswipe.min.js"),$_smarty_tpl);?>
<?php echo smarty_function_addjs(array('file'=>"modernizr.touch.js"),$_smarty_tpl);?>
<?php echo smarty_function_addjs(array('file'=>"common.js"),$_smarty_tpl);?>
<?php echo smarty_function_addjs(array('file'=>"theme.js"),$_smarty_tpl);?>
<?php echo smarty_function_addjs(array('file'=>"jquery.carouFredSel-5.2.3-packed.js"),$_smarty_tpl);?>
<?php echo smarty_function_addjs(array('file'=>"script.js"),$_smarty_tpl);?>
<?php echo smarty_function_addjs(array('file'=>"maps.js"),$_smarty_tpl);?>
<?php echo smarty_function_addjs(array('file'=>"maps2.js"),$_smarty_tpl);?>
<?php echo smarty_function_addmeta(array('http-equiv'=>"X-UA-Compatible",'content'=>"IE=Edge",'unshift'=>true),$_smarty_tpl);?>
<?php echo smarty_modifier_devnull($_smarty_tpl->tpl_vars['app']->value->meta->add(array('name'=>'viewport','content'=>'width=device-width, initial-scale=1.0')));?>
<?php $_smarty_tpl->tpl_vars['shop_config'] = new Smarty_variable(\RS\Config\Loader::byModule('shop'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['shop_config']->value===false) {?><?php echo $_smarty_tpl->tpl_vars['app']->value->setBodyClass('shopBase');?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['app']->value->setDoctype('HTML');?>

<?php echo $_smarty_tpl->tpl_vars['app']->value->blocks->renderLayout();?>
 


<?php echo smarty_function_tryinclude(array('file'=>"%THEME%/scripts.tpl"),$_smarty_tpl);?>

<?php }} ?>
