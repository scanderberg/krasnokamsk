<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:52:33
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/menu/blocks/menu/branch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19245765605788dc913b9b88-87408257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0539dfe648c30a932ec7d8287a27f64da541635f' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/menu/blocks/menu/branch.tpl',
      1 => 1458663448,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '19245765605788dc913b9b88-87408257',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu_level' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc9141f5d5_95220497',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc9141f5d5_95220497')) {function content_5788dc9141f5d5_95220497($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu_level']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>

<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['fields']->getHref();?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['fields']['target_blank']) {?>target="_blank"<?php }?>>
<li>

        <?php if ($_smarty_tpl->tpl_vars['item']->value['fields']['typelink']!='separator') {?><?php echo $_smarty_tpl->tpl_vars['item']->value['fields']['title'];?>
<?php } else { ?>&nbsp;<?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['child'])) {?>
    <ul>
        <?php echo $_smarty_tpl->getSubTemplate ("blocks/menu/branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('menu_level'=>$_smarty_tpl->tpl_vars['item']->value['child']), 0);?>

    </ul>
    <?php }?>
</li>
</a>

<?php } ?><?php }} ?>
