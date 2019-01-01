<?php /* Smarty version Smarty-3.1.18, created on 2016-12-06 10:03:43
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/menu/view/tree_column.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1028742577584662cfb2fef8-42666865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f06f711b9f0eba4e6c433ad1d722bfa750f1de2' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/menu/view/tree_column.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '1028742577584662cfb2fef8-42666865',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cell' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_584662cfbdcc84_67435243',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584662cfbdcc84_67435243')) {function content_584662cfbdcc84_67435243($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
?><?php if ($_smarty_tpl->tpl_vars['cell']->value->getRow('typelink')=='link') {?><a href="<?php echo $_smarty_tpl->tpl_vars['cell']->value->getRow('link');?>
" target="_blank" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Тип: ссылка<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="type <?php echo $_smarty_tpl->tpl_vars['cell']->value->getRow('typelink');?>
">&nbsp;</a><?php }?>
<?php if ($_smarty_tpl->tpl_vars['cell']->value->getRow('typelink')=='article') {?><a href="<?php echo smarty_function_adminUrl(array('do'=>"edit",'id'=>$_smarty_tpl->tpl_vars['cell']->value->getRow('id')),$_smarty_tpl);?>
" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Тип: статья<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="crud-edit type <?php echo $_smarty_tpl->tpl_vars['cell']->value->getRow('typelink');?>
">&nbsp;</a><?php }?>
<?php if ($_smarty_tpl->tpl_vars['cell']->value->getRow('typelink')=='empty') {?><a class="type <?php echo $_smarty_tpl->tpl_vars['cell']->value->getRow('typelink');?>
" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Тип:шаблон<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">&nbsp;</a><?php }?>

<?php if ($_smarty_tpl->tpl_vars['cell']->value->getRow('typelink')=='separator') {?>
    <div class="menu-separator"></div>
<?php } else { ?>
    <a href="<?php echo smarty_function_adminUrl(array('do'=>"edit",'id'=>$_smarty_tpl->tpl_vars['cell']->value->getRow('id')),$_smarty_tpl);?>
" class="edit crud-edit<?php if (!$_smarty_tpl->tpl_vars['cell']->value->getRow('public')) {?> hide<?php }?>" title="Нажмите, чтобы отредактировать"><?php echo $_smarty_tpl->tpl_vars['cell']->value->getValue();?>
</a>
<?php }?><?php }} ?>
