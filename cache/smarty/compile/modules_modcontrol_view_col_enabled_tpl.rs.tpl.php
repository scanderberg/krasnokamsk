<?php /* Smarty version Smarty-3.1.18, created on 2017-03-15 09:43:59
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/modcontrol/view/col_enabled.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39282831858c8e2af991cd6-87669384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7dcc1fa7cfdc284a3e2d011c2546e32182c2ad52' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/modcontrol/view/col_enabled.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '39282831858c8e2af991cd6-87669384',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cell' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58c8e2af9e5fc4_54204631',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c8e2af9e5fc4_54204631')) {function content_58c8e2af9e5fc4_54204631($_smarty_tpl) {?><?php if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
?><?php if ($_smarty_tpl->tpl_vars['cell']->value->getRow('installed')) {?>
    <?php if ($_smarty_tpl->tpl_vars['cell']->value->getValue()) {?>Да<?php } else { ?>Нет<?php }?>
<?php } else { ?>
    <a class="not_installed crud-get" href="<?php echo smarty_function_adminUrl(array('do'=>'ajaxreinstall','module'=>$_smarty_tpl->tpl_vars['cell']->value->getRow('class')),$_smarty_tpl);?>
" title="Нажмите, чтобы установить модуль" style="white-space:nowrap">Не установлен</a>
<?php }?><?php }} ?>
