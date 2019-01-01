<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 13:56:40
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/product/maindir.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187590901857bc2be87ba599-66861813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5484248b38efecc310375b2b5ac5a3504cb759a' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/product/maindir.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '187590901857bc2be87ba599-66861813',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bc2be87edbd8_29009597',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc2be87edbd8_29009597')) {function content_57bc2be87edbd8_29009597($_smarty_tpl) {?><select name="maindir" id="maindir" data-selected="<?php echo $_smarty_tpl->tpl_vars['elem']->value['maindir'];?>
">
    <option value="">-- не выбрано --</option>
</select>

<script>
$("select[name='xdir[]']").change(onDirChange);

function onDirChange(e, firstRun )
{
    var xdir = $("select[name='xdir[]']");
    var maindir = $('#maindir');
    
    maindir.html('');
    var selected = $("option:selected", xdir);
    if (selected.length == 0) {
        maindir.append('<option value="">-- не выбрано --</option>');
    }
    selected.each(function() {
        var cur = $(this);
        var n = cur.attr('class').split('_')[1];
        var fulloption = '';
        var delim = '';
    
        while(n !==null) {
            fulloption = cur.attr('data-value') + delim + fulloption;
            cur = cur.prevAll('[class=lev_'+(n-1)+']:first');
            var n = (cur.length>0) ? cur.attr('class').split('_')[1] : null;
            delim = ' > ';
        }
        maindir.append('<option value="'+$(this).attr('value')+'">' + fulloption + '</option>');
    });
    var main_selected = (firstRun) ?  maindir.attr('data-selected') : $('#maindir option:first').val();
    maindir.val(main_selected);
}

onDirChange(null, true );

</script><?php }} ?>
