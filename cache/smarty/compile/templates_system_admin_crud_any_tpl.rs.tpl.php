<?php /* Smarty version Smarty-3.1.18, created on 2016-12-06 10:03:28
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/crud_any.tpl" */ ?>
<?php /*%%SmartyHeaderCode:380183198584662c046b157-58461964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c973c62cff83c56b3a3f58cfcc67e0128b865c57' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/crud_any.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '380183198584662c046b157-58461964',
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
  'unifunc' => 'content_584662c058be00_81870429',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584662c058be00_81870429')) {function content_584662c058be00_81870429($_smarty_tpl) {?><?php if (!is_callable('smarty_function_urlmake')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.urlmake.php';
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
                    <?php echo $_smarty_tpl->tpl_vars['elements']->value['form'];?>

                    <div class="footerspace"></div>
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
