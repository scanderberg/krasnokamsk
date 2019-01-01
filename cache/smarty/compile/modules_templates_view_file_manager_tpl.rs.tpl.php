<?php /* Smarty version Smarty-3.1.18, created on 2016-07-23 09:54:46
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/templates/view/file_manager.tpl" */ ?>
<?php /*%%SmartyHeaderCode:711315278579314b68b0bd9-50295749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2355107766f12c197a83e98f94a50ca4e5eb8844' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/templates/view/file_manager.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '711315278579314b68b0bd9-50295749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mod_js' => 0,
    'url' => 0,
    'elements' => 0,
    'list' => 0,
    'root_sections' => 0,
    'key' => 0,
    'item' => 0,
    'section' => 0,
    'one_ext' => 0,
    'allow_edit_ext' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_579314b6a6d633_30586229',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579314b6a6d633_30586229')) {function content_579314b6a6d633_30586229($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addcss')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addcss.php';
if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><?php echo smarty_function_addcss(array('file'=>"common/jquery.lightbox.packed.css",'basepath'=>"common"),$_smarty_tpl);?>

<?php echo smarty_function_addcss(array('file'=>"%templates%/uploadfiles.css"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"jquery.lightbox.min.js",'basepath'=>"common"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>((string)$_smarty_tpl->tpl_vars['mod_js']->value)."tplmanager.js",'basepath'=>"root"),$_smarty_tpl);?>

<?php if (!$_smarty_tpl->tpl_vars['url']->value->isAjax()) {?>
<div class="crud-ajax-group">
    <div id="content-layout">
        <div class="viewport">
            <div class="updatable" data-url="<?php echo smarty_function_adminUrl(array(),$_smarty_tpl);?>
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
                <div class="columns">
                    <div class="common-column tmanager">
                        <div class="margvert10">
                               <div class="category-filter">
                                        <div class="category-selector">
                                            <span class="current backcolor">
                                                <?php if ($_smarty_tpl->tpl_vars['list']->value['epath']['type']=='theme') {?>
                                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Тема<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:<?php echo $_smarty_tpl->tpl_vars['root_sections']->value['themes'][$_smarty_tpl->tpl_vars['list']->value['epath']['type_value']]['title'];?>

                                                <?php } else { ?>
                                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Модуль<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:<?php echo $_smarty_tpl->tpl_vars['root_sections']->value['modules'][$_smarty_tpl->tpl_vars['list']->value['epath']['type_value']]['title'];?>

                                                <?php }?>
                                            </span><a class="dropdown-handler">&nbsp;</a>
                                            <div class="list">
                                                <ul class="f-root-ul">
                                                    <li class="themes">
                                                        <div class="name"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Темы<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
                                                        <ul>
                                                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['root_sections']->value['themes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                                            <li><a class="call-update" href="<?php echo smarty_function_adminUrl(array('mod_controller'=>"templates-filemanager",'path'=>"theme:".((string)$_smarty_tpl->tpl_vars['key']->value)),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></li>
                                                            <?php } ?>
                                                        </ul>
                                                    </li>
                                                    <li class="modules">
                                                        <div class="name"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Модули<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
                                                        <ul>
                                                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['root_sections']->value['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                                            <li><a class="call-update" href="<?php echo smarty_function_adminUrl(array('mod_controller'=>"templates-filemanager",'path'=>"module:".((string)$_smarty_tpl->tpl_vars['key']->value)),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></li>
                                                            <?php } ?>                                                        
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>                        
                                    
                                 <div class="folderpath">
                                    <span class="backcolor">&nbsp;</span>
                                    <a class="root call-update" title="корневая папка" href="<?php echo smarty_function_adminUrl(array('mod_controller'=>"templates-filemanager",'path'=>((string)$_smarty_tpl->tpl_vars['list']->value['epath']['type']).":".((string)$_smarty_tpl->tpl_vars['list']->value['epath']['type_value'])."/"),$_smarty_tpl);?>
"></a>
                                    <?php  $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['section']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value['epath']['sections']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['section']->key => $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['section']->key;
?>
                                        <a class="call-update" href="<?php echo smarty_function_adminUrl(array('mod_controller'=>"templates-filemanager",'path'=>((string)$_smarty_tpl->tpl_vars['key']->value)),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['section']->value;?>
</a> /
                                    <?php } ?>
                                    <span class="filetypes">*.<?php  $_smarty_tpl->tpl_vars['one_ext'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_ext']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['allow_extension']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['one_ext']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['one_ext']->key => $_smarty_tpl->tpl_vars['one_ext']->value) {
$_smarty_tpl->tpl_vars['one_ext']->_loop = true;
 $_smarty_tpl->tpl_vars['one_ext']->index++;
 $_smarty_tpl->tpl_vars['one_ext']->first = $_smarty_tpl->tpl_vars['one_ext']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["extlist"]['first'] = $_smarty_tpl->tpl_vars['one_ext']->first;
?><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['extlist']['first']) {?>,<?php }?><?php echo $_smarty_tpl->tpl_vars['one_ext']->value;?>
<?php } ?></span>
                                </div>                                    
                        </div>
                            
                        <?php if (count($_smarty_tpl->tpl_vars['list']->value['items'])||count($_smarty_tpl->tpl_vars['list']->value['epath']['sections'])) {?>
                        <div class="file-list-container" data-current-folder="<?php echo $_smarty_tpl->tpl_vars['list']->value['epath']['public_dir'];?>
">
                            <ul class="file-list">
                                <?php if (count($_smarty_tpl->tpl_vars['list']->value['epath']['sections'])) {?>
                                    <li class="dir"><a class="call-update" href="<?php echo smarty_function_adminUrl(array('mod_controller'=>"templates-filemanager",'path'=>$_smarty_tpl->tpl_vars['list']->value['epath']['parent']),$_smarty_tpl);?>
">..</a></li>
                                <?php }?>                            
                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['type']=='dir') {?>
                                        <li class="item dir" data-path="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"><a class="call-update" href="<?php echo smarty_function_adminUrl(array('mod_controller'=>"templates-filemanager",'path'=>$_smarty_tpl->tpl_vars['item']->value['link']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
                                            <span class="tools">
                                                <div class="rs-list-button">
                                                    <a class="tool rs-dropdown-handler"></a>
                                                    <ul class="rs-dropdown">
                                                        <li class="first"><a class="rename" data-old-value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" data-url="<?php echo smarty_function_adminUrl(array('mod_controller'=>"templates-filemanager",'do'=>"rename",'path'=>$_smarty_tpl->tpl_vars['item']->value['link']),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
переименовать<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
                                                        <li><a class="delete" href="<?php echo smarty_function_adminUrl(array('mod_controller'=>"templates-filemanager",'do'=>"delete",'path'=>$_smarty_tpl->tpl_vars['item']->value['link']),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
удалить<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
                                                    </ul>
                                                </div>
                                            </span>
                                        </li>
                                    <?php } else { ?>
                                         <li class="item file <?php echo $_smarty_tpl->tpl_vars['item']->value['ext'];?>
" data-path="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
.<?php echo $_smarty_tpl->tpl_vars['item']->value['ext'];?>
">
                                            <?php if (isset($_smarty_tpl->tpl_vars['allow_edit_ext']->value[$_smarty_tpl->tpl_vars['item']->value['ext']])) {?>
                                            <a class="crud-edit" href="<?php echo smarty_function_adminUrl(array('mod_controller'=>"templates-filemanager",'do'=>"edit",'path'=>$_smarty_tpl->tpl_vars['item']->value['path'],'file'=>$_smarty_tpl->tpl_vars['item']->value['filename']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
.<span class="ext"><?php echo $_smarty_tpl->tpl_vars['item']->value['ext'];?>
</span></a>
                                            <?php } else { ?>
                                            <a rel='lightbox-image-tour' href="<?php echo $_smarty_tpl->tpl_vars['list']->value['epath']['relative_rootpath'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['filename'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
.<span class="ext"><?php echo $_smarty_tpl->tpl_vars['item']->value['ext'];?>
</span></a>
                                            <?php }?>
                                            <span class="tools">
                                                <?php if (isset($_smarty_tpl->tpl_vars['allow_edit_ext']->value[$_smarty_tpl->tpl_vars['item']->value['ext']])) {?>
                                                <a href="<?php echo smarty_function_adminUrl(array('mod_controller'=>"templates-filemanager",'do'=>"edit",'path'=>$_smarty_tpl->tpl_vars['item']->value['path'],'file'=>$_smarty_tpl->tpl_vars['item']->value['filename']),$_smarty_tpl);?>
" class="tool edit crud-edit"></a>
                                                <?php }?>
                                                <div class="rs-list-button">
                                                    <a class="tool rs-dropdown-handler"></a>
                                                    <ul class="rs-dropdown">
                                                        <li class="first"><a target="_blank" href="<?php echo smarty_function_adminUrl(array('mod_controller'=>"templates-filemanager",'do'=>"ajaxDownload",'path'=>$_smarty_tpl->tpl_vars['item']->value['link']),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
скачать<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
                                                        <li><a class="rename" data-old-value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
.<?php echo $_smarty_tpl->tpl_vars['item']->value['ext'];?>
" data-url="<?php echo smarty_function_adminUrl(array('mod_controller'=>"templates-filemanager",'do'=>"rename"),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
переименовать<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
                                                        <li><a class="delete" href="<?php echo smarty_function_adminUrl(array('mod_controller'=>"templates-filemanager",'do'=>"delete",'path'=>$_smarty_tpl->tpl_vars['item']->value['link']),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
удалить<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
                                                    </ul>
                                                </div>
                                            </span>
                                        </li>   
                                    <?php }?>
                                <?php } ?>
                            </ul>

                            <div class="clear"></div>
                        </div>
                            <?php } else { ?>
                                <div class="empty-folder">
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Пустой каталог<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                </div>
                            
                            
                            <?php }?>                        
                                            
                        <div class="footerspace"></div>
                    </div>
                </div> <!-- .columns -->

<?php if (!$_smarty_tpl->tpl_vars['url']->value->isAjax()) {?>
            </div> <!-- .updatable -->
        </div> <!-- .viewport -->
    </div> <!-- #content -->

</div>
<?php }?>

<script>

$.contentReady(function() {
    $("a[rel='lightbox-image-tour']").lightBox({
        showDetails:false
    });
});

</script><?php }} ?>
