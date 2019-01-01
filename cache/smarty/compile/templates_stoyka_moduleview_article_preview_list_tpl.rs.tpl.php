<?php /* Smarty version Smarty-3.1.18, created on 2016-07-16 18:10:11
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/article/preview_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1100440833578a4e530d7556-26234720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ebc3f5c9e32a74be9898afe326ea81c2a86af8b' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/article/preview_list.tpl',
      1 => 1459956291,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '1100440833578a4e530d7556-26234720',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_578a4e531a0147_88128721',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578a4e531a0147_88128721')) {function content_578a4e531a0147_88128721($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/plugins/modifier.truncate.php';
?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <div <?php echo $_smarty_tpl->tpl_vars['item']->value->getDebugAttributes();?>
>
<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['image'])) {?><img align="left" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['__image']->getUrl(120,120,'xy');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" class="listImage"/><?php }?>
        <span class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['dateof'],"d.m.Y H:i");?>
</span><br>
        <a class="link" href="<?php echo $_smarty_tpl->tpl_vars['item']->value->getUrl();?>
">
            <b class="listCapt"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</b><br>
            <span class="preview"> 
            <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['item']->value->getPreview(),180);?>
</span>
        </a>
    </div>
	
	<br>
<?php } ?>

<?php echo $_smarty_tpl->getSubTemplate ("%THEME%/paginator.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
