<?php /* Smarty version Smarty-3.1.18, created on 2016-07-16 07:40:27
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/crud_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14656076185789babbdc5b26-38828833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'beb3a14803a580db3c790ee058a1b734700013e7' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/crud_form.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '14656076185789babbdc5b26-38828833',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app' => 0,
    'url' => 0,
    'elements' => 0,
    'middleclass' => 0,
    'data' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5789babbe58cb7_25032773',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5789babbe58cb7_25032773')) {function content_5789babbe58cb7_25032773($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['app']->value->autoloadScripsAjaxBefore();?>

<div class="crud-ajax-group">
    <?php if (!$_smarty_tpl->tpl_vars['url']->value->isAjax()) {?>
    <div id="content-layout">
        <div class="viewport">
    <?php }?>        
            <?php if ($_smarty_tpl->tpl_vars['elements']->value['topToolbar']) {?>
                    <div class="c-head">
                        <div class="buttons pad10">
                            <?php echo $_smarty_tpl->tpl_vars['elements']->value['topToolbar']->getView();?>

                        </div>
                        <div class="titlebox"><?php echo $_smarty_tpl->tpl_vars['elements']->value['formTitle'];?>
</div>
                    </div>
            <?php } else { ?>
                <div class="titlebox"><?php echo $_smarty_tpl->tpl_vars['elements']->value['formTitle'];?>
</div>
            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['url']->value->isAjax()) {?><div class="sepline sep-top-form"></div><?php }?>
            <?php echo $_smarty_tpl->tpl_vars['elements']->value['headerHtml'];?>

            <div class="middlebox <?php echo $_smarty_tpl->tpl_vars['middleclass']->value;?>
">
                <div class="crud-form-error">
                    <?php if (count($_smarty_tpl->tpl_vars['elements']->value['formErrors'])) {?>
                        <ul class="error-list">
                            <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['elements']->value['formErrors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
                                <li>
                                    <div class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['class'])===null||$tmp==='' ? "field" : $tmp);?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['fieldname'];?>
<i class="cor"></i></div>
                                    <div class="text">
                                        <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
                                        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                                        <?php } ?>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php }?>
                </div>
                <div class="crud-form-success text-success"></div>
                <?php echo $_smarty_tpl->tpl_vars['elements']->value['form'];?>

            </div>
        <?php if (!$_smarty_tpl->tpl_vars['url']->value->isAjax()) {?>
            <div class="footerspace"></div>
        </div> <!-- .viewport -->
    </div> <!-- .content -->
    <?php }?>
    <div class="bottomToolbar zindex-dlg">
        <div class="viewport">
            <div class="common-column">
                <?php if (isset($_smarty_tpl->tpl_vars['elements']->value['bottomToolbar'])) {?>
                    <?php echo $_smarty_tpl->tpl_vars['elements']->value['bottomToolbar']->getView();?>

                <?php }?>
            </div>
        </div>
    </div>                       
</div>
<?php echo $_smarty_tpl->tpl_vars['app']->value->autoloadScripsAjaxAfter();?>
<?php }} ?>
