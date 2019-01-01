<?php /* Smarty version Smarty-3.1.18, created on 2017-03-17 13:36:34
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/templates/view/form/file_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22683283158cbbc325a16b8-35427423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5086b3e6fdcfdf196775ec555f6a9afb0ad6cd33' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/templates/view/form/file_edit.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '22683283158cbbc325a16b8-35427423',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'epath' => 0,
    'ext' => 0,
    'root_sections' => 0,
    'data' => 0,
    'editor_modes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58cbbc3279d788_97487666',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58cbbc3279d788_97487666')) {function content_58cbbc3279d788_97487666($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
if (!is_callable('smarty_function_urlmake')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.urlmake.php';
if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><?php echo smarty_function_addjs(array('file'=>"ace-master/ace/ace.js",'basepath'=>"common"),$_smarty_tpl);?>

<div class="formbox">        
    <form method="POST" action="<?php echo smarty_function_urlmake(array(),$_smarty_tpl);?>
" enctype="multipart/form-data" class="crud-form" id="template-edit-form" data-dialog-options='{ "dialogClass": "template-edit-win" }'>
        <input type="hidden" name="basepath" value="<?php echo $_smarty_tpl->tpl_vars['epath']->value['type'];?>
:<?php echo $_smarty_tpl->tpl_vars['epath']->value['type_value'];?>
/">
        <input type="hidden" name="ext" value="<?php echo $_smarty_tpl->tpl_vars['ext']->value;?>
">
        <div class="notabs">
            <table class="otable no-td-width" width="100%">
            <tr>
                <td class="otitle" style="width:150px">Имя файла</td>
                <td><div class="file-container-text"><?php if ($_smarty_tpl->tpl_vars['epath']->value['type']=='theme') {?>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Тема<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:<?php echo $_smarty_tpl->tpl_vars['root_sections']->value['themes'][$_smarty_tpl->tpl_vars['epath']->value['type_value']]['title'];?>

                    <?php } else { ?>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Модуль<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:<?php echo $_smarty_tpl->tpl_vars['root_sections']->value['modules'][$_smarty_tpl->tpl_vars['epath']->value['type_value']]['title'];?>

                    <?php }?></div>
                    <input style="width:500px" type="text" name="filename" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['filename'], ENT_QUOTES, 'UTF-8', true);?>
"><span class="field-error" data-field="filename"></span><br>
                    </td>
            </tr>
            <tr>
                <td class="otitle"></td>
                <td><input type="checkbox" id="overwrite" name="overwrite" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['overwrite']) {?>checked<?php }?>> 
                <label for="overwrite" class="fieldhelp">Перезаписывать файл, если таковой уже существует</label></td>
            </tr>
            <tr>
                <td class="otitle">Содержание файла</td>
                <td>
                    <div style="position:relative">
                        <?php $_smarty_tpl->tpl_vars['editor_modes'] = new Smarty_variable(array('css'=>'css','tpl'=>'html','js'=>'javascript'), null, 0);?>
                        <textarea data-editor-mode="<?php echo $_smarty_tpl->tpl_vars['editor_modes']->value[$_smarty_tpl->tpl_vars['ext']->value];?>
" id="code_source_editor" name="content" style="width:100%; height:300px"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['content'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                        <div id="code_editor" style="display:none"></div>
                        <span class="field-error" data-field="overwrite"></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" id="switchSyntaxHL"> <label for="switchSyntaxHL" class="fieldhelp">Включить подсветку синтаксиса</label></td>
            </tr>
                                                                            </table>
        </div>
    </form>
</div>

<style type="text/css" media="screen">
    #code_editor { 
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }
</style>

<script>
$.allReady(function() {
    var editor;
    var $editor_textarea = $('#code_source_editor');    
    
    var setSyntaxHL = function() {
        var $editor_div = $('#code_editor');
        if ($('#switchSyntaxHL').is(':checked')) {
            if ($editor_textarea.is(':visible')) {
                $editor_textarea = $('#code_source_editor').css('visibility', 'hidden');
                if (!editor) {
                    editor = ace.edit($editor_div.get(0));
                    editor.getSession().setUseWorker(false);
                    var mode = $editor_textarea.data('editorMode');
                    editor.getSession().setMode("ace/mode/" + mode);
                }
                editor.getSession().setValue( $editor_textarea.val() );                
                editor.resize();
                $editor_div.show();
                $.cookie('tmanager-use-editor', 1);
            }
        } else {
            if ($editor_div.is(':visible')) {
                $editor_div.hide();
                $editor_textarea.val( editor.getSession().getValue() );
                $editor_textarea.css('visibility', 'visible');
                $.cookie('tmanager-use-editor', null);
            }
        }
    }
    
    $('#switchSyntaxHL').change(setSyntaxHL);
    
    if ($.cookie('tmanager-use-editor') == 1) {
        $('#switchSyntaxHL').get(0).checked = true;
        setTimeout(function() {
            $('#switchSyntaxHL').trigger('change');
        }, 250);
    }
    
    $('#template-edit-form').bind('beforeAjaxSubmit', function() {
        if ($('#switchSyntaxHL').is(':checked')) {
            $editor_textarea.val( editor.getSession().getValue() );
        }
    });
})
</script><?php }} ?>
