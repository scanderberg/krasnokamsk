<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 13:57:20
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/offer/photos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47840789457bc2c105a23e1-73385886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09aaecbf2bc3662e4c1dc579c4736daa24c56305' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/offer/photos.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '47840789457bc2c105a23e1-73385886',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
    'product' => 0,
    'images' => 0,
    'image' => 0,
    'is_act' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bc2c105d1e01_90613863',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc2c105d1e01_90613863')) {function content_57bc2c105d1e01_90613863($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['product'] = new Smarty_variable($_smarty_tpl->tpl_vars['elem']->value->getProduct(), null, 0);?>
<?php $_smarty_tpl->createLocalArrayVariable('product', null, 0);
$_smarty_tpl->tpl_vars['product']->value['id'] = $_smarty_tpl->tpl_vars['elem']->value['product_id'];?> 

<?php $_smarty_tpl->tpl_vars['images'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getImages(), null, 0);?>
<?php if (!empty($_smarty_tpl->tpl_vars['images']->value)) {?>
  <div class="offer-images-line">  
  <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars['is_act'] = new Smarty_variable(is_array($_smarty_tpl->tpl_vars['elem']->value['photos_arr'])&&in_array($_smarty_tpl->tpl_vars['image']->value['id'],$_smarty_tpl->tpl_vars['elem']->value['photos_arr']), null, 0);?>
     <a data-id="<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
" data-name="photos_arr[]" class="<?php if ($_smarty_tpl->tpl_vars['is_act']->value) {?>act<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->getUrl(30,30,'xy');?>
"/></a>
     <?php if ($_smarty_tpl->tpl_vars['is_act']->value) {?><input type="hidden" name="photos_arr[]" value="<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
"><?php }?>
  <?php } ?>  
  </div>
<?php }?> <?php }} ?>
