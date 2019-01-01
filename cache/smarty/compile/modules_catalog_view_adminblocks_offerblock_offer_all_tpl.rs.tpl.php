<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 13:56:41
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/adminblocks/offerblock/offer_all.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75520398057bc2be91b9dd1-08726168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e10443937fb418471aec8554e6d6063cdaa9d3d' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/adminblocks/offerblock/offer_all.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '75520398057bc2be91b9dd1-08726168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'catalog_config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bc2be91cb6e2_11698813',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc2be91cb6e2_11698813')) {function content_57bc2be91cb6e2_11698813($_smarty_tpl) {?><?php if (!is_callable('smarty_function_static_call')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.static_call.php';
?><?php $_smarty_tpl->tpl_vars['catalog_config'] = new Smarty_variable(\RS\Config\Loader::byModule('catalog'), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['catalog_config']->value['use_offer_unit']) {?>
    
    <?php echo smarty_function_static_call(array('var'=>'units','callback'=>array('\Catalog\Model\UnitApi','selectList')),$_smarty_tpl);?>

<?php }?>
<?php echo smarty_function_static_call(array('var'=>'warehouses','callback'=>array('\Catalog\Model\WareHouseApi','getWarehousesList')),$_smarty_tpl);?>


<div class="offer-container">
    <?php echo $_smarty_tpl->getSubTemplate ("%catalog%/adminblocks/offerblock/offer_main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<div id="external-offers">
    <h3>Дополнительные комплектации</h3>
    <div id="ext-offers">
        <?php echo $_smarty_tpl->getSubTemplate ("%catalog%/adminblocks/offerblock/offer_ext.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
</div><?php }} ?>
