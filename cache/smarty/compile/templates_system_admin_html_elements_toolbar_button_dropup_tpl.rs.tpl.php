<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:51:50
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/toolbar/button/dropup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10884450655788dc66d22cb6-89317955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac17b8b5ca2422a2c1e15c77b3f123dc9843e8db' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/toolbar/button/dropup.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '10884450655788dc66d22cb6-89317955',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'button' => 0,
    'first' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc66e92879_84819955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc66e92879_84819955')) {function content_5788dc66e92879_84819955($_smarty_tpl) {?><div <?php echo $_smarty_tpl->tpl_vars['button']->value->getAttrLine();?>
>
    <?php $_smarty_tpl->tpl_vars['first'] = new Smarty_variable($_smarty_tpl->tpl_vars['button']->value->getFirstItem(), null, 0);?>
    <a <?php if (isset($_smarty_tpl->tpl_vars['first']->value['href'])) {?>href="<?php echo $_smarty_tpl->tpl_vars['first']->value['href'];?>
"<?php }?> <?php echo $_smarty_tpl->tpl_vars['button']->value->getItemAttrLine($_smarty_tpl->tpl_vars['first']->value,true);?>
><?php echo $_smarty_tpl->tpl_vars['first']->value['title'];?>
</a><?php if (count($_smarty_tpl->tpl_vars['button']->value->getDropItems())) {?><a class="rs-dropdown-handler">&nbsp;</a>
        <ul class="rs-dropdown">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['button']->value->getDropItems(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->index++;
 $_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['ddown']['first'] = $_smarty_tpl->tpl_vars['item']->first;
?>
            <li <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['ddown']['first']) {?>class="first"<?php }?>>
            <a <?php if (isset($_smarty_tpl->tpl_vars['first']->value['href'])) {?>href="<?php echo $_smarty_tpl->tpl_vars['first']->value['href'];?>
"<?php }?> <?php echo $_smarty_tpl->tpl_vars['button']->value->getItemAttrLine($_smarty_tpl->tpl_vars['item']->value);?>
><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
            </li>
        <?php } ?>        
        </ul>        
    <?php }?>
</div><?php }} ?>
