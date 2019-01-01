<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:52:33
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/catalog/blocks/brands/brands.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7779273365788dc919a3cd4-79346412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffe830de0bb01ff0111f9dfa441742b990ebb24b' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/catalog/blocks/brands/brands.tpl',
      1 => 1460376373,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '7779273365788dc919a3cd4-79346412',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'brands' => 0,
    'bran' => 0,
    'firstbrand' => 0,
    'lastbrand' => 0,
    'brand' => 0,
    'myrand' => 0,
    'myrand3' => 0,
    'myrand4' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc91a768f9_73439109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc91a768f9_73439109')) {function content_5788dc91a768f9_73439109($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/plugins/function.math.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['brands']->value)) {?>
 
 <div align='center' class='owner2'>
<span>Поставщики</span>
<br>
<?php  $_smarty_tpl->tpl_vars['bran'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bran']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['bran']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['bran']->iteration=0;
 $_smarty_tpl->tpl_vars['bran']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['bran']->key => $_smarty_tpl->tpl_vars['bran']->value) {
$_smarty_tpl->tpl_vars['bran']->_loop = true;
 $_smarty_tpl->tpl_vars['bran']->iteration++;
 $_smarty_tpl->tpl_vars['bran']->index++;
 $_smarty_tpl->tpl_vars['bran']->first = $_smarty_tpl->tpl_vars['bran']->index === 0;
 $_smarty_tpl->tpl_vars['bran']->last = $_smarty_tpl->tpl_vars['bran']->iteration === $_smarty_tpl->tpl_vars['bran']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['brandcount']['first'] = $_smarty_tpl->tpl_vars['bran']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['brandcount']['last'] = $_smarty_tpl->tpl_vars['bran']->last;
?>

<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['brandcount']['first']) {?> 
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['bran']->value['id'];?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["firstbrand"] = new Smarty_variable($_tmp3, null, 0);?>
<?php }?> 

<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['brandcount']['last']) {?>  
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['bran']->value['id'];?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["lastbrand"] = new Smarty_variable($_tmp4, null, 0);?>
<?php }?>             

<?php } ?>

<?php echo smarty_function_math(array('assign'=>"myrand",'equation'=>"rand(".((string)$_smarty_tpl->tpl_vars['firstbrand']->value).",".((string)$_smarty_tpl->tpl_vars['lastbrand']->value).")"),$_smarty_tpl);?>

<?php echo smarty_function_math(array('assign'=>"myrand2",'equation'=>"rand(".((string)$_smarty_tpl->tpl_vars['firstbrand']->value).",".((string)$_smarty_tpl->tpl_vars['lastbrand']->value).")"),$_smarty_tpl);?>

<?php echo smarty_function_math(array('assign'=>"myrand3",'equation'=>"rand(".((string)$_smarty_tpl->tpl_vars['firstbrand']->value).",".((string)$_smarty_tpl->tpl_vars['lastbrand']->value).")"),$_smarty_tpl);?>

<?php echo smarty_function_math(array('assign'=>"myrand4",'equation'=>"rand(".((string)$_smarty_tpl->tpl_vars['firstbrand']->value).",".((string)$_smarty_tpl->tpl_vars['lastbrand']->value).")"),$_smarty_tpl);?>

 
<div style='margin-top: -7px!important;'>
<?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
?>

<?php if ($_smarty_tpl->tpl_vars['brand']->value['image']) {?>
<?php if ($_smarty_tpl->tpl_vars['brand']->value['id']==$_smarty_tpl->tpl_vars['myrand']->value||$_smarty_tpl->tpl_vars['brand']->value['id2']==$_smarty_tpl->tpl_vars['myrand']->value||$_smarty_tpl->tpl_vars['brand']->value['id']==$_smarty_tpl->tpl_vars['myrand3']->value||$_smarty_tpl->tpl_vars['brand']->value['id']==$_smarty_tpl->tpl_vars['myrand4']->value) {?>

<a href="<?php echo $_smarty_tpl->tpl_vars['brand']->value->getUrl();?>
">
<img src="<?php echo $_smarty_tpl->tpl_vars['brand']->value->__image->getUrl(100,100,'axy');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['brand']->value['title'];?>
" height="80px"/>
</a>

<?php }?> 
<?php }?>              

<?php } ?>
</div>  

</div>

<?php }?><?php }} ?>
