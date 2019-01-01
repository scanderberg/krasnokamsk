<?php /* Smarty version Smarty-3.1.18, created on 2016-10-27 11:40:09
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/dialog/tree_branch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16351894385811bd69783394-87763039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fa053c84b36a17676409841d57ed2c9b4cb9dbb' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/dialog/tree_branch.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '16351894385811bd69783394-87763039',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dirlist' => 0,
    'open' => 0,
    'item' => 0,
    'Setup' => 0,
    'hideGroupCheckbox' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5811bd699cba38_58048513',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5811bd699cba38_58048513')) {function content_5811bd699cba38_58048513($_smarty_tpl) {?> <?php if (!empty($_smarty_tpl->tpl_vars['dirlist']->value)) {?>
 <ul <?php if ($_smarty_tpl->tpl_vars['open']->value) {?>style="display:block"<?php }?>>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dirlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
 $_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["dirlist"]['last'] = $_smarty_tpl->tpl_vars['item']->last;
?>
    <li class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['dirlist']['last']) {?>end<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['child'])) {?>plus<?php }?><?php }?><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['dirlist']['last']) {?><?php if (empty($_smarty_tpl->tpl_vars['item']->value['child'])) {?>branch<?php } else { ?>plus<?php }?><?php }?>" qid="<?php echo $_smarty_tpl->tpl_vars['item']->value['fields']['id'];?>
">
        <img src="<?php echo $_smarty_tpl->tpl_vars['Setup']->value['IMG_PATH'];?>
/adminstyle/minitree/folder.png">
        <input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['fields']['id'];?>
" name="group[]" <?php if ($_smarty_tpl->tpl_vars['hideGroupCheckbox']->value) {?>style="display:none"<?php }?>>
        <a><?php echo $_smarty_tpl->tpl_vars['item']->value['fields']['name'];?>
</a>
    </li>
    <?php } ?>
</ul>
<?php }?><?php }} ?>
