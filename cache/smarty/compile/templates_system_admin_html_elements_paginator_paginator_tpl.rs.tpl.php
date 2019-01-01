<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:51:51
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/paginator/paginator.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1973403295788dc677b4ed3-55745790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c4e0fc79c3e67d9b0a2d1c5447e423f7432668f' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/paginator/paginator.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '1973403295788dc677b4ed3-55745790',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'paginator' => 0,
    'local_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc67860826_52354908',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc67860826_52354908')) {function content_5788dc67860826_52354908($_smarty_tpl) {?><span class="text">страница</span>
<a href="<?php echo $_smarty_tpl->tpl_vars['paginator']->value->left;?>
" class="prev call-update" title="предыдущая страница"></a>
<input type="text" class="page" name="<?php echo $_smarty_tpl->tpl_vars['paginator']->value->page_key;?>
" value="<?php echo $_smarty_tpl->tpl_vars['paginator']->value->page;?>
" onfocus="$(this).select()">
<a href="<?php echo $_smarty_tpl->tpl_vars['paginator']->value->right;?>
" class="next call-update" title="следующая страница"></a>
<span class="text">из <?php echo $_smarty_tpl->tpl_vars['paginator']->value->page_count;?>
</span>
<span class="text perpage_block">показывать по </span>
<input type="text" class="perpage" name="<?php echo $_smarty_tpl->tpl_vars['paginator']->value->pagesize_key;?>
" value="<?php echo $_smarty_tpl->tpl_vars['paginator']->value->page_size;?>
" onfocus="$(this).select()">
<button type="submit" class="ok">OK</button>
<?php if (empty($_smarty_tpl->tpl_vars['local_options']->value['short'])) {?>
<span class="total">всего записей: <span class="total_value"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->total;?>
</span></span>
<?php }?><?php }} ?>
