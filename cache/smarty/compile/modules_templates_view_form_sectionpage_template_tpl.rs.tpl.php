<?php /* Smarty version Smarty-3.1.18, created on 2017-03-17 13:34:43
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/templates/view/form/sectionpage/template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7140589158cbbbc3c571d1-75551906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a29311b26994d6275d3463a479a31693777714e5' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/templates/view/form/sectionpage/template.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '7140589158cbbbc3c571d1-75551906',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58cbbbc3ccffa3_89078740',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58cbbbc3ccffa3_89078740')) {function content_58cbbbc3ccffa3_89078740($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
?><?php echo smarty_function_addjs(array('file'=>((string)$_smarty_tpl->tpl_vars['elem']->value['tpl_module_folders']['mod_js'])."tplmanager.js",'basepath'=>"root"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>((string)$_smarty_tpl->tpl_vars['elem']->value['tpl_module_folders']['mod_js'])."selecttemplate.js",'basepath'=>"root"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__template']->getOriginalTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__template']), 0);?>

<a id="selectTemplate" class="selectTemplate" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Выберите шаблон из списка<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"></a>
<span class="hint" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Указанный шаблон будет использован вместо блоков. Возможность разметить страницу блоками в этом случае будет отключена. Указывайте произвольный шаблон в случае, если макет невозможно сверстать с помощью gs960.css<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">?</span>
<script>
$.allReady(function() {
    $('input[name="template"]').selectTemplate({
        dialogUrl: '<?php echo smarty_function_adminUrl(array('mod_controller'=>"templates-selecttemplate",'do'=>false),$_smarty_tpl);?>
'
    })
});
</script><?php }} ?>
