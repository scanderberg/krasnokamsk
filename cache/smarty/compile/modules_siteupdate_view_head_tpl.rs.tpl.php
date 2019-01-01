<?php /* Smarty version Smarty-3.1.18, created on 2017-03-15 09:38:42
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/siteupdate/view/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97075773058c8e17230ed71-63529968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4778b8a36a81f02ebf83e354111335a9db9f0beb' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/siteupdate/view/head.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '97075773058c8e17230ed71-63529968',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mod_js' => 0,
    'mod_css' => 0,
    'success_text' => 0,
    'currentStep' => 0,
    'canUpdate' => 0,
    'data' => 0,
    'errors' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58c8e1723cf049_82662400',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c8e1723cf049_82662400')) {function content_58c8e1723cf049_82662400($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
if (!is_callable('smarty_function_addcss')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addcss.php';
if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><?php echo smarty_function_addjs(array('file'=>((string)$_smarty_tpl->tpl_vars['mod_js']->value)."/siteupdate.js",'basepath'=>"root"),$_smarty_tpl);?>

<?php echo smarty_function_addcss(array('file'=>((string)$_smarty_tpl->tpl_vars['mod_css']->value)."/siteupdate.css",'basepath'=>"root"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['success_text']->value) {?>
<div class="text-success">
    <?php echo $_smarty_tpl->tpl_vars['success_text']->value;?>

</div>
<?php }?>
<br>
<?php if ($_smarty_tpl->tpl_vars['currentStep']->value=='1') {?>
<ul class="stepbystep" data-current-step="<?php echo $_smarty_tpl->tpl_vars['currentStep']->value;?>
">
    <li class="first<?php if ($_smarty_tpl->tpl_vars['currentStep']->value=='1') {?> act<?php }?><?php if ($_smarty_tpl->tpl_vars['currentStep']->value>1) {?> already<?php }?> step1">
        <a href="<?php echo smarty_function_adminUrl(array('do'=>false),$_smarty_tpl);?>
" class="check-update item<?php if (!$_smarty_tpl->tpl_vars['canUpdate']->value) {?> disabled<?php }?>" data-change-text="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
идет проверка обновлений...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
проверить обновления<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
        <div class="load-indicator"></div>
    </li>
</ul>
<?php } else { ?>
<ul class="stepbystep" data-current-step="<?php echo $_smarty_tpl->tpl_vars['currentStep']->value;?>
">
    <li class="first<?php if ($_smarty_tpl->tpl_vars['currentStep']->value=='1') {?> act<?php }?><?php if ($_smarty_tpl->tpl_vars['currentStep']->value>1) {?> already<?php }?> step1">
        <a href="<?php echo smarty_function_adminUrl(array('do'=>false),$_smarty_tpl);?>
" class="check-update item" ><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
проверка обновлений<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
        <div class="load-indicator"></div>
    </li>
    <li class="<?php if ($_smarty_tpl->tpl_vars['currentStep']->value=='2') {?>act<?php }?><?php if ($_smarty_tpl->tpl_vars['currentStep']->value>2) {?> already<?php }?> step2">
        <?php if (is_array($_smarty_tpl->tpl_vars['data']->value)&&count($_smarty_tpl->tpl_vars['data']->value['products'])>1) {?>
            <a href="<?php echo smarty_function_adminUrl(array('do'=>'selectProduct'),$_smarty_tpl);?>
" class="item"><?php if ($_smarty_tpl->tpl_vars['currentStep']->value==3) {?>Продукт: <?php echo $_smarty_tpl->tpl_vars['data']->value['updateProduct'];?>
<?php } else { ?>выбор продукта<?php }?><i></i></a>
        <?php } else { ?>
            <span class="item">Продукт: <?php echo $_smarty_tpl->tpl_vars['data']->value['updateProduct'];?>
</span>
        <?php }?>
    </li>
    <li class="<?php if ($_smarty_tpl->tpl_vars['currentStep']->value=='3') {?>act<?php }?> step3">
        <span class="item">установка обновлений<i></i></span>
    </li>
</ul>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['currentStep']->value=='1'&&$_smarty_tpl->tpl_vars['canUpdate']->value) {?>
<div class="clicktostart">
    &larr; Нажмите, чтобы проверить наличие обновлений для Вашей системы.
</div>
<?php }?>

<div class="clear"></div>

<div class="error-block">
<?php if (!empty($_smarty_tpl->tpl_vars['errors']->value)) {?>
    <ul class="error-list">
        <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
        <li>
            <div class="field"><?php echo $_smarty_tpl->tpl_vars['data']->value['fieldname'];?>
<i class="cor"></i></div>
            <div class="text">
                <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                <?php } ?>
            </div>
        </li>
        <?php } ?>
    </ul>
<?php }?>
</div><?php }} ?>
