<?php /* Smarty version Smarty-3.1.18, created on 2018-04-07 10:16:53
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/templates/view/form/uploadfiles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7371827565ac870653a4eb1-20536800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7970d2c3b8c3033d69f81850bcc47b3ee74ba368' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/templates/view/form/uploadfiles.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '7371827565ac870653a4eb1-20536800',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path' => 0,
    'router' => 0,
    'allow_ext' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ac87065446ef2_34926005',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac87065446ef2_34926005')) {function content_5ac87065446ef2_34926005($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addcss')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addcss.php';
if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
?><?php echo smarty_function_addcss(array('file'=>"%templates%/uploadfiles.css"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"fileupload/jquery.fileupload.js"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"fileupload/jquery.iframe-transport.js"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"%templates%/jquery.uploadtemplatefiles.js"),$_smarty_tpl);?>

<div id="upload-files" data-upload-url="<?php echo $_smarty_tpl->tpl_vars['router']->value->getAdminUrl('uploadFile',array('path'=>$_smarty_tpl->tpl_vars['path']->value));?>
">
    <div class="notice-box upload-files-notice">
        Папка для загрузки: <strong><?php echo $_smarty_tpl->tpl_vars['path']->value;?>
</strong><br>
        Для загрузки допускаются файлы со следующими расширениями:
        <?php echo implode(',',$_smarty_tpl->tpl_vars['allow_ext']->value);?>

    </div>
    <form class="upload-files-dnd crud-form" enctype="multipart/form-data" method="POST">
        <input type="file" name="files[]" multiple class="inputUploadFile" style="display:none">
        Перетащите сюда файлы или <a class="selectUploadFile">выберите файлы на диске</a>
    </form>

    <table class="upload-files-table hidden">
        <thead>
            <tr>
                <th>Файл</th>
                <th>Размер</th>
                <th>Статус</th>
                <th><a class="cancel-all">отменить все</a></th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

<script>
    $.allReady(function() {
        $('#upload-files').uploadTemplateFiles();
    });
</script><?php }} ?>
