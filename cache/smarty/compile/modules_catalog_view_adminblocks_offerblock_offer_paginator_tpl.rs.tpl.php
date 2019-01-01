<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 13:56:41
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/adminblocks/offerblock/offer_paginator.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185889256857bc2be9308c14-51885537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7527040a45ab7c4fc27df6a4a1ebb5824f8a3ad1' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/adminblocks/offerblock/offer_paginator.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '185889256857bc2be9308c14-51885537',
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
  'unifunc' => 'content_57bc2be93400c6_72362377',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc2be93400c6_72362377')) {function content_57bc2be93400c6_72362377($_smarty_tpl) {?><span class="text">страница</span>
<a data-href="<?php echo $_smarty_tpl->tpl_vars['paginator']->value->left;?>
" class="prev" title="предыдущая страница"></a>
<input type="text" class="page" name="<?php echo $_smarty_tpl->tpl_vars['paginator']->value->page_key;?>
" value="<?php echo $_smarty_tpl->tpl_vars['paginator']->value->page;?>
" onfocus="$(this).select()">
<a data-href="<?php echo $_smarty_tpl->tpl_vars['paginator']->value->right;?>
" class="next" title="следующая страница"></a>
<span class="text">из <?php echo $_smarty_tpl->tpl_vars['paginator']->value->page_count;?>
</span>
<span class="text perpage_block"><?php if ($_smarty_tpl->tpl_vars['local_options']->value['short']) {?>показывать<?php }?> по </span>
<input type="text" class="perpage" name="<?php echo $_smarty_tpl->tpl_vars['paginator']->value->pagesize_key;?>
" value="<?php echo $_smarty_tpl->tpl_vars['paginator']->value->page_size;?>
" onfocus="$(this).select()">
<button type="button" class="ok">OK</button>       
<?php if (!$_smarty_tpl->tpl_vars['local_options']->value['short']) {?>
&nbsp;&nbsp;<span class="total">всего: <span class="total_value"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->total;?>
</span></span>
<?php }?><?php }} ?>
