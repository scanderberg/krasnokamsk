<?php /* Smarty version Smarty-3.1.18, created on 2017-03-15 09:33:12
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/coreobject/src_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178576307858c8e0282464f2-67102726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd253540609332dc3267d21de7ec55ffd7db275c5' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/coreobject/src_form.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '178576307858c8e0282464f2-67102726',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
    'switch' => 0,
    'prop' => 0,
    'groups' => 0,
    'i' => 0,
    'data' => 0,
    'item' => 0,
    'name' => 0,
    'issetUserTemplate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58c8e028777fc3_71784960',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c8e028777fc3_71784960')) {function content_58c8e028777fc3_71784960($_smarty_tpl) {?>
<div class="formbox" <?php echo $_smarty_tpl->tpl_vars['elem']->value->getClassParameter('formbox_attr_line');?>
>
    <?php $_smarty_tpl->tpl_vars['groups'] = new Smarty_variable($_smarty_tpl->tpl_vars['prop']->value->getGroups(false,$_smarty_tpl->tpl_vars['switch']->value), null, 0);?>
    <?php if (count($_smarty_tpl->tpl_vars['groups']->value)>1) {?>
    
    <div class="tabs">
        <ul class="tab-container">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
 $_smarty_tpl->tpl_vars['item']->index++;
 $_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tabs']['first'] = $_smarty_tpl->tpl_vars['item']->first;
?>
            <li class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['tabs']['first']) {?> act first<?php }?>"><a data-view="tab<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">{$elem->getPropertyIterator()->getGroupName(<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
)}</a></li>
        <?php } ?>
        </ul>
        <form method="POST" action="{urlmake}" enctype="multipart/form-data" class="crud-form">    
            <input type="submit" value="" style="display:none"/>
            <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['data']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['data']->key;
 $_smarty_tpl->tpl_vars['data']->index++;
 $_smarty_tpl->tpl_vars['data']->first = $_smarty_tpl->tpl_vars['data']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tab']['first'] = $_smarty_tpl->tpl_vars['data']->first;
?>
            <div class="frame<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['tab']['first']) {?> nodisp<?php }?>" data-name="tab<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                <?php if (count($_smarty_tpl->tpl_vars['data']->value['items'])) {?>
                    <?php $_smarty_tpl->tpl_vars['issetUserTemplate'] = new Smarty_variable(false, null, 0);?>                
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
                    <?php if (!$_smarty_tpl->tpl_vars['issetUserTemplate']->value) {?>
                        <table class="otable">
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
                        </table>
                    <?php }?>
                <?php }?>
            </div>
            <?php } ?>
        </form>
    </div>
    <?php } else { ?>
        
        <form method="POST" action="{urlmake}" enctype="multipart/form-data" class="crud-form">
            <input type="submit" value="" style="display:none">
            <div class="notabs">
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
                    <table class="otable">
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
                    </table>
                <?php }?>
            </div>
        </form>
    <?php }?>
</div><?php }} ?>