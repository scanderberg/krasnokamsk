<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:51:51
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/filter/container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16827234395788dc670d9df3-19210157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af5f2293e868c9d86e81beb378cd9e0c3f379d9f' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/filter/container.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '16827234395788dc670d9df3-19210157',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fcontainer' => 0,
    'line' => 0,
    'sec_cont' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc67193f32_68000137',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc67193f32_68000137')) {function content_5788dc67193f32_68000137($_smarty_tpl) {?>

<div class="formfilter">
    <a class="close"></a>
    <?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fcontainer']->value->getLines(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value) {
$_smarty_tpl->tpl_vars['line']->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['line']->value->getView();?>

    <?php } ?>                

    <div class="more">
        <?php  $_smarty_tpl->tpl_vars['sec_cont'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sec_cont']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fcontainer']->value->getSecContainers(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sec_cont']->key => $_smarty_tpl->tpl_vars['sec_cont']->value) {
$_smarty_tpl->tpl_vars['sec_cont']->_loop = true;
?>
            <?php echo $_smarty_tpl->tpl_vars['sec_cont']->value->getView();?>

        <?php } ?>
    </div>
</div><?php }} ?>
