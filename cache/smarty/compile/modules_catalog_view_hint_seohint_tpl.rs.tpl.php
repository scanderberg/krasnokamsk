<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 13:56:39
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/hint/seohint.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193429674657bc2be76f0dd2-15013768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36e7a75ae81c21d7e85369ce6eb6340f85e892fe' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/hint/seohint.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '193429674657bc2be76f0dd2-15013768',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hints' => 0,
    'key' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bc2be791b163_46722818',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc2be791b163_46722818')) {function content_57bc2be791b163_46722818($_smarty_tpl) {?>В этом поле Вы можете использовать переменные, вместо которых будут<br/> 
подставлены соотвествующие значения:  <br/><br/>
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hints']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
    &nbsp;&nbsp;<b>{<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
}</b> - <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
 <br/>
<?php } ?><br/>
<b>Характеристики:</b><br/>
&nbsp;&nbsp;<b>{prop.id}</b> - Значение характеристики, где id - это номер характеристики<br/> 
<br/>
Сокращайте заменяемый текст с помощью конструкции {title|100},<br/>
где - 100 это количество символов от начала в значении,<br/>
a title - это доступное поле
<br/><br/>

<b>{title|.|3}</b> - эта конструкция обрежет заголовок(поле title)<br/> 
предложение до третьей точки (".") включительно.<br/>
Первый аргумент после "|" это поле объекта, второй символ поиска, третий число вхождений.<?php }} ?>
