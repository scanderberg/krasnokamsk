<?php /* Smarty version Smarty-3.1.18, created on 2018-04-04 06:41:39
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/sitemap/view/sitemap_url.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15945410405ac44973694bf6-49158573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ca20ab72a0934590b38933484eb6fa2a74c4428' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/sitemap/view/sitemap_url.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '15945410405ac44973694bf6-49158573',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SITE' => 0,
    'router' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ac449736fe887_80055919',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac449736fe887_80055919')) {function content_5ac449736fe887_80055919($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><div class="notice-box notice-bg">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Файл sitemap для текущего сайта находится по адресу: <strong><?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('sitemap-front-sitemap',array('site_id'=>$_smarty_tpl->tpl_vars['SITE']->value['id']),true);?>
</strong><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div><?php }} ?>
