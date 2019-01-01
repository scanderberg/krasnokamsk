<?php /* Smarty version Smarty-3.1.18, created on 2016-12-06 10:50:18
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/users/view/form/user/userfields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107066834058466dba4e9df9-72699462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '617239fb1fe057b2c2f87205580f5a9d99a14f91' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/users/view/form/user/userfields.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '107066834058466dba4e9df9-72699462',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
    'fld' => 0,
    'errname' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58466dba51f9c9_94816172',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58466dba51f9c9_94816172')) {function content_58466dba51f9c9_94816172($_smarty_tpl) {?><table class="otable">
    <?php if ($_smarty_tpl->tpl_vars['elem']->value['conf_userfields']->notEmpty()) {?>
        <?php  $_smarty_tpl->tpl_vars['fld'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fld']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['elem']->value['conf_userfields']->getStructure(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fld']->key => $_smarty_tpl->tpl_vars['fld']->value) {
$_smarty_tpl->tpl_vars['fld']->_loop = true;
?>
        <tr>
            <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['fld']->value['title'];?>
</td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['elem']->value['conf_userfields']->getForm($_smarty_tpl->tpl_vars['fld']->value['alias']);?>

                <?php $_smarty_tpl->tpl_vars['errname'] = new Smarty_variable($_smarty_tpl->tpl_vars['elem']->value['conf_userfields']->getErrorForm($_smarty_tpl->tpl_vars['fld']->value['alias']), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['error'] = new Smarty_variable($_smarty_tpl->tpl_vars['elem']->value->getErrorsByForm($_smarty_tpl->tpl_vars['errname']->value,', '), null, 0);?>
                <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                    <span class="form-error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
                <?php }?>                        
            </td>
        </tr>
        <?php } ?>
    <?php }?>                    
</table><?php }} ?>
