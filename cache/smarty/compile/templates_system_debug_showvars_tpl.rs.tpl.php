<?php /* Smarty version Smarty-3.1.18, created on 2018-04-07 08:22:44
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/debug/showvars.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10166627085ac855a487aac4-17676858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81d067d371f65eb380f99965f3871681999cebca' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/debug/showvars.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '10166627085ac855a487aac4-17676858',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app' => 0,
    'var_list' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ac855a4cb6606_37585595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac855a4cb6606_37585595')) {function content_5ac855a4cb6606_37585595($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addcss')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addcss.php';
if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><?php echo smarty_function_addcss(array('file'=>"common/debug.css",'basepath'=>"common"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->tpl_vars['app']->value->setBodyClass('module-debug-body');?>

<h3 class="module-debug-title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Переменные, которые были переданы в шаблон модулем<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h3>

<table class="module-debug-info-vars">
<thead>
    <tr>
        <th>Имя переменной</th>
        <th>Тип</th>
    </tr>
</thead>
<tbody>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['var_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
        <td class="var-name"><?php echo $_smarty_tpl->tpl_vars['item']->value['key'];?>
</td>
        <td class="var-type"><?php echo $_smarty_tpl->tpl_vars['item']->value['type'];?>
</td>
    </tr>
    <?php } ?>
</tbody>
</table><?php }} ?>
