<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 13:56:40
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/catalog_model_orm_offer_main2637129039.auto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200647993957bc2be8a91435-41209509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53995ec33872c2641069c7180a0a01a2be7fcf25' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/catalog_model_orm_offer_main2637129039.auto.tpl',
      1 => 1462862794,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '200647993957bc2be8a91435-41209509',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bc2be8b1d3c1_32643866',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc2be8b1d3c1_32643866')) {function content_57bc2be8b1d3c1_32643866($_smarty_tpl) {?>                    
        <p class="label"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__unit']->getTitle();?>
</p>
        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__unit']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__unit']), 0);?>

        
            <?php }} ?>
