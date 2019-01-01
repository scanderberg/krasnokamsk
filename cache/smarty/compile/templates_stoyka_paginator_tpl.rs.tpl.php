<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 16:27:22
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/paginator.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15013584085788e4bac53975-03058947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a42fd8e270ff010c7146803fa2527ab5de0ce08c' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/paginator.tpl',
      1 => 1458853324,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '15013584085788e4bac53975-03058947',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'paginator' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788e4bae04f67_77965561',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788e4bae04f67_77965561')) {function content_5788e4bae04f67_77965561($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['paginator']->value->total_pages>1) {?>
        <div class="paginator">
            <?php if ($_smarty_tpl->tpl_vars['paginator']->value->showFirst()) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['paginator']->value->getPageHref(1);?>
" data-page="1" title="первая страница">&laquo;</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['paginator']->value->page>1) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['paginator']->value->getPageHref($_smarty_tpl->tpl_vars['paginator']->value->page-1);?>
" data-page="<?php echo $_smarty_tpl->tpl_vars['paginator']->value->page-1;?>
" title="предыдущая страница">&laquo;<span class="text"> назад</span></a>
            <?php }?>
            <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paginator']->value->getPageList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>            
            <a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['href'];?>
" data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value['n'];?>
" <?php if ($_smarty_tpl->tpl_vars['page']->value['act']) {?>class="act"<?php }?>><?php if ($_smarty_tpl->tpl_vars['page']->value['class']=='left') {?>&laquo;<?php echo $_smarty_tpl->tpl_vars['page']->value['n'];?>
<?php } elseif ($_smarty_tpl->tpl_vars['page']->value['class']=='right') {?><?php echo $_smarty_tpl->tpl_vars['page']->value['n'];?>
&raquo;<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['page']->value['n'];?>
<?php }?></a>
            <?php } ?>
            <?php if ($_smarty_tpl->tpl_vars['paginator']->value->page<$_smarty_tpl->tpl_vars['paginator']->value->total_pages) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['paginator']->value->getPageHref($_smarty_tpl->tpl_vars['paginator']->value->page+1);?>
" data-page="<?php echo $_smarty_tpl->tpl_vars['paginator']->value->page+1;?>
" title="следующая страница"><span class="text">вперед</span> &raquo;</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['paginator']->value->showLast()) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['paginator']->value->getPageHref($_smarty_tpl->tpl_vars['paginator']->value->total_pages);?>
" data-page="<?php echo $_smarty_tpl->tpl_vars['paginator']->value->total_pages;?>
" title="последняя страница">&raquo;</a>
            <?php }?>
        </div>
<?php }?><?php }} ?>
