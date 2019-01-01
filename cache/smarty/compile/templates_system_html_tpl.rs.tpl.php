<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:51:53
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19380377145788dc69d3c400-05318858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fef2ba0290a391c52ad2613cc7ca502795799a19' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/html.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '19380377145788dc69d3c400-05318858',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app' => 0,
    'css' => 0,
    'js' => 0,
    'body' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc69dabf04_92652692',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc69dabf04_92652692')) {function content_5788dc69dabf04_92652692($_smarty_tpl) {?><!DOCTYPE <?php echo $_smarty_tpl->tpl_vars['app']->value->getDoctype();?>
>
<html>
<head <?php echo $_smarty_tpl->tpl_vars['app']->value->getHeadAttributes(true);?>
>
<title><?php echo $_smarty_tpl->tpl_vars['app']->value->title->get();?>
</title>
<?php echo $_smarty_tpl->tpl_vars['app']->value->meta->get();?>

<?php  $_smarty_tpl->tpl_vars['css'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['css']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['app']->value->getCss(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['css']->key => $_smarty_tpl->tpl_vars['css']->value) {
$_smarty_tpl->tpl_vars['css']->_loop = true;
?>
<?php echo $_smarty_tpl->tpl_vars['css']->value['params']['before'];?>
<link <?php if ($_smarty_tpl->tpl_vars['css']->value['params']['type']!==false) {?>type="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['css']->value['params']['type'])===null||$tmp==='' ? "text/css" : $tmp);?>
"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['css']->value['file'];?>
" <?php if ($_smarty_tpl->tpl_vars['css']->value['params']['media']!==false) {?>media="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['css']->value['params']['media'])===null||$tmp==='' ? "all" : $tmp);?>
"<?php }?> rel="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['css']->value['params']['rel'])===null||$tmp==='' ? "stylesheet" : $tmp);?>
"><?php echo $_smarty_tpl->tpl_vars['css']->value['params']['after'];?>

<?php } ?>
<script>
    var global = <?php echo $_smarty_tpl->tpl_vars['app']->value->getJsonJsVars();?>
;
</script>
<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['app']->value->getJs(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
<?php echo $_smarty_tpl->tpl_vars['js']->value['params']['before'];?>
<script type="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['js']->value['params']['type'])===null||$tmp==='' ? "text/javascript" : $tmp);?>
" src="<?php echo $_smarty_tpl->tpl_vars['js']->value['file'];?>
"></script><?php echo $_smarty_tpl->tpl_vars['js']->value['params']['after'];?>

<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['app']->value->getJsCode()!='') {?>
<script language="JavaScript"><?php echo $_smarty_tpl->tpl_vars['app']->value->getJsCode();?>
</script>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['app']->value->getAnyHeadData();?>

</head>
<body <?php if ($_smarty_tpl->tpl_vars['app']->value->getBodyClass()!='') {?>class="<?php echo $_smarty_tpl->tpl_vars['app']->value->getBodyClass();?>
"<?php }?>>
    <?php echo $_smarty_tpl->tpl_vars['body']->value;?>

    
    <?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['app']->value->getJs('footer'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
    <?php echo $_smarty_tpl->tpl_vars['js']->value['params']['before'];?>
<script type="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['js']->value['params']['type'])===null||$tmp==='' ? "text/javascript" : $tmp);?>
" src="<?php echo $_smarty_tpl->tpl_vars['js']->value['file'];?>
"></script><?php echo $_smarty_tpl->tpl_vars['js']->value['params']['after'];?>

    <?php } ?>    
</body>
</html><?php }} ?>
