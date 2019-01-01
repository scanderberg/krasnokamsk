<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:51:50
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/crud_table_tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18605191855788dc66b67d53-03228453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8ba9f8155e9f86f95f2180fa942f224dc82da30' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/crud_table_tree.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '18605191855788dc66b67d53-03228453',
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
  'unifunc' => 'content_5788dc66cb7688_22605385',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc66cb7688_22605385')) {function content_5788dc66cb7688_22605385($_smarty_tpl) {?><?php if (!is_callable('smarty_function_urlmake')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.urlmake.php';
?><?php if (!$_smarty_tpl->tpl_vars['url']->value->isAjax()) {?>
<div class="crud-ajax-group">
    <div id="content-layout">
        <div class="viewport">
            <div class="updatable" data-url="<?php echo smarty_function_urlmake(array(),$_smarty_tpl);?>
">
<?php }?>
                <div id="clienthead">
                    <div class="c-head  top-p">
                        <div class="buttons">
                            <?php if ($_smarty_tpl->tpl_vars['elements']->value['topToolbar']) {?>
                                <?php echo $_smarty_tpl->tpl_vars['elements']->value['topToolbar']->getView();?>

                            <?php }?>
                        </div>                    
                        <h2><?php echo $_smarty_tpl->tpl_vars['elements']->value['formTitle'];?>
 <?php if (isset($_smarty_tpl->tpl_vars['elements']->value['topHelp'])) {?><a class="help">?</a><?php }?></h2>
                        <br class="clear">
                    </div>
                    <div class="c-help">
                        <?php echo $_smarty_tpl->tpl_vars['elements']->value['topHelp'];?>

                    </div>
                    
                    <div class="sepline">
                        <a href="<?php echo smarty_function_urlmake(array('viewcat'=>"top"),$_smarty_tpl);?>
" class="view-top" title="категории вверху"></a>            
                        <a href="<?php echo smarty_function_urlmake(array('viewcat'=>"left"),$_smarty_tpl);?>
" class="view-left act" title="категории слева"></a>
                    </div>
                </div>
                <?php echo $_smarty_tpl->tpl_vars['elements']->value['headerHtml'];?>

                <div class="columns">
                    <div class="left-column left-dark fullheight resizable-column">
                        <?php if (isset($_smarty_tpl->tpl_vars['elements']->value['treeFilter'])) {?>
                            <?php echo $_smarty_tpl->tpl_vars['elements']->value['treeFilter']->getView();?>

                        <?php } else { ?>
                        <div class="microspace"></div>
                        <?php }?>
                        <form method="POST" enctype="multipart/form-data" action="<?php echo smarty_function_urlmake(array(),$_smarty_tpl);?>
" id="tree-form" class="twisted-left">
                        <?php if (isset($_smarty_tpl->tpl_vars['elements']->value['tree'])) {?>
                            <?php echo $_smarty_tpl->tpl_vars['elements']->value['tree']->getView();?>

                        <?php }?>
                        </form>
                        <div class="footerspace"></div>
                    </div> <!-- .left-column -->
                    
                    <div class="right-column">
                        <div class="beforetable-line">
                            <?php if (isset($_smarty_tpl->tpl_vars['elements']->value['paginator'])) {?>
                                <?php echo $_smarty_tpl->tpl_vars['elements']->value['paginator']->getView(array('short'=>true));?>

                            <?php }?>                        
                            <?php if (isset($_smarty_tpl->tpl_vars['elements']->value['filter'])) {?>
                                <?php echo $_smarty_tpl->tpl_vars['elements']->value['filter']->getView();?>

                            <?php }?>
                        </div>
                        <?php if (!isset($_smarty_tpl->tpl_vars['elements']->value['filter'])&&!isset($_smarty_tpl->tpl_vars['elements']->value['paginator'])) {?><div class="microspace"></div><?php }?>
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
                <div class="clearboth"></div>
<?php if (!$_smarty_tpl->tpl_vars['url']->value->isAjax()) {?>
            </div> <!-- .updatable -->
        </div> <!-- .viewport -->
    </div> <!-- #content -->
        
    <div class="bottomToolbar">
        <div class="viewport">
            <div class="left-column" data-linked-form="#tree-form">
                <?php if ($_smarty_tpl->tpl_vars['elements']->value['treeBottomToolbar']) {?>
                    <?php echo $_smarty_tpl->tpl_vars['elements']->value['treeBottomToolbar']->getView();?>

                <?php }?>
            </div>
            <div class="right-column">
                <?php if ($_smarty_tpl->tpl_vars['elements']->value['bottomToolbar']) {?>
                    <?php echo $_smarty_tpl->tpl_vars['elements']->value['bottomToolbar']->getView();?>

                <?php }?>
            </div>
        </div>
    </div>    
</div>
<?php }?><?php }} ?>
