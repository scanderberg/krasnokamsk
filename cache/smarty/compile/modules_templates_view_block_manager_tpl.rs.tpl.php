<?php /* Smarty version Smarty-3.1.18, created on 2016-07-23 09:54:37
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/templates/view/block_manager.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1834417277579314ad805923-03036941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '549820671ff4df0c40da882f227d394685092c73' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/templates/view/block_manager.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '1834417277579314ad805923-03036941',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mod_js' => 0,
    'mod_css' => 0,
    'url' => 0,
    'context' => 0,
    'elements' => 0,
    'context_list' => 0,
    'key' => 0,
    'item' => 0,
    'currentPage' => 0,
    'pages' => 0,
    'page' => 0,
    'grid_system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_579314ad950cb9_49825479',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579314ad950cb9_49825479')) {function content_579314ad950cb9_49825479($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
if (!is_callable('smarty_function_addcss')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addcss.php';
if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><?php echo smarty_function_addjs(array('file'=>((string)$_smarty_tpl->tpl_vars['mod_js']->value)."jquery.blockeditor.js",'basepath'=>"root"),$_smarty_tpl);?>

<?php echo smarty_function_addcss(array('file'=>((string)$_smarty_tpl->tpl_vars['mod_css']->value)."manager.css",'basepath'=>"root"),$_smarty_tpl);?>

<?php echo smarty_function_addcss(array('file'=>"%templates%/bootstrap.css",'basepath'=>"common"),$_smarty_tpl);?>

<?php echo smarty_function_addcss(array('file'=>"common/960gs/960.css",'basepath'=>"common"),$_smarty_tpl);?>

<?php if (!$_smarty_tpl->tpl_vars['url']->value->isAjax()) {?>
<div class="crud-ajax-group">
    <div id="content">
        <div class="viewport">
            <div class="updatable" data-url="<?php echo smarty_function_adminUrl(array('context'=>$_smarty_tpl->tpl_vars['context']->value),$_smarty_tpl);?>
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
                    
                    <div class="sepline">
                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['context_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                        <div class="block-link<?php if ($_smarty_tpl->tpl_vars['context']->value==$_smarty_tpl->tpl_vars['key']->value) {?> act<?php }?>">
                            <a href="<?php echo smarty_function_adminUrl(array('context'=>$_smarty_tpl->tpl_vars['key']->value),$_smarty_tpl);?>
" class="block-link-item"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                            <?php if ($_smarty_tpl->tpl_vars['context']->value==$_smarty_tpl->tpl_vars['key']->value) {?>
                            <a href="<?php echo smarty_function_adminUrl(array('do'=>"contextOptions",'context'=>$_smarty_tpl->tpl_vars['key']->value),$_smarty_tpl);?>
" class="crud-edit block-link-options" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Настройки темы оформления<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"></a>
                            <?php }?>
                        </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="columns">
                    <div class="common-column">

                                    
                        <ul class="selector">
                            <li class="title">Страницы:</li>
                            <li <?php if ($_smarty_tpl->tpl_vars['currentPage']->value['route_id']=='default') {?>class="act"<?php }?>><a href="<?php echo smarty_function_adminUrl(array('context'=>$_smarty_tpl->tpl_vars['context']->value),$_smarty_tpl);?>
" class="call-update">По умолчанию</a>
                                <a class="crud-edit edit-page" href="<?php echo smarty_function_adminUrl(array('do'=>"editPage",'context'=>$_smarty_tpl->tpl_vars['context']->value),$_smarty_tpl);?>
" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Настройки страницы<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"></a>
                                <div class="rs-list-button">
                                    <a class="tool rs-dropdown-handler">&nbsp;</a>
                                    <ul class="rs-dropdown">
                                        <li class="first">
                                            <a href="<?php echo smarty_function_adminUrl(array('mod_controller'=>"pageseo-ctrl",'do'=>"edit",'id'=>"default",'context'=>$_smarty_tpl->tpl_vars['context']->value,'create'=>1),$_smarty_tpl);?>
" class="crud-edit">&nbsp;Настройки SEO</a>
                                        </li>
                                    </ul>
                                </div>
                                
                                
                            </li>
                            <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['page']->value['route_id']!='default') {?>
                                <li <?php if ($_smarty_tpl->tpl_vars['currentPage']->value['id']==$_smarty_tpl->tpl_vars['page']->value['id']) {?>class="act"<?php }?>><a class="call-update" href="<?php echo smarty_function_adminUrl(array('page_id'=>$_smarty_tpl->tpl_vars['page']->value['id'],'context'=>$_smarty_tpl->tpl_vars['context']->value),$_smarty_tpl);?>
"><?php if ($_smarty_tpl->tpl_vars['page']->value->getRoute()!==null) {?><?php echo $_smarty_tpl->tpl_vars['page']->value->getRoute()->getDescription();?>
<?php } else { ?>Маршрут не найден<?php }?></a>
                                    <a class="crud-edit edit-page" href="<?php echo smarty_function_adminUrl(array('do'=>"editPage",'id'=>$_smarty_tpl->tpl_vars['page']->value['id']),$_smarty_tpl);?>
" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Настройки страницы<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"></a>
                                    <div class="rs-list-button">
                                        <a class="tool rs-dropdown-handler">&nbsp;</a>
                                        <ul class="rs-dropdown">
                                            <li class="first">
                                                <a href="<?php echo smarty_function_adminUrl(array('mod_controller'=>"pageseo-ctrl",'do'=>"edit",'id'=>$_smarty_tpl->tpl_vars['page']->value['route_id'],'create'=>1),$_smarty_tpl);?>
" class="crud-edit">Настройки SEO</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo smarty_function_adminUrl(array('do'=>"delPage",'id'=>$_smarty_tpl->tpl_vars['page']->value['id']),$_smarty_tpl);?>
" class="crud-remove-one"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
удалить<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
                                            </li>
                                        </ul>
                                    </div>                                    
                                </li>
                                <?php }?>
                            <?php } ?>
                        </ul>
                        <div class="clear"></div>
                        <?php echo $_smarty_tpl->getSubTemplate ("%templates%/gs/".((string)$_smarty_tpl->tpl_vars['grid_system']->value)."/pageview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    </div>
                </div> <!-- .columns -->

<?php if (!$_smarty_tpl->tpl_vars['url']->value->isAjax()) {?>
            </div> <!-- .updatable -->
        </div> <!-- .viewport -->
    </div> <!-- #content -->
</div>
<script>
    $.contentReady(function() {
        $('.pageview').blockEditor({
            sortContainerUrl: '<?php echo smarty_function_adminUrl(array('do'=>"ajaxMoveContainer"),$_smarty_tpl);?>
',
            sortSectionUrl: '<?php echo smarty_function_adminUrl(array('do'=>"ajaxMoveSection"),$_smarty_tpl);?>
',
            sortBlockUrl: '<?php echo smarty_function_adminUrl(array('do'=>"ajaxMoveBlock"),$_smarty_tpl);?>
',
            toggleViewBlock: '<?php echo smarty_function_adminUrl(array('do'=>"ajaxToggleViewModule"),$_smarty_tpl);?>
'
        });
    });
</script>
<?php }?><?php }} ?>
