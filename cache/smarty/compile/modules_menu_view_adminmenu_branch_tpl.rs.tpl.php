<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:51:53
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/menu/view/adminmenu_branch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20981940045788dc69cecb22-15004262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a87ec4248a9e7d452f6e842ccface3395f042c6' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/menu/view/adminmenu_branch.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '20981940045788dc69cecb22-15004262',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'item' => 0,
    'sel_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc69d2c6f9_65403065',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc69d2c6f9_65403065')) {function content_5788dc69d2c6f9_65403065($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<li <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['child'])) {?> class="node"<?php }?><?php if ($_smarty_tpl->tpl_vars['item']->value['fields']['typelink']=='separator') {?> class="separator"<?php }?>>
    <?php if ($_smarty_tpl->tpl_vars['item']->value['fields']['typelink']!='separator') {?>
    <a <?php if (isset($_smarty_tpl->tpl_vars['sel_id']->value)&&$_smarty_tpl->tpl_vars['sel_id']->value==$_smarty_tpl->tpl_vars['item']->value['fields']['id']) {?>class="selected"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['item']->value['fields']['link'];?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('context'=>"adminmenu")); $_block_repeat=true; echo smarty_block_t(array('context'=>"adminmenu"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['fields']['title'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('context'=>"adminmenu"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
    <?php }?>
    <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['child'])) {?>
        <ul>
        <?php echo $_smarty_tpl->getSubTemplate ("adminmenu_branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('list'=>$_smarty_tpl->tpl_vars['item']->value['child']), 0);?>

        </ul>
    <?php }?>
</li>
<?php } ?><?php }} ?>
