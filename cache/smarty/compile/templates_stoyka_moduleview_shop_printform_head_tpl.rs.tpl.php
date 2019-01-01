<?php /* Smarty version Smarty-3.1.18, created on 2016-10-27 11:22:10
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/printform/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17765231085811b932026cb8-75157741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d9e9b296ebea41454bcea3adbe52139ce60b4d9' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/printform/head.tpl',
      1 => 1460044893,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '17765231085811b932026cb8-75157741',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5811b9320d44d6_86842530',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5811b9320d44d6_86842530')) {function content_5811b9320d44d6_86842530($_smarty_tpl) {?><style>
.head {
    padding-bottom:20px;
    margin-bottom:20px;
    border-bottom:1px dashed #555;
}
</style>
<div class="head">
    <table width="100%">
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['firm_name'];?>
</td>
            <td align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['__logo']->getUrl(200,100,'xy');?>
"></td>
        </tr>
    </table>
</div><?php }} ?>
