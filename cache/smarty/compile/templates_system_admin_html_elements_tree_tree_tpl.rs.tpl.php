<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:51:51
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/tree/tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15588927205788dc672c2da4-48987721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '638aa6a20441d7ac98e2af1a75f829a885ed52d2' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/tree/tree.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '15588927205788dc672c2da4-48987721',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tree' => 0,
    'button' => 0,
    'tag' => 0,
    'key' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc673619a7_15342235',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc673619a7_15342235')) {function content_5788dc673619a7_15342235($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><?php echo smarty_function_addjs(array('file'=>"jquery.treeview.js",'basepath'=>"common"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"jquery.treesort.js",'basepath'=>"common"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"jquery.scrollto.js",'basepath'=>"common"),$_smarty_tpl);?>

        
<div class="activetree tree" data-uniq="<?php echo $_smarty_tpl->tpl_vars['tree']->value->options['uniq'];?>
">
    <ul class="treehead">
        <li>
            <?php if (!$_smarty_tpl->tpl_vars['tree']->value->options['noCheckbox']) {?>
            <div class="chk"><input type="checkbox" class="select-page" data-name="<?php echo $_smarty_tpl->tpl_vars['tree']->value->getCheckboxName();?>
"></div>
            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['tree']->value->options['noExpandCollapseButton']) {?>
            <a class="allplus" title="развернуть все">&nbsp;</a>
            <a class="allminus" title="свернуть все">&nbsp;</a>
            <?php }?>
            <?php  $_smarty_tpl->tpl_vars['button'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['button']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tree']->value->getHeadButtons(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['button']->key => $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['button']->value['tag']) {?><?php $_smarty_tpl->tpl_vars['tag'] = new Smarty_variable($_smarty_tpl->tpl_vars['button']->value['tag'], null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars['tag'] = new Smarty_variable("a", null, 0);?><?php }?>
                <<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
 <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = (($tmp = @$_smarty_tpl->tpl_vars['button']->value['attr'])===null||$tmp==='' ? array() : $tmp); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?> <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"<?php } ?>><?php echo $_smarty_tpl->tpl_vars['button']->value['text'];?>
</<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
>
            <?php } ?>
        </li>
    </ul>

    <ul class="treebody root<?php if ($_smarty_tpl->tpl_vars['tree']->value->options['sortable']) {?> treesort<?php }?>" data-sort-url="<?php echo $_smarty_tpl->tpl_vars['tree']->value->options['sortUrl'];?>
">
        <?php echo $_smarty_tpl->getSubTemplate ("%system%/admin/html_elements/tree/tree_branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('level'=>"0",'list'=>$_smarty_tpl->tpl_vars['tree']->value->getData()), 0);?>

        <?php if (!count($_smarty_tpl->tpl_vars['tree']->value->getData())) {?>
        <li class="empty-tree-row"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Нет элементов<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</li>
        <?php }?>
    </ul>
</div><?php }} ?>
