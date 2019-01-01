<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 13:56:41
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/product/photo/form_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152667967757bc2be96b7876-80454781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19f4192ec50fee4f2be1c9541adfdb488a529e98' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/product/photo/form_product.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '152667967757bc2be96b7876-80454781',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mod_css' => 0,
    'mod_js' => 0,
    'param' => 0,
    'photo_list_html' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bc2be979e652_16214127',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc2be979e652_16214127')) {function content_57bc2be979e652_16214127($_smarty_tpl) {?><?php if (!is_callable('smarty_function_static_call')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.static_call.php';
if (!is_callable('smarty_function_addcss')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addcss.php';
if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
if (!is_callable('smarty_function_urlmake')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.urlmake.php';
if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><?php echo smarty_function_static_call(array('var'=>"catalog",'callback'=>array('\RS\Module\Item','getResourceFolders'),'params'=>array('catalog')),$_smarty_tpl);?>

<?php echo smarty_function_addcss(array('file'=>((string)$_smarty_tpl->tpl_vars['mod_css']->value)."photoblock.css?v=2",'basepath'=>"root"),$_smarty_tpl);?>

<?php echo smarty_function_addcss(array('file'=>"common/jquery.lightbox.packed.css",'basepath'=>"common"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"jquery.lightbox.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"fileupload/jquery.iframe-transport.js",'basepath'=>"common"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"fileupload/jquery.fileupload.js",'basepath'=>"common"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>((string)$_smarty_tpl->tpl_vars['mod_js']->value)."photo.js",'basepath'=>"root"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['param']->value['linkid']==0) {?>
    <div class="cant_adding">
        Добавление фото возможно только в режиме редактирования.
    </div>
<?php } else { ?>
    <div class="photo_block" method="POST" enctype="multipart/form-data" action="<?php echo smarty_function_adminUrl(array('mod_controller'=>"photo-blockphotos",'pdo'=>"addphoto",'linkid'=>$_smarty_tpl->tpl_vars['param']->value['linkid'],'type'=>$_smarty_tpl->tpl_vars['param']->value['type']),$_smarty_tpl);?>
">
        <input type="hidden" name="redirect" value="<?php echo smarty_function_urlmake(array(),$_smarty_tpl);?>
"/>
        <div class="upload-block productPhotos">
            <span class="add"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
добавить фото<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <input type="file" name="files[]" multiple class="fileinput">
            </span>        
            <button class="delete-list" type="button" formaction="<?php echo smarty_function_adminUrl(array('mod_controller'=>"photo-blockphotos",'pdo'=>"delphoto"),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
удалить<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</button>
            <button class="apply-offers-list add-offers-link" type="button"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
назначить<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</button>
            <div class="dragzone"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Чтобы начать загрузку, перетащите сюда фотографии<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
        </div>
        
        <ul class="photo-list photo-list-product overable" data-sort-url="<?php echo smarty_function_adminUrl(array('mod_controller'=>"photo-blockphotos",'pdo'=>"movephoto",'do'=>false),$_smarty_tpl);?>
" data-edit-url="<?php echo smarty_function_adminUrl(array('mod_controller'=>"photo-blockphotos",'do'=>false,'pdo'=>"editphoto"),$_smarty_tpl);?>
">
            <?php echo $_smarty_tpl->tpl_vars['photo_list_html']->value;?>


        </ul>
        <div class="clear"></div>
    </div>
<?php }?><?php }} ?>
