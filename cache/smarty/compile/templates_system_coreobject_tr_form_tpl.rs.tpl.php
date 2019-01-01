<?php /* Smarty version Smarty-3.1.18, created on 2018-04-03 14:43:43
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/coreobject/tr_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3693371865ac368efc6c8a1-74147484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbbc5f0a057aa527854ef25ee96fd659a85b6d58' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/coreobject/tr_form.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '3693371865ac368efc6c8a1-74147484',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'switch' => 0,
    'prop' => 0,
    'groups' => 0,
    'data' => 0,
    'item' => 0,
    'name' => 0,
    'issetUserTemplate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ac368efd1c731_17147163',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac368efd1c731_17147163')) {function content_5ac368efd1c731_17147163($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['groups'] = new Smarty_variable($_smarty_tpl->tpl_vars['prop']->value->getGroups(false,$_smarty_tpl->tpl_vars['switch']->value), null, 0);?>

<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
        <?php if (get_class($_smarty_tpl->tpl_vars['item']->value)=='RS\Orm\Type\UserTemplate') {?>
            {include file=$elem.__<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
->getRenderTemplate() field=$elem.__<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
}
            <?php $_smarty_tpl->tpl_vars['issetUserTemplate'] = new Smarty_variable(true, null, 0);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['item']->value->isHidden()) {?>
            {include file=$elem.__<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
->getRenderTemplate() field=$elem.__<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
}
        <?php }?>                        
    <?php } ?>
<?php } ?>

<?php if (!$_smarty_tpl->tpl_vars['issetUserTemplate']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
            <?php if (!$_smarty_tpl->tpl_vars['item']->value->isHidden()) {?>
            
            <tr>
                <td class="otitle">{$elem.__<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
->getTitle()}&nbsp;&nbsp;{if $elem.__<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
->getHint() != ''}<a class="help-icon" title="{$elem.__<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
->getHint()|escape}">?</a>{/if}
                </td>
                <td>{include file=$elem.__<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
->getRenderTemplate() field=$elem.__<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
}</td>
            </tr>
            <?php }?>
        <?php } ?>
    <?php } ?>
<?php }?><?php }} ?>
