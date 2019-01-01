<?php /* Smarty version Smarty-3.1.18, created on 2016-12-06 10:03:43
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/crud_tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:892839917584662cf828720-28948476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8cc3153e41de81d1af8229f5e774efacb177de1' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/crud_tree.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '892839917584662cf828720-28948476',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'elements' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_584662cf9015a9_84388952',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584662cf9015a9_84388952')) {function content_584662cf9015a9_84388952($_smarty_tpl) {?><?php if (!is_callable('smarty_function_urlmake')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.urlmake.php';
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
                        <div class="beforetable-line<?php if (!isset($_smarty_tpl->tpl_vars['elements']->value['filter'])) {?> sepspace<?php }?>">
                            <?php if (isset($_smarty_tpl->tpl_vars['elements']->value['filter'])) {?>
                                <?php echo $_smarty_tpl->tpl_vars['elements']->value['filter']->getView();?>

                            <?php }?>
                        </div>
                        <div class="clear-right"></div>
                        <?php if (isset($_smarty_tpl->tpl_vars['elements']->value['tree'])) {?>
                            <form method="POST" enctype="multipart/form-data" action="<?php echo smarty_function_urlmake(array(),$_smarty_tpl);?>
" class="crud-list-form">
                                <?php echo $_smarty_tpl->tpl_vars['elements']->value['tree']->getView();?>

                            </form>
                        <?php }?>
                        <div class="footerspace"></div>
                    </div>
                </div> <!-- .columns -->

<?php if (!$_smarty_tpl->tpl_vars['url']->value->isAjax()) {?>
            </div> <!-- .updatable -->
        </div> <!-- .viewport -->
    </div> <!-- #content -->
        
    <div class="bottomToolbar">
        <div class="viewport">
            <div class="common-column">
                <?php if ($_smarty_tpl->tpl_vars['elements']->value['bottomToolbar']) {?>
                    <?php echo $_smarty_tpl->tpl_vars['elements']->value['bottomToolbar']->getView();?>

                <?php }?>
            </div>
        </div>
    </div>    
</div>
<?php }?><?php }} ?>
