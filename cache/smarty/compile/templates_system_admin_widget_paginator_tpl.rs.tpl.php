<?php /* Smarty version Smarty-3.1.18, created on 2016-07-20 13:26:24
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/widget/paginator.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1577347263578f51d0552e74-24847357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1384ed9e783e1715a9d0f22e800886e21661a650' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/widget/paginator.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '1577347263578f51d0552e74-24847357',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'paginator' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_578f51d05d6f13_08404186',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578f51d05d6f13_08404186')) {function content_578f51d05d6f13_08404186($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['paginator']->value->total_pages>1) {?>
    <div class="widget-paginator">
        <div class="putright">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paginator']->value->getPages(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['class']=='page') {?>
                <a data-update-url="<?php echo $_smarty_tpl->tpl_vars['item']->value['href'];?>
" class="call-update<?php if ($_smarty_tpl->tpl_vars['item']->value['act']) {?> act<?php }?>"><span><?php echo $_smarty_tpl->tpl_vars['item']->value['n'];?>
</span></a>
            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['class']=='right') {?>
                    <a data-update-url="<?php echo $_smarty_tpl->tpl_vars['item']->value['href'];?>
" class="call-update<?php if ($_smarty_tpl->tpl_vars['item']->value['act']) {?> act<?php }?>"><span><?php echo $_smarty_tpl->tpl_vars['item']->value['n'];?>
&raquo;</span></a>
                <?php } else { ?>
                    <a data-update-url="<?php echo $_smarty_tpl->tpl_vars['item']->value['href'];?>
" class="call-update<?php if ($_smarty_tpl->tpl_vars['item']->value['act']) {?> act<?php }?>"><span>&laquo;<?php echo $_smarty_tpl->tpl_vars['item']->value['n'];?>
</span></a>
                <?php }?>
            <?php }?>
            <?php } ?>
        </div>
    </div>
<?php }?><?php }} ?>
