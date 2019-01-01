<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 13:57:20
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/catalog_model_orm_offer_1262145831.auto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178314204657bc2c102fd503-62237880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd91ac87b7915e7ecc6c609ae047754f41b01542c' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/catalog_model_orm_offer_1262145831.auto.tpl',
      1 => 1462863943,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '178314204657bc2c102fd503-62237880',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bc2c103a0d94_60237693',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc2c103a0d94_60237693')) {function content_57bc2c103a0d94_60237693($_smarty_tpl) {?><div class="virtual-form" data-has-validation="true" data-action="/stroybaza/catalog-block-offerblock/?odo=offerEdit">
    <div class="crud-form-error"></div>
    <input type="hidden" name="offer_id" value="<?php echo $_smarty_tpl->tpl_vars['elem']->value['id'];?>
">
    <input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['elem']->value['product_id'];?>
">
    <table class="table-inline-edit">
                                                    
                <tr>
                    <td class="key"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__title']->getTitle();?>
</td>
                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__title']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__title']), 0);?>
</td>
                </tr>
                                                            
                <tr>
                    <td class="key"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__barcode']->getTitle();?>
</td>
                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__barcode']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__barcode']), 0);?>
</td>
                </tr>
                                                            
                <tr>
                    <td class="key"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__pricedata_arr']->getTitle();?>
</td>
                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__pricedata_arr']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__pricedata_arr']), 0);?>
</td>
                </tr>
                                                            
                <tr>
                    <td class="key"><?php echo $_smarty_tpl->tpl_vars['elem']->value['___propsdata']->getTitle();?>
</td>
                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['___propsdata']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['___propsdata']), 0);?>
</td>
                </tr>
                                                            
                <tr>
                    <td class="key"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__stock_num']->getTitle();?>
</td>
                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__stock_num']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__stock_num']), 0);?>
</td>
                </tr>
                                                            
                <tr>
                    <td class="key"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__photos_arr']->getTitle();?>
</td>
                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__photos_arr']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__photos_arr']), 0);?>
</td>
                </tr>
                                                            
                <tr>
                    <td class="key"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__unit']->getTitle();?>
</td>
                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__unit']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__unit']), 0);?>
</td>
                </tr>
                                                <tr>
                <td class="key"></td>
                <td><a class="button save virtual-submit">Сохранить</a>
                <a class="button cancel">Отмена</a>
                </td>
            </tr>
    </table>
</div><?php }} ?>
