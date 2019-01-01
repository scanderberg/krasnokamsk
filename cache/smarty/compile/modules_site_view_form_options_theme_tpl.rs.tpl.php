<?php /* Smarty version Smarty-3.1.18, created on 2016-07-23 09:54:40
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/site/view/form/options/theme.tpl" */ ?>
<?php /*%%SmartyHeaderCode:889402865579314b0b48579-71231837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e830d4269245778570ea95d52281dbd3d40ea4ff' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/site/view/form/options/theme.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '889402865579314b0b48579-71231837',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_579314b0ca02e3_01016733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579314b0ca02e3_01016733')) {function content_579314b0ca02e3_01016733($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
?><?php echo smarty_function_addjs(array('file'=>((string)$_smarty_tpl->tpl_vars['elem']->value['tpl_module_folders']['mod_js'])."selecttheme.js",'basepath'=>"root"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__theme']->getOriginalTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__theme']), 0);?>

<a id="selectTheme" class="button va-middle"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
выбрать<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>

<script>
$.allReady(function() {
    $('input[name="theme"]').selectTheme({
        dialogUrl: '<?php echo smarty_function_adminUrl(array('mod_controller'=>"templates-selecttheme",'do'=>false),$_smarty_tpl);?>
',
        setThemeUrl: '<?php echo smarty_function_adminUrl(array('mod_controller'=>"templates-selecttheme",'do'=>'installTheme'),$_smarty_tpl);?>
'
    })
});
</script><?php }} ?>
