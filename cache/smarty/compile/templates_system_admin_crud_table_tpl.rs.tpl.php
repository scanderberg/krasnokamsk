<?php /* Smarty version Smarty-3.1.18, created on 2017-03-15 09:36:53
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/crud_table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111159185758c8e10525aed0-44005821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b14b2d11ff8723127b889d04a121b4aa0098fe6f' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/crud_table.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '111159185758c8e10525aed0-44005821',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'elements' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58c8e105331a37_55470296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c8e105331a37_55470296')) {function content_58c8e105331a37_55470296($_smarty_tpl) {?><?php if (!is_callable('smarty_function_urlmake')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.urlmake.php';
?><?php if (!$_smarty_tpl->tpl_vars['url']->value->isAjax()) {?>
<div class="crud-ajax-group">
    <div id="content-layout">
        <div class="viewport">
            <div class="updatable" data-url="<?php echo smarty_function_urlmake(array(),$_smarty_tpl);?>
">
<?php }?>
                <div id="clienthead">
                    <div class="c-head  top-p">
                        <h2><?php echo $_smarty_tpl->tpl_vars['elements']->value['formTitle'];?>
 <?php if (isset($_smarty_tpl->tpl_vars['elements']->value['topHelp'])) {?><a class="help">?</a><?php }?></h2>
                        <div class="buttons">
                            <?php if ($_smarty_tpl->tpl_vars['elements']->value['topToolbar']) {?>
                                <?php echo $_smarty_tpl->tpl_vars['elements']->value['topToolbar']->getView();?>

                            <?php }?>
                        </div>
                        <br class="clear">
                    </div>
                    <div class="c-help">
                        <?php echo $_smarty_tpl->tpl_vars['elements']->value['topHelp'];?>

                    </div>                                        
                    
                    <div class="sepline"></div>
                </div>
                <?php echo $_smarty_tpl->tpl_vars['elements']->value['headerHtml'];?>

                <div class="columns">
                    <div class="common-column">
                        <?php echo $_smarty_tpl->tpl_vars['elements']->value['beforeTableContent'];?>

                        <div class="beforetable-line<?php if (!isset($_smarty_tpl->tpl_vars['elements']->value['filter'])&&!isset($_smarty_tpl->tpl_vars['elements']->value['paginator'])) {?> sepspace<?php }?>">
                            <?php if (isset($_smarty_tpl->tpl_vars['elements']->value['paginator'])) {?>
                                <?php echo $_smarty_tpl->tpl_vars['elements']->value['paginator']->getView(array('short'=>true));?>

                            <?php }?>                        
                            <?php if (isset($_smarty_tpl->tpl_vars['elements']->value['filter'])) {?>
                                <?php echo $_smarty_tpl->tpl_vars['elements']->value['filter']->getView();?>

                            <?php }?>
                        </div>
                        <div class="clear-right"></div>
                        <?php if (isset($_smarty_tpl->tpl_vars['elements']->value['table'])) {?>
                            <form method="POST" enctype="multipart/form-data" action="<?php echo smarty_function_urlmake(array(),$_smarty_tpl);?>
" class="crud-list-form">
                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['elements']->value['hiddenFields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
">
                                <?php } ?> 
                                <?php echo $_smarty_tpl->tpl_vars['elements']->value['table']->getView();?>

                            </form>
                        <?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['elements']->value['paginator'])) {?>
                            <?php echo $_smarty_tpl->tpl_vars['elements']->value['paginator']->getView();?>

                        <?php }?>
                        <div class="footerspace"></div>
                    </div>
                </div> <!-- .columns -->

<?php if (!$_smarty_tpl->tpl_vars['url']->value->isAjax()) {?>
            </div> <!-- .updatable -->
        </div> <!-- .viewport -->
    </div> <!-- #content -->
        
    <?php if ($_smarty_tpl->tpl_vars['elements']->value['bottomToolbar']) {?>
        <div class="bottomToolbar">
            <div class="viewport">
                <div class="common-column">
                        <?php echo $_smarty_tpl->tpl_vars['elements']->value['bottomToolbar']->getView();?>

                </div>
            </div>
        </div>    
    <?php }?>
</div>
<?php }?><?php }} ?>
