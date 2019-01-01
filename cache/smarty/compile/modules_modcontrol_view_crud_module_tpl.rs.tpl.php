<?php /* Smarty version Smarty-3.1.18, created on 2017-03-15 09:33:35
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/modcontrol/view/crud_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9494899458c8e03fc35369-78509188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57edc19d5d1e006d8664150fd2acb445ca5e77ac' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/modcontrol/view/crud_module.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '9494899458c8e03fc35369-78509188',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app' => 0,
    'url' => 0,
    'module_item' => 0,
    'elements' => 0,
    'data' => 0,
    'error' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58c8e03fe29b25_78851220',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c8e03fe29b25_78851220')) {function content_58c8e03fe29b25_78851220($_smarty_tpl) {?><?php if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><?php echo $_smarty_tpl->tpl_vars['app']->value->autoloadScripsAjaxBefore();?>

<div class="crud-ajax-group">
    <?php if (!$_smarty_tpl->tpl_vars['url']->value->isAjax()) {?>
    <div id="content-layout">
        <div class="viewport">
        <div class="updatable" data-url="<?php echo smarty_function_adminUrl(array('mod'=>$_smarty_tpl->tpl_vars['module_item']->value->getName()),$_smarty_tpl);?>
">
    <?php }?>
            <div class="titlebox"><?php echo $_smarty_tpl->tpl_vars['elements']->value['formTitle'];?>
</div>
            <div class="sepline sep-top-form"></div>
            <div class="middlebox">
                <div class="crud-form-error">
                    <?php if (count($_smarty_tpl->tpl_vars['elements']->value['formErrors'])) {?>
                        <ul class="error-list">
                            <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['elements']->value['formErrors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
                                <li>
                                    <div class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['class'])===null||$tmp==='' ? "field" : $tmp);?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['fieldname'];?>
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
                </div>
                <div class="crud-form-success text-success"></div>
                
                <?php if ($_smarty_tpl->tpl_vars['module_item']->value->getConfig()->installed) {?>                
                <div class="columns">
                    <div class="tools-column fullheight">
                        <div class="controller_info">
                            <h3>Утилиты</h3>
                            <ul class="list-with-help">
                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['module_item']->value->getTools(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                <li><a <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['confirm'])) {?>data-confirm-text="<?php echo $_smarty_tpl->tpl_vars['item']->value['confirm'];?>
"<?php }?> class="<?php if ($_smarty_tpl->tpl_vars['item']->value['class']) {?><?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
<?php } else { ?>crud-get<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" style="text-decoration:underline"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['description']) {?><div class="tool-descr"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</div><?php }?>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>    
                    
                    </div>
                    <div class="form-column">
                        <?php if (!$_smarty_tpl->tpl_vars['module_item']->value->getConfig()->isMultisiteConfig()) {?>
                        <br><div class="notice-box"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Настройки данного модуля едины для всех сайтов в рамках мультисайтовости<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
                        <?php }?>
                            <?php echo $_smarty_tpl->tpl_vars['elements']->value['form'];?>

                    </div>
                    <div class="clearboth"></div>
                </div>
                <?php } else { ?>
                    <div class="inform-block margvert10">
                        Модуль не установлен. <a href="<?php echo smarty_function_adminUrl(array('do'=>'ajaxreinstall','module'=>$_smarty_tpl->tpl_vars['module_item']->value->getName()),$_smarty_tpl);?>
" class="u-link crud-get">Установить</a>
                    </div>
                <?php }?>
            </div>
        <?php if (!$_smarty_tpl->tpl_vars['url']->value->isAjax()) {?>
            </div>
            <div class="footerspace"></div>
        </div> <!-- .viewport -->
    </div> <!-- .content -->
    <?php }?>
    <div class="bottomToolbar zindex-dlg">
        <div class="viewport">
            <div class="common-column">
                <?php if (isset($_smarty_tpl->tpl_vars['elements']->value['bottomToolbar'])) {?>
                    <?php echo $_smarty_tpl->tpl_vars['elements']->value['bottomToolbar']->getView();?>

                <?php }?>
            </div>
        </div>
    </div>    
</div>
<?php echo $_smarty_tpl->tpl_vars['app']->value->autoloadScripsAjaxAfter();?>
<?php }} ?>
