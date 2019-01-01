<?php /* Smarty version Smarty-3.1.18, created on 2016-12-06 10:50:18
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/users/view/form/user/groups.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173542962058466dba3d6a90-14413999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb71597d1c1bbabb11ed306d7dcdea28322e265c' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/users/view/form/user/groups.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '173542962058466dba3d6a90-14413999',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58466dba4e19d1_71928118',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58466dba4e19d1_71928118')) {function content_58466dba4e19d1_71928118($_smarty_tpl) {?><table class="otable">
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['elem']->value['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <tr>
            <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['item']->value['alias'];?>
)</td>
            <td><input type="checkbox" name="groups[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['alias'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['alias']==$_smarty_tpl->tpl_vars['elem']->value->getDefaultGroup()||$_smarty_tpl->tpl_vars['item']->value['alias']==$_smarty_tpl->tpl_vars['elem']->value->getAuthorizedGroup()) {?>disabled<?php }?> <?php if (in_array($_smarty_tpl->tpl_vars['item']->value['alias'],$_smarty_tpl->tpl_vars['elem']->value['usergroup'])) {?>checked<?php }?>/></td>
        </tr>
    <?php } ?>
</table><?php }} ?>
