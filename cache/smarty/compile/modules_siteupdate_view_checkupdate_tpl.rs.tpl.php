<?php /* Smarty version Smarty-3.1.18, created on 2017-03-15 09:38:42
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/siteupdate/view/checkupdate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17055379858c8e1722ae627-09306000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c37bb42fd51b8400bfcc9a95ce21efc56de4b2b' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/siteupdate/view/checkupdate.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '17055379858c8e1722ae627-09306000',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58c8e172303155_80163436',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c8e172303155_80163436')) {function content_58c8e172303155_80163436($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('alias'=>"ОЦентреОбновлений")); $_block_repeat=true; echo smarty_block_t(array('alias'=>"ОЦентреОбновлений"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<p>Всегда устанавливайте последние обновления, чтобы улучшить безопасность и производительность системы. Обновления также могут содержать исправления ошибок в работе модулей и дополнительный функционал.</p>
<p>Обновления затрагивают только те файлы, которые изначально присутствовали в дистрибутиве, в том числе и файлы шаблона "по-умолчанию". В случае, если необходимо провести частичное обновление системы(не затронув определенные модули системы), допускается уточнение объектов обновления.</p>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('alias'=>"ОЦентреОбновлений"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
