<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:51:51
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/table/coltype/action/dropdown.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19967575895788dc6768b562-85852082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d6f304499da61021f4c868cb05f7ebcd5c660b0' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/table/coltype/action/dropdown.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '19967575895788dc6768b562-85852082',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tool' => 0,
    'item' => 0,
    'key' => 0,
    'val' => 0,
    'cell' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc67760697_41565414',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc67760697_41565414')) {function content_5788dc67760697_41565414($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_substr')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/modifier.substr.php';
?><div class="rs-list-button">
    <a class="tool rs-dropdown-handler"></a>
    <ul class="rs-dropdown">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tool']->value->getItems(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->index++;
 $_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["tool"]['first'] = $_smarty_tpl->tpl_vars['item']->first;
?>
        <?php if (!$_smarty_tpl->tpl_vars['tool']->value->isItemHidden($_smarty_tpl->tpl_vars['item']->value)) {?>
        <li <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['tool']['first']) {?>class="first"<?php }?>>
            <a <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['attr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?><?php if ($_smarty_tpl->tpl_vars['key']->value[0]=='@') {?><?php echo smarty_modifier_substr($_smarty_tpl->tpl_vars['key']->value,"1");?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
<?php }?>="<?php if ($_smarty_tpl->tpl_vars['key']->value[0]=='@') {?><?php echo $_smarty_tpl->tpl_vars['cell']->value->getHref($_smarty_tpl->tpl_vars['val']->value);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
<?php }?>" <?php } ?>><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></li>
        <?php }?>
        <?php } ?>
    </ul>
</div><?php }} ?>
