<?php /* Smarty version Smarty-3.1.18, created on 2018-04-03 10:12:44
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/debug/mod_wrap.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2078293495ac3296c1dc0f0-75945692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f749932cbb735c018c3ebf6149cb06198aa3eb3e' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/debug/mod_wrap.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '2078293495ac3296c1dc0f0-75945692',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'group' => 0,
    'tool' => 0,
    'result_html' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ac3296c2e02b2_12954532',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac3296c2e02b2_12954532')) {function content_5ac3296c2e02b2_12954532($_smarty_tpl) {?><div class="module-wrapper" <?php echo $_smarty_tpl->tpl_vars['group']->value->getDebugAttributes();?>
>
    <div class="module-border module-border-left"></div>
    <div class="module-border module-border-right"></div>
    <div class="module-border module-border-top"></div>
    <div class="module-border module-border-bottom"></div>
    
    <div class="module-tools">    
        <div class="dragblock">&nbsp;</div>
        <?php  $_smarty_tpl->tpl_vars['tool'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tool']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value->getTools(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tool']->key => $_smarty_tpl->tpl_vars['tool']->value) {
$_smarty_tpl->tpl_vars['tool']->_loop = true;
?>
            <?php echo $_smarty_tpl->tpl_vars['tool']->value->getView();?>

        <?php } ?>
    </div>
    <div class="module-content">
        <?php echo $_smarty_tpl->tpl_vars['result_html']->value;?>

    </div>
</div><?php }} ?>
