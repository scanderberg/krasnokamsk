<?php /* Smarty version Smarty-3.1.18, created on 2016-07-16 07:40:26
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/files/view/shop/order_files.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17435448345789babaaef0c6-06710104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dfcb30d0f2e265e2d0b8e2758150b003ecd5242' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/files/view/shop/order_files.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '17435448345789babaaef0c6-06710104',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
    'files_data' => 0,
    'files' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5789babac17bc3_86584356',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5789babac17bc3_86584356')) {function content_5789babac17bc3_86584356($_smarty_tpl) {?><?php if (!is_callable('smarty_function_moduleinsert')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.moduleinsert.php';
?><?php ob_start();?><?php echo smarty_function_moduleinsert(array('var'=>"files_data",'name'=>"\Files\Controller\Admin\Block\Files",'link_type'=>"files-shoporder",'link_id'=>((string)$_smarty_tpl->tpl_vars['elem']->value['id'])),$_smarty_tpl,'/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/files/view/shop/order_files.tpl');?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['files'] = new Smarty_variable($_tmp1, null, 0);?>     
<div class="collapse-block<?php if ($_smarty_tpl->tpl_vars['files_data']->value['files']) {?> open<?php }?>">
   <div class="collapse-title"><i class="icon"></i><strong>Прикрепленные файлы</strong> (будут видны покупателю на странице просмотра заказа)</div>
   <div class="collapse-content">
       <?php echo $_smarty_tpl->tpl_vars['files']->value;?>

   </div>
</div><?php }} ?>
