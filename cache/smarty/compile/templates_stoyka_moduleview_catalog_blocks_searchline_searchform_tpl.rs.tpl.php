<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:52:33
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/catalog/blocks/searchline/searchform.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2240953935788dc91545203-95537999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0679cfe6d641f645c633b32c35f29dffd4fa5eff' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/catalog/blocks/searchline/searchform.tpl',
      1 => 1458670101,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '2240953935788dc91545203-95537999',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'router' => 0,
    'param' => 0,
    'query' => 0,
    '_block_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc91587895_61672423',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc91587895_61672423')) {function content_5788dc91587895_61672423($_smarty_tpl) {?><form method="GET" action="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('catalog-front-listproducts',array());?>
" class='search-top'>
    <div class="searchLine">
        <div class="queryWrap" id="queryBox">
            <input type="text" class="query<?php if (!$_smarty_tpl->tpl_vars['param']->value['hideAutoComplete']) {?> autocomplete<?php }?>" data-deftext="Поиск по каталогу" name="query" value="<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
" autocomplete="off" data-source-url="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('catalog-block-searchline',array('sldo'=>'ajaxSearchItems','_block_id'=>$_smarty_tpl->tpl_vars['_block_id']->value));?>
">
        </div>

    </div>
</form><?php }} ?>
