<?php /* Smarty version Smarty-3.1.18, created on 2016-07-16 18:10:11
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/menu/blocks/menu/punkt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2082501116578a4e53782925-21550876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f6ff1e94c0aaeb6a679664b32bb2333a0f51dc4' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/menu/blocks/menu/punkt.tpl',
      1 => 1459955402,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '2082501116578a4e53782925-21550876',
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
  'unifunc' => 'content_578a4e537d46b5_63693093',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578a4e537d46b5_63693093')) {function content_578a4e537d46b5_63693093($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu_level']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>

<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['fields']->getHref();?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['fields']['target_blank']) {?>target="_blank"<?php }?>><div class="leftMenu">
<b style="line-height: 24px!important;">
        <?php if ($_smarty_tpl->tpl_vars['item']->value['fields']['typelink']!='separator') {?><?php echo $_smarty_tpl->tpl_vars['item']->value['fields']['title'];?>
<?php } else { ?>&nbsp;<?php }?>
</b>
    <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['child'])) {?>
    <div class="childMenu">
        <?php echo $_smarty_tpl->getSubTemplate ("blocks/menu/punkt2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('menu_level'=>$_smarty_tpl->tpl_vars['item']->value['child']), 0);?>

		
    </div>
    <?php }?>
</div></a>


<?php } ?><?php }} ?>
