<?php /* Smarty version Smarty-3.1.18, created on 2016-07-16 07:40:27
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/tinymce/textarea.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10897753105789babbd4d040-07953691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '221ce35736d4d85ba0cdf22192ce5d83af604463' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/tinymce/textarea.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '10897753105789babbd4d040-07953691',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'param' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5789babbdc0240_99992747',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5789babbdc0240_99992747')) {function content_5789babbdc0240_99992747($_smarty_tpl) {?><textarea class="tinymce" id="tinymce-<?php echo $_smarty_tpl->tpl_vars['param']->value['id'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['param']->value['name'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['param']->value['rows'])) {?>rows="<?php echo $_smarty_tpl->tpl_vars['param']->value['rows'];?>
"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['param']->value['cols'])) {?>cols="<?php echo $_smarty_tpl->tpl_vars['param']->value['cols'];?>
"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['param']->value['style'])) {?>style="<?php echo $_smarty_tpl->tpl_vars['param']->value['style'];?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
<script>
    $LAB
    .script(<?php echo json_encode($_smarty_tpl->tpl_vars['param']->value['jquery_tinymce_path']);?>
)
    .wait(function(){
        var initEditor = function() {
            $('#tinymce-<?php echo $_smarty_tpl->tpl_vars['param']->value['id'];?>
:visible').tinymce(<?php echo json_encode($_smarty_tpl->tpl_vars['param']->value['tiny_options']);?>
);
        }
        
        $(function() {
            $('#tinymce-<?php echo $_smarty_tpl->tpl_vars['param']->value['id'];?>
').closest('.frame').bind('on-tab-open', function() {
                initEditor();
            });
            $('#tinymce-<?php echo $_smarty_tpl->tpl_vars['param']->value['id'];?>
').bind('became-visible', function() {
                initEditor();
            });
            $('#tinymce-<?php echo $_smarty_tpl->tpl_vars['param']->value['id'];?>
').closest('form').on('beforeAjaxSubmit', function() {
                    $('#tinymce-<?php echo $_smarty_tpl->tpl_vars['param']->value['id'];?>
:tinymce').each(function() {
                        $(this).tinymce().save();
                    });
            });
                
            $('#tinymce-<?php echo $_smarty_tpl->tpl_vars['param']->value['id'];?>
').closest('.dialog-window').on('dialogBeforeDestroy', function() {
                var tiny_instance = $('#tinymce-<?php echo $_smarty_tpl->tpl_vars['param']->value['id'];?>
').tinymce();
                if (tiny_instance) {
                    $('#tinymce-<?php echo $_smarty_tpl->tpl_vars['param']->value['id'];?>
').tinymce().remove();
                }
            });
                
            setTimeout(function() { initEditor(); }, 10);
        });
    });
</script><?php }} ?>
