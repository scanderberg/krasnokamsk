<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:51:51
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/tree/tree_branch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7422694425788dc6736ccf0-43523654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbc7414823c8a09ee011da4cfea492bd46103737' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/tree/tree_branch.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '7422694425788dc6736ccf0-43523654',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'tree' => 0,
    'item' => 0,
    'cell' => 0,
    'level' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc674290a0_51979694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc674290a0_51979694')) {function content_5788dc674290a0_51979694($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_devnull')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/modifier.devnull.php';
?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
<li class="<?php if (isset($_smarty_tpl->tpl_vars['tree']->value->options['disabledField'])&&$_smarty_tpl->tpl_vars['item']->value['fields'][$_smarty_tpl->tpl_vars['tree']->value->options['disabledField']]===$_smarty_tpl->tpl_vars['tree']->value->options['disabledValue']) {?>disabled<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['tree']->value->options['activeField'])&&$_smarty_tpl->tpl_vars['tree']->value->options['activeValue']==$_smarty_tpl->tpl_vars['item']->value['fields'][$_smarty_tpl->tpl_vars['tree']->value->options['activeField']]) {?>current<?php }?><?php if ($_smarty_tpl->tpl_vars['item']->value['fields'][$_smarty_tpl->tpl_vars['tree']->value->options['classField']]) {?> <?php echo $_smarty_tpl->tpl_vars['item']->value['fields'][$_smarty_tpl->tpl_vars['tree']->value->options['classField']];?>
<?php }?>" <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['fields']['noDraggable'])) {?>data-notmove="notmove"<?php }?> data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['fields'][$_smarty_tpl->tpl_vars['tree']->value->options['sortIdField']];?>
">
    <div class="chk">
        <?php if (!$_smarty_tpl->tpl_vars['item']->value['fields']['noCheckbox']&&!$_smarty_tpl->tpl_vars['tree']->value->options['noCheckbox']) {?>
        <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['tree']->value->getCheckboxName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['fields'][$_smarty_tpl->tpl_vars['tree']->value->options['activeField']];?>
" <?php if ($_smarty_tpl->tpl_vars['tree']->value->isChecked($_smarty_tpl->tpl_vars['item']->value['fields'][$_smarty_tpl->tpl_vars['tree']->value->options['activeField']])) {?>checked<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['fields']['disabledCheckbox']) {?>disabled<?php }?>>
        <?php }?>
    </div>
    <div class="line">
        <div class="toggle <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['child'])) {?><?php if ($_smarty_tpl->tpl_vars['item']->value['fields']['closed']) {?>plus<?php } else { ?>minus<?php }?><?php } else { ?>branch<?php }?>"></div>
        <?php if ($_smarty_tpl->tpl_vars['tree']->value->options['sortable']) {?><div class="move<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['fields']['noDraggable'])) {?> no-move<?php }?>"></div><?php }?>
        <?php if (!$_smarty_tpl->tpl_vars['item']->value['fields']['noRedMarker']) {?>
        <div class="redmarker"></div>
        <?php }?>
        <div class="data">
            <div class="textvalue">
            <?php $_smarty_tpl->tpl_vars['cell'] = new Smarty_variable($_smarty_tpl->tpl_vars['tree']->value->getMainColumn($_smarty_tpl->tpl_vars['item']->value['fields']), null, 0);?>
            <?php if (isset($_smarty_tpl->tpl_vars['cell']->value->property['href'])) {?><a href="<?php echo $_smarty_tpl->tpl_vars['cell']->value->getHref();?>
" class="call-update"><?php }?>
                <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['cell']->value->getBodyTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cell'=>$_smarty_tpl->tpl_vars['cell']->value), 0);?>

            <?php if (isset($_smarty_tpl->tpl_vars['cell']->value->property['href'])) {?></a><?php }?>
            </div>
            <?php if (empty($_smarty_tpl->tpl_vars['item']->value['fields']['noOtherColumns'])) {?>
                <?php if (isset($_smarty_tpl->tpl_vars['item']->value['fields']['treeTools'])) {?>
                    <?php echo smarty_modifier_devnull($_smarty_tpl->tpl_vars['item']->value['fields']['treeTools']->setRow($_smarty_tpl->tpl_vars['item']->value['fields']));?>

                    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['item']->value['fields']['treeTools']->getBodyTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cell'=>$_smarty_tpl->tpl_vars['item']->value['fields']['treeTools']), 0);?>

                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['tree']->value->getTools()) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['tree']->value->getTools()->getBodyTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cell'=>$_smarty_tpl->tpl_vars['tree']->value->getTools($_smarty_tpl->tpl_vars['item']->value['fields'])), 0);?>

                    <?php }?>
                <?php }?>
            <?php }?>
        </div>
    </div>
    <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['child'])) {?>
    <ul class="childroot" <?php if (($_smarty_tpl->tpl_vars['item']->value['fields']['closed'])) {?>style="display:none"<?php }?>>
        <?php echo $_smarty_tpl->getSubTemplate ("%system%/admin/html_elements/tree/tree_branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('list'=>$_smarty_tpl->tpl_vars['item']->value['child'],'level'=>$_smarty_tpl->tpl_vars['level']->value+1), 0);?>

    </ul>
    <?php }?>    
</li>
<?php } ?><?php }} ?>
