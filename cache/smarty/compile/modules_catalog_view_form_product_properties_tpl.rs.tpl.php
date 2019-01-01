<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 13:56:40
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/product/properties.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72750459957bc2be881e683-41507846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '667585f2821213949fa36cfa5171878f9efb1934' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/product/properties.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '72750459957bc2be881e683-41507846',
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
  'unifunc' => 'content_57bc2be88919e5_66643819',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc2be88919e5_66643819')) {function content_57bc2be88919e5_66643819($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addcss')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addcss.php';
if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
?><?php echo smarty_function_addcss(array('file'=>((string)$_smarty_tpl->tpl_vars['mod_css']->value)."property.css",'basepath'=>"root"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>((string)$_smarty_tpl->tpl_vars['mod_js']->value)."property.js",'basepath'=>"root"),$_smarty_tpl);?>


<div data-name="tab2" id="propertyblock" data-owner-type="product" data-get-property-url="<?php echo smarty_function_adminUrl(array('mod_controller'=>"catalog-propctrl",'do'=>"ajaxGetPropertyList"),$_smarty_tpl);?>
" data-save-property-url="<?php echo smarty_function_adminUrl(array('mod_controller'=>"catalog-propctrl",'do'=>"ajaxCreateOrUpdateProperty"),$_smarty_tpl);?>
">
    <div class="property-tools">
        <div class="property-actions">
            <a class="add-property underline"><span>Добавить характеристику</span></a>
            <span class="success-text">Характеристика успешно добавлена</span>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ("property_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
    <div class="floatwrap">
        <a class="set-self-val underline"><span>Задать индивидуальные значения всем характеристикам</span></a>
    </div>
    
    <table class="property-container">
        <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['elem']->value->getPropObjects(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
            <?php echo $_smarty_tpl->getSubTemplate ("property_group_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('group'=>$_smarty_tpl->tpl_vars['group']->value), 0);?>

        <?php } ?>
    </table>    
</div><?php }} ?>
