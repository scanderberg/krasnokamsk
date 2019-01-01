<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 13:56:41
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/ajaxscriptload_after.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15118015957bc2be9936166-33615954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46784fd4faa7d2d053f460cfef64f3284a72ca02' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/ajaxscriptload_after.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '15118015957bc2be9936166-33615954',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app' => 0,
    'css' => 0,
    'jslist' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bc2be996f765_08818407',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc2be996f765_08818407')) {function content_57bc2be996f765_08818407($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['css'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['css']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['app']->value->getCss(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['css']->key => $_smarty_tpl->tpl_vars['css']->value) {
$_smarty_tpl->tpl_vars['css']->_loop = true;
?>
<?php echo $_smarty_tpl->tpl_vars['css']->value['params']['before'];?>
<link type="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['css']->value['params']['type'])===null||$tmp==='' ? "text/css" : $tmp);?>
" href="<?php echo $_smarty_tpl->tpl_vars['css']->value['file'];?>
" media="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['css']->value['params']['media'])===null||$tmp==='' ? "all" : $tmp);?>
" rel="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['css']->value['params']['rel'])===null||$tmp==='' ? "stylesheet" : $tmp);?>
"><?php echo $_smarty_tpl->tpl_vars['css']->value['params']['after'];?>

<?php } ?>
<?php $_smarty_tpl->tpl_vars['jslist'] = new Smarty_variable($_smarty_tpl->tpl_vars['app']->value->getJs(), null, 0);?>
<?php if (count($_smarty_tpl->tpl_vars['jslist']->value)) {?>
    <script>$LAB.loading = true; var _lab = $LAB;</script>
    <?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jslist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
    <?php echo $_smarty_tpl->tpl_vars['js']->value['params']['before'];?>
<script>_lab = _lab.<?php if ($_smarty_tpl->tpl_vars['js']->value['params']['waitbefore']) {?>wait().<?php }?>script('<?php echo $_smarty_tpl->tpl_vars['js']->value['file'];?>
');</script><?php echo $_smarty_tpl->tpl_vars['js']->value['params']['after'];?>

    <?php } ?>
    <script>
        _lab.wait(function() {
            $LAB.loading = false;
            $(window).trigger('LAB-loading-complete');
        });
    </script>
<?php } else { ?>
    <script>
        $LAB.loading = false;
        $(window).trigger('LAB-loading-complete');
    </script>
<?php }?><?php }} ?>
