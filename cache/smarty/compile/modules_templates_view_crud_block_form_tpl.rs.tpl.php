<?php /* Smarty version Smarty-3.1.18, created on 2018-04-04 06:39:16
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/templates/view/crud-block-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19950293075ac448e4972d60-52369500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'caccb8f547dddfe026b34d0af184cd41c09c0a5f' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/templates/view/crud-block-form.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '19950293075ac448e4972d60-52369500',
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
  'unifunc' => 'content_5ac448e49c5dc0_52641555',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac448e49c5dc0_52641555')) {function content_5ac448e49c5dc0_52641555($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['app']->value->autoloadScripsAjaxBefore();?>

<div class="crud-ajax-group">
    <?php if (!$_smarty_tpl->tpl_vars['url']->value->isAjax()) {?>
    <div id="content-layout">
        <div class="viewport">
    <?php }?>
            <div class="titlebox"><?php echo $_smarty_tpl->tpl_vars['elements']->value['formTitle'];?>
</div>
            <?php if (!$_smarty_tpl->tpl_vars['url']->value->isAjax()) {?><div class="sepline sep-top-form"></div><?php }?>
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
                <div class="block-information inform-block" style="margin-top:10px;">
                    <table>
                        <tr>
                            <td align="right">Контроллер:</td>
                            <td><strong><?php echo $_smarty_tpl->tpl_vars['elements']->value['block_controller'];?>
</strong></td>
                        </tr>
                    </table>
                </div>
                <?php echo $_smarty_tpl->tpl_vars['elements']->value['form'];?>

                <?php if (empty($_smarty_tpl->tpl_vars['elements']->value['form'])) {?>
                    <div class="no_block_options">
                        У блока нет настроек
                    </div>
                <?php }?>
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
