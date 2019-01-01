<?php /* Smarty version Smarty-3.1.18, created on 2016-07-16 07:40:26
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/files/view/filesblock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13241592485789babac53d35-88302077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a37bbb3b54bddcc56b66aa3fce4e59a1c346c01e' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/files/view/filesblock.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '13241592485789babac53d35-88302077',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link_type' => 0,
    'link_id' => 0,
    'max_upload_size' => 0,
    'files' => 0,
    'file' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5789babada96f9_61138188',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5789babada96f9_61138188')) {function content_5789babada96f9_61138188($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
if (!is_callable('smarty_function_addcss')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addcss.php';
if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
if (!is_callable('smarty_modifier_format_filesize')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/modifier.format_filesize.php';
?><?php echo smarty_function_addjs(array('file'=>"fileupload/jquery.iframe-transport.js",'basepath'=>"common"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"fileupload/jquery.fileupload.js",'basepath'=>"common"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"jquery.tablednd.js",'basepath'=>"common"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"%files%/files.js"),$_smarty_tpl);?>

<?php echo smarty_function_addcss(array('file'=>"%files%/files.css "),$_smarty_tpl);?>

<div class="files-block" data-urls='{ "fileUpload": "<?php echo smarty_function_adminUrl(array('files_do'=>"Upload",'mod_controller'=>"files-block-files",'link_type'=>$_smarty_tpl->tpl_vars['link_type']->value,'link_id'=>$_smarty_tpl->tpl_vars['link_id']->value),$_smarty_tpl);?>
",
                                      "fileDelete": "<?php echo smarty_function_adminUrl(array('files_do'=>"Delete",'mod_controller'=>"files-block-files",'link_type'=>$_smarty_tpl->tpl_vars['link_type']->value,'link_id'=>$_smarty_tpl->tpl_vars['link_id']->value),$_smarty_tpl);?>
",
                                      "fileEdit": "<?php echo smarty_function_adminUrl(array('files_do'=>"Edit",'mod_controller'=>"files-block-files",'link_type'=>$_smarty_tpl->tpl_vars['link_type']->value,'link_id'=>$_smarty_tpl->tpl_vars['link_id']->value),$_smarty_tpl);?>
",
                                      "fileChangeAccess": "<?php echo smarty_function_adminUrl(array('files_do'=>"changeAccess",'mod_controller'=>"files-block-files",'link_type'=>$_smarty_tpl->tpl_vars['link_type']->value,'link_id'=>$_smarty_tpl->tpl_vars['link_id']->value),$_smarty_tpl);?>
" }'>
    <div class="upload-block">
        <span class="add"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
добавить файлы<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <input type="file" class="fileinput" multiple="" name="files[]">
        </span>
        <div class="dragzone"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('size'=>smarty_modifier_format_filesize($_smarty_tpl->tpl_vars['max_upload_size']->value))); $_block_repeat=true; echo smarty_block_t(array('size'=>smarty_modifier_format_filesize($_smarty_tpl->tpl_vars['max_upload_size']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Чтобы начать загрузку, перетащите сюда файлы. Максимальный размер файлов для загрузки - %size<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('size'=>smarty_modifier_format_filesize($_smarty_tpl->tpl_vars['max_upload_size']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
    </div>
    <div class="files-container<?php if (!$_smarty_tpl->tpl_vars['files']->value) {?> hidden<?php }?>">
        <br>
        <table data-sort-request="<?php echo smarty_function_adminUrl(array('files_do'=>"Move",'mod_controller'=>"files-block-files",'link_type'=>$_smarty_tpl->tpl_vars['link_type']->value,'link_id'=>$_smarty_tpl->tpl_vars['link_id']->value),$_smarty_tpl);?>
" class="rs-table editable-table files-list virtual-form">
            <thead>
                <tr>
                    <th style="width:26px" class="chk">
                        <div class="chkhead-block">
                            <input type="checkbox" class="chk_head select-page" data-name="files[]" alt="">                        
                        </div>
                    </th>
                    <th width="20" class="drag"><span class="sortable sortdot asc"><span></span></span></th>                        
                    <th class="title">Имя файла</th>
                    <th class="description">Описание</th>
                    <th class="size">Размер</th>
                    <th class="access">Доступ</th>
                    <th class="actions"></th>
                </tr>
            </thead>
            <tbody> 
                <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
                    <?php echo $_smarty_tpl->getSubTemplate ("%files%/one_file.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('linked_file'=>$_smarty_tpl->tpl_vars['file']->value), 0);?>

                <?php } ?>
            </tbody>
        </table>
        <div class="tools-bottom">
            <span class="checked-offers">Отмеченные файлы</span> <a class="button delete">Удалить</a>
        </div>
    </div>
</div><?php }} ?>
