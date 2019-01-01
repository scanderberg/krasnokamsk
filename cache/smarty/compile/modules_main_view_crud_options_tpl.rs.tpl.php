<?php /* Smarty version Smarty-3.1.18, created on 2016-12-06 10:08:38
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/main/view/crud-options.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1044667287584663f6d01541-41098787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19de6ff03c587703e7b7608d149ee2181f7fdab8' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/main/view/crud-options.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '1044667287584663f6d01541-41098787',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app' => 0,
    'url' => 0,
    'elements' => 0,
    'data' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_584663f6daf357_41868540',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584663f6daf357_41868540')) {function content_584663f6daf357_41868540($_smarty_tpl) {?><?php if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
?><?php echo $_smarty_tpl->tpl_vars['app']->value->autoloadScripsAjaxBefore();?>

<div class="crud-ajax-group">
    <?php if (!$_smarty_tpl->tpl_vars['url']->value->isAjax()) {?>
    <div id="content-layout">
        <div class="viewport">
    <?php }?>
            <div class="titlebox"><?php echo $_smarty_tpl->tpl_vars['elements']->value['formTitle'];?>
</div>
            <?php if (!$_smarty_tpl->tpl_vars['url']->value->isAjax()) {?><div class="sepline sep-top-form"></div><?php }?>
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
                <div class="columns">
                    <div class="tools-column fullheight">
                        <div class="controller_info">
                            <h3>Разработчикам</h3>
                            <ul class="content">
                                <li><a href="<?php echo smarty_function_adminUrl(array('mod_controller'=>"main-routes"),$_smarty_tpl);?>
" style="text-decoration:underline">Маршруты в системе</a>
                                <div class="tool-descr">Позволяет проверить разработчику, какой маршрут откликается на заданный URL</div>
                                </li>
                                <li><a class="crud-get" href="<?php echo smarty_function_adminUrl(array('do'=>"syncDb"),$_smarty_tpl);?>
" style="text-decoration:underline">Исправить структуру БД</a>
                                    <div class="tool-descr">Приводит структуру БД в соответствии со всеми ORM объектами в системе</div>
                                </li>
                                <li><a class="crud-get" href="<?php echo smarty_function_adminUrl(array('do'=>"testMail"),$_smarty_tpl);?>
" style="text-decoration:underline">Проверить отправку писем</a>
                                    <div class="tool-descr">Будет отправлено тестовое сообщение администратору сайта</div>
                                </li>
                                <li><a href="<?php echo smarty_function_adminUrl(array('do'=>false,'mod_controller'=>"main-blockedip"),$_smarty_tpl);?>
" style="text-decoration:underline">Блокировка IP-адресов</a>
                                    <div class="tool-descr">Переход в раздел управления списком заблокированных IP или диапазонов IP</div>
                                </li>
                                <li><a class="crud-get" href="<?php echo smarty_function_adminUrl(array('do'=>"unlockCron"),$_smarty_tpl);?>
" style="text-decoration:underline">Разблокировать Cron</a>
                                    <div class="tool-descr">Удалить файл блокировки планировщика заданий Cron<br>(/storage/locks/cron)</div>
                                </li>
                            </ul>
                        </div>    
                    
                    </div>
                    <div class="form-column">
                        <?php echo $_smarty_tpl->tpl_vars['elements']->value['form'];?>

                    </div>
                    <div class="clearboth"></div>
                </div>
            </div>
        <?php if (!$_smarty_tpl->tpl_vars['url']->value->isAjax()) {?>
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
