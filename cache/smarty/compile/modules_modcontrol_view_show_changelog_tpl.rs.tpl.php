<?php /* Smarty version Smarty-3.1.18, created on 2018-04-04 06:43:41
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/modcontrol/view/show_changelog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6603004675ac449ed0e4515-63070401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e93caeaf2f217169fb4a9680da58038e2cf2513b' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/modcontrol/view/show_changelog.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '6603004675ac449ed0e4515-63070401',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ac449ed19f609_74873669',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac449ed19f609_74873669')) {function content_5ac449ed19f609_74873669($_smarty_tpl) {?><div class="crud-form">
    <pre style="overflow:auto; max-height:600px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_item']->value->getChangelog(), ENT_QUOTES, 'UTF-8', true);?>
</pre>
</div><?php }} ?>
