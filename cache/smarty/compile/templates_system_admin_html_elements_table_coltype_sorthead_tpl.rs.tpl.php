<?php /* Smarty version Smarty-3.1.18, created on 2016-12-06 10:07:13
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/table/coltype/sorthead.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1810316542584663a156ea41-41694760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a68c0d0b57770180d1fcf38fba2d36b3a749f5ba' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/table/coltype/sorthead.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '1810316542584663a156ea41-41694760',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cell' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_584663a15f64d4_64300769',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584663a15f64d4_64300769')) {function content_584663a15f64d4_64300769($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
?><?php echo smarty_function_addjs(array('file'=>"jquery.tablednd.js",'basepath'=>"common"),$_smarty_tpl);?>

<?php if (!empty($_smarty_tpl->tpl_vars['cell']->value->property['Sortable'])&&!$_smarty_tpl->tpl_vars['cell']->value->property['CurrentSort']) {?>   
    <a href="<?php echo $_smarty_tpl->tpl_vars['cell']->value->sorturl;?>
" class="call-update sortable sortdot <?php echo mb_strtolower($_smarty_tpl->tpl_vars['cell']->value->property['CurrentSort'], 'UTF-8');?>
"><span></span></a>
<?php } else { ?>                 
    <span class="sortable sortdot <?php echo mb_strtolower($_smarty_tpl->tpl_vars['cell']->value->property['CurrentSort'], 'UTF-8');?>
"><span></span></span> 
<?php }?><?php }} ?>
