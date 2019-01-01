<?php /* Smarty version Smarty-3.1.18, created on 2016-10-27 11:38:07
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/dir/property.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1602959025811bcef8961c4-21153741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e29ac938cc8ae69f41e93f2121be9a2b63a72f8' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/dir/property.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '1602959025811bcef8961c4-21153741',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mod_css' => 0,
    'mod_js' => 0,
    'elem' => 0,
    'group' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5811bcefa25012_99139252',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5811bcefa25012_99139252')) {function content_5811bcefa25012_99139252($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addcss')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addcss.php';
if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><?php echo smarty_function_addcss(array('file'=>((string)$_smarty_tpl->tpl_vars['mod_css']->value)."property.css",'basepath'=>"root"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>((string)$_smarty_tpl->tpl_vars['mod_js']->value)."property.js",'basepath'=>"root"),$_smarty_tpl);?>

<div id="propertyblock" data-owner-type="group" data-get-property-url="<?php echo smarty_function_adminUrl(array('mod_controller'=>"catalog-propctrl",'do'=>"ajaxGetPropertyList"),$_smarty_tpl);?>
" data-save-property-url="<?php echo smarty_function_adminUrl(array('mod_controller'=>"catalog-propctrl",'do'=>"ajaxCreateOrUpdateProperty"),$_smarty_tpl);?>
" data-get-some-properties="<?php echo smarty_function_adminUrl(array('mod_controller'=>"catalog-propctrl",'do'=>"AjaxGetSomeProperties"),$_smarty_tpl);?>
">
    <div class="property-tools">
        <div class="property-actions">
            <a class="add-property underline"><span><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Добавить характеристику<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></a>
            <a class="add-some-property underline"><span><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Вставить несколько характеристик<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></a>
            <span class="success-text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Характеристика успешно добавлена<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ("property_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
    
    <table class="property-container">
        <tbody class="overable">
        <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['elem']->value->getPropObjects(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
            <?php echo $_smarty_tpl->getSubTemplate ("property_group_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('group'=>$_smarty_tpl->tpl_vars['group']->value,'owner_type'=>"group"), 0);?>

        <?php } ?>
        </tbody>
    </table>
</div>      <?php }} ?>
