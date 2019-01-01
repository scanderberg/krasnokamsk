<?php /* Smarty version Smarty-3.1.18, created on 2017-03-15 09:33:12
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/templates/view/form/sectioncontext/grid_system.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10711427758c8e0289130a6-60592586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f877167ae48cbf00924508ef64e1d9139ee4ea6d' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/templates/view/form/sectioncontext/grid_system.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '10711427758c8e0289130a6-60592586',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58c8e0289b8086_16154224',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c8e0289b8086_16154224')) {function content_58c8e0289b8086_16154224($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__grid_system']->getOriginalTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__grid_system']), 0);?>

<div id="change-grid-warning" style="display:none">
    <br>
    <div class="notice-box" style="width:500px">
        <b>Внимание!</b> При смене сеточного фреймворка, вся информация о страницах, контейнерах, 
        секциях, блоках будет потеряна. Выбор сеточного фреймворка необходимо производить перед началом разработки темы оформления.
    </div>
</div>
<script language="text/javascript">
    $(function() {
        var select = $('select[name="grid_system"]');
        var source_value = select.val();
        select.change(function() {
            $('#change-grid-warning').toggle($(this).val() != source_value);
            $(this).trigger('contentSizeChanged');
        });
    });
</script><?php }} ?>
