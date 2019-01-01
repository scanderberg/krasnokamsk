<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:51:51
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/table/coltype/strhead.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3274621525788dc679feda2-79065166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d4cab41de6c2edac3def3e72fe332cd464109ae' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/table/coltype/strhead.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '3274621525788dc679feda2-79065166',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cell' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc67a27cf0_50740240',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc67a27cf0_50740240')) {function content_5788dc67a27cf0_50740240($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['cell']->value->property['Sortable'])) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['cell']->value->sorturl;?>
" class="call-update sortable <?php echo mb_strtolower($_smarty_tpl->tpl_vars['cell']->value->property['CurrentSort'], 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['cell']->value->getTitle();?>
</a>
<?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['cell']->value->getTitle();?>

<?php }?><?php }} ?>
