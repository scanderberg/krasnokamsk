<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:51:53
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/menu/view/adminmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17295276445788dc69c95414-11650178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9c74ff1dad0601c0e2c574b8ffa1e15f92e68bc' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/menu/view/adminmenu.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '17295276445788dc69c95414-11650178',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mod_js' => 0,
    'items' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc69ce6163_51883545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc69ce6163_51883545')) {function content_5788dc69ce6163_51883545($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
?><?php echo smarty_function_addjs(array('file'=>((string)$_smarty_tpl->tpl_vars['mod_js']->value)."jquery.mainmenu.js",'basepath'=>"root"),$_smarty_tpl);?>

<div class="preloadback"></div>
<ul class="menu">
    <li><a href="<?php echo smarty_function_adminUrl(array('mod_controller'=>false,'do'=>false),$_smarty_tpl);?>
" class="home">&nbsp;</a></li>
    <?php echo $_smarty_tpl->getSubTemplate ("adminmenu_branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('list'=>$_smarty_tpl->tpl_vars['items']->value), 0);?>

</ul>

<script>
$(function() { $('.menu').mainmenu(); });
</script><?php }} ?>
