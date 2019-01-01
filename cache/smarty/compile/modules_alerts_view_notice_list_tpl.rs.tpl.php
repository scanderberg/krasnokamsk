<?php /* Smarty version Smarty-3.1.18, created on 2016-12-06 10:03:28
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/alerts/view/notice_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1382405605584662c0354d59-85877636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d5e091c4c94b6f1d3c05ad4059b1481b421f97d' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/alerts/view/notice_list.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '1382405605584662c0354d59-85877636',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tfolders' => 0,
    'cfg' => 0,
    'alerts' => 0,
    'item' => 0,
    'tpls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_584662c0437989_16910906',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584662c0437989_16910906')) {function content_584662c0437989_16910906($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
?><?php echo smarty_function_addjs(array('file'=>"table.js"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>((string)$_smarty_tpl->tpl_vars['tfolders']->value['mod_js'])."tplmanager.js",'basepath'=>"root"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>((string)$_smarty_tpl->tpl_vars['tfolders']->value['mod_js'])."selecttemplate.js",'basepath'=>"root"),$_smarty_tpl);?>

<div class="crud-ajax-group">
    <?php if (!$_smarty_tpl->tpl_vars['cfg']->value->sms_sender_login&&!$_smarty_tpl->tpl_vars['cfg']->value->sms_sender_pass) {?>
        <div class="notice-box no-padd" style="margin-top:10px;">
            <div class="notice-bg">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Внимание! Отправка SMS невозможна, так как не настроен модуль "Уведомления". Укажите логин и пароль аккаунта для отправки SMS<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>    
        </div>
        <br>
    <?php }?>
    <div class="crud-form-success text-success"></div>
    <div class="formbox">
    <form method="post" class="crud-form">
        <table class="rs-table">
            <thead>
                <tr>
                    <th>Описание</th>
                    <th>E-Mail</th>
                    <th>SMS</th>
                    <th width="44"></th>                               
                </tr>
            </thead>
            <tbody>
                <tr class="empty no-over">
                    <td colspan="4"></td>
                </tr>            
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alerts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <?php $_smarty_tpl->tpl_vars['tpls'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value->getDefaultTemplates(), null, 0);?>
                <tr>
                    <td class="title"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->hasEmail()) {?>
                            <input type="hidden" name="enable_email[<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
]" value="0">
                            <input class="rs-switch" type="checkbox" name="enable_email[<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
]" value="1" <?php if ($_smarty_tpl->tpl_vars['item']->value['enable_email']) {?>checked="checked"<?php }?>>
                        <?php }?>
                    </td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->hasSms()) {?>  
                            <input type="hidden" name="enable_sms[<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
]" value="0">
                            <input class="rs-switch" type="checkbox" name="enable_sms[<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
]" value="1" <?php if ($_smarty_tpl->tpl_vars['item']->value['enable_sms']) {?>checked="checked"<?php }?>>
                        <?php }?>
                    </td>
                    <td>
                        <div class="tools">
                            <a data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="tool edit edit-tpl" title="редактировать шаблоны"></a>
                        </div>                    
                        <input type="hidden" class="tpl-email" name="template_email[<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
]" data-default="<?php echo $_smarty_tpl->tpl_vars['tpls']->value['email'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['template_email'];?>
" size="40" <?php if (!$_smarty_tpl->tpl_vars['item']->value->hasEmail()) {?>disabled="disabled"<?php }?>>
                        <input type="hidden" class="tpl-sms" name="template_sms[<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
]" data-default="<?php echo $_smarty_tpl->tpl_vars['tpls']->value['sms'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['template_sms'];?>
"  size="40" <?php if (!$_smarty_tpl->tpl_vars['item']->value->hasSms()) {?>disabled="disabled"<?php }?>>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </form>
    </div>
</div>

<div id="notice-tpl-dialog" style="display:none">
    <div class="formbox">
        <table class="otable">
            <tbody>
                <tr>
                    <td class="otitle">Шаблон Email сообщений:</td>
                    <td><input name="template" value="%THEME%/index.tpl" maxlength="255" size="63" type="text" id="tpl-email">
                        <a class="selectTemplate" title="Выбрать шаблон"></a>
                    </td>
                </tr>
                <tr>
                    <td class="otitle">Шаблон SMS сообщений:</td>
                    <td><input name="template" value="%THEME%/index.tpl" maxlength="255" size="63" type="text" id="tpl-sms">
                        <a class="selectTemplate" title="Выбрать шаблон"></a>
                    </td>
                </tr>            
            </tbody>
        </table>
    </div>
</div>

<script>
$(function() {
    $('.edit-tpl').click(function() {
        var context = $(this).closest('tr');
        var title = $(this).closest('tr').find('.title').html(),
            email_inp = $('.tpl-email', context),
            sms_inp = $('.tpl-sms', context);
        
        $('#tpl-email').prop('disabled', email_inp.is(':disabled')).val(email_inp.val());
        $('#tpl-sms').prop('disabled', sms_inp.is(':disabled')).val(sms_inp.val());
        
        $('#notice-tpl-dialog').dialog({
            modal: true,
            width:700,
            title: lang.t('Редактирование шаблона уведомления &laquo;%title&raquo;', { title: title}),
            buttons: [
            {
                text: 'Сбросить',
                click: function() {
                    $('#tpl-email').val(email_inp.data('default'));
                    $('#tpl-sms').val(sms_inp.data('default'));
                }
            },
            {
                text: 'Сохранить',
                click: function() {
                    email_inp.val($('#tpl-email').val());
                    sms_inp.val($('#tpl-sms').val());
                    $('#notice-tpl-dialog').dialog('close');
                }
            }]
        });
    });

    $('#tpl-email, #tpl-sms').selectTemplate({
        dialogUrl: '<?php echo smarty_function_adminUrl(array('mod_controller'=>"templates-selecttemplate",'do'=>false,'only_themes'=>0),$_smarty_tpl);?>
',
        handler: '.selectTemplate'
    })    
});
</script><?php }} ?>
