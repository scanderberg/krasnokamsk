<?php /* Smarty version Smarty-3.1.18, created on 2017-03-17 13:41:09
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/site/view/form/site/theme.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163109531758cbbd45bc7229-51526842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '124fa4435ba4ad6ba1b9f730ee92e4c226228c12' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/site/view/form/site/theme.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '163109531758cbbd45bc7229-51526842',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58cbbd45c50e09_92067982',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58cbbd45c50e09_92067982')) {function content_58cbbd45c50e09_92067982($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
?><?php if (empty($_smarty_tpl->tpl_vars['elem']->value['id'])) {?>
    <?php echo smarty_function_addjs(array('file'=>((string)$_smarty_tpl->tpl_vars['elem']->value['tpl_module_folders']['mod_js'])."selecttheme.js",'basepath'=>"root"),$_smarty_tpl);?>

    <div style="white-space:nowrap" id="theme_block">
        <input name="<?php echo $_smarty_tpl->tpl_vars['elem']->value['__theme']->getFormName();?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__theme']->get(), ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['elem']->value['__theme']->getMaxLength()>0) {?>maxlength="<?php echo $_smarty_tpl->tpl_vars['elem']->value['__theme']->getMaxLength();?>
"<?php }?> <?php echo $_smarty_tpl->tpl_vars['elem']->value['__theme']->getAttr();?>
 />&nbsp;<a id="selectTheme" class="button va-middle"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
выбрать<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
        <?php echo $_smarty_tpl->getSubTemplate ("%system%/coreobject/type/form/block_error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__theme']), 0);?>

    </div>
    <script>
    $.allReady(function() {
        $('#theme_block input[name="theme"]').selectTheme({
            dialogUrl: '<?php echo smarty_function_adminUrl(array('mod_controller'=>"templates-selecttheme",'do'=>false),$_smarty_tpl);?>
',
            setThemeUrl: '<?php echo smarty_function_adminUrl(array('mod_controller'=>"templates-selecttheme",'do'=>'installTheme'),$_smarty_tpl);?>
',
            justSelect: true
        })
    });
    </script>    
<?php } else { ?>
    уже задана
<?php }?><?php }} ?>
