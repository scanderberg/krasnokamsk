<?php /* Smarty version Smarty-3.1.18, created on 2018-04-03 10:12:44
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/debug/icon_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16298188915ac3296c484973-57756391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fae32f447a5172fba2c5aef4bbeed424e2b19037' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/debug/icon_info.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '16298188915ac3296c484973-57756391',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tool' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ac3296c528080_08957482',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac3296c528080_08957482')) {function content_5ac3296c528080_08957482($_smarty_tpl) {?><?php if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
?><a class="debug-icon debug-icon-info debug-hint" onclick="window.open('<?php echo smarty_function_adminUrl(array('mod_controller'=>"main-debug",'do'=>"showVars",'toolgroup'=>((string)$_smarty_tpl->tpl_vars['tool']->value->getUniq())),$_smarty_tpl);?>
','popup<?php echo $_smarty_tpl->tpl_vars['tool']->value->getUniq();?>
', 'width=400,height=300,scrollbars=yes')" title="
<strong>Информация о блоке</strong><br>
Название: <?php echo $_smarty_tpl->tpl_vars['tool']->value->getConfig('name');?>
<br>
Описание: <?php echo $_smarty_tpl->tpl_vars['tool']->value->getConfig('description');?>
<br>
Класс: <?php echo $_smarty_tpl->tpl_vars['tool']->value->getModule()->getName();?>
<br>
Версия: <?php echo $_smarty_tpl->tpl_vars['tool']->value->getConfig('version');?>
<br>
Автор: <?php echo $_smarty_tpl->tpl_vars['tool']->value->getConfig('author');?>
<br>
Контроллер: <?php echo $_smarty_tpl->tpl_vars['tool']->value->getControllerName();?>
<br>
Шаблон: <?php echo $_smarty_tpl->tpl_vars['tool']->value->render_template;?>
"></a><?php }} ?>
