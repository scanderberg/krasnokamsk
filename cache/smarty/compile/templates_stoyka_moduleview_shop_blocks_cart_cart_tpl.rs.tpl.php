<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:52:33
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/blocks/cart/cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11642232355788dc915b47f7-77460826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '457635619497ea488905c6f942b01c822b53c76e' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/blocks/cart/cart.tpl',
      1 => 1458735632,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '11642232355788dc915b47f7-77460826',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'router' => 0,
    'cart_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc915c9914_02684314',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc915c9914_02684314')) {function content_5788dc915c9914_02684314($_smarty_tpl) {?><a class="basket showCart" id="cart" href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('shop-front-cartpage');?>
">
    <div class="cart" id='class-cart'><span class="lineHolder"></span><span class="title">Корзина</span>
	<br>
    <p class="products" id='top-cart'><span class="value"><?php echo $_smarty_tpl->tpl_vars['cart_info']->value['items_count'];?>
 </span> товаров в корзине</p>
	</div>
</a><?php }} ?>
