<?php /* Smarty version Smarty-3.1.18, created on 2018-04-04 06:39:16
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/coreobject/type/form/template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10620402305ac448e48edf76-96146937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff671f295070438857879bbe598adee0ad8ca4de' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/coreobject/type/form/template.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '10620402305ac448e48edf76-96146937',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ac448e495e2c0_73318671',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac448e495e2c0_73318671')) {function content_5ac448e495e2c0_73318671($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
?><?php echo smarty_function_addjs(array('file'=>"%templates%/tplmanager.js",'basepath'=>"root"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"%templates%/selecttemplate.js",'basepath'=>"root"),$_smarty_tpl);?>

<span style="white-space:nowrap;">
<input name="<?php echo $_smarty_tpl->tpl_vars['field']->value->getFormName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value->get();?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value->getMaxLength()>0) {?>maxlength="<?php echo $_smarty_tpl->tpl_vars['field']->value->getMaxLength();?>
"<?php }?> <?php echo $_smarty_tpl->tpl_vars['field']->value->getAttr();?>
 />&nbsp;<a class="selectTemplate" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Выберите шаблон из списка<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"></a>
</span>
<?php echo $_smarty_tpl->getSubTemplate ("%system%/coreobject/type/form/block_error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script>
    $.allReady(function() {
        $('input[name="<?php echo $_smarty_tpl->tpl_vars['field']->value->getFormName();?>
"]').selectTemplate({
            dialogUrl: '<?php echo smarty_function_adminUrl(array('mod_controller'=>"templates-selecttemplate",'do'=>false,'only_themes'=>$_smarty_tpl->tpl_vars['field']->value->getOnlyThemes()),$_smarty_tpl);?>
',
            handler: '.selectTemplate'
        })
    });
</script><?php }} ?>
