<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 19:44:15
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/cartpage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:790009190578912df79f595-06778131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be937035edc43b48717921153457cfd48dfd1905' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/cartpage.tpl',
      1 => 1460044064,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '790009190578912df79f595-06778131',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    'cart_data' => 0,
    'router' => 0,
    'index' => 0,
    'product_items' => 0,
    'cartitem' => 0,
    'product' => 0,
    'level' => 0,
    'multioffers' => 0,
    'value' => 0,
    'key' => 0,
    'offer' => 0,
    'catalog_config' => 0,
    'item' => 0,
    'id' => 0,
    'concomitant' => 0,
    'sub_product' => 0,
    'sub_product_data' => 0,
    'shop_config' => 0,
    'coupon_code' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_578912df9792b2_01693886',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578912df9792b2_01693886')) {function content_578912df9792b2_01693886($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><?php $_smarty_tpl->tpl_vars['shop_config'] = new Smarty_variable(\RS\Config\Loader::byModule('shop'), null, 0);?>
<?php $_smarty_tpl->tpl_vars['catalog_config'] = new Smarty_variable(\RS\Config\Loader::byModule('catalog'), null, 0);?>
<?php $_smarty_tpl->tpl_vars['product_items'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value->getProductItems(), null, 0);?>
<div class="cart" id="cartItems">
    <div class="top">
        <div class="cartIcon">Корзина</div>
        <?php if (!empty($_smarty_tpl->tpl_vars['cart_data']->value['items'])) {?>
        <a class="clearCart" href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('shop-front-cartpage',array("Act"=>"cleanCart"));?>
"><span>очистить корзину</span></a>
        <?php }?>
    </div>
    <div class="padd">
        <?php if (!empty($_smarty_tpl->tpl_vars['cart_data']->value['items'])) {?>
        <div class="head">
            <div class="price">Цена</div>    
            <div class="amount">Количество</div>
        </div>
        <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('shop-front-cartpage',array("Act"=>"update"));?>
" id="cartForm">
            <input type="submit" class="hidden">
            <div class="viewport">
                <table class="cartProducts">
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart_data']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['item']->key;
 $_smarty_tpl->tpl_vars['item']->index++;
 $_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["items"]['first'] = $_smarty_tpl->tpl_vars['item']->first;
?>
                        <?php $_smarty_tpl->tpl_vars['product'] = new Smarty_variable($_smarty_tpl->tpl_vars['product_items']->value[$_smarty_tpl->tpl_vars['index']->value]['product'], null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['cartitem'] = new Smarty_variable($_smarty_tpl->tpl_vars['product_items']->value[$_smarty_tpl->tpl_vars['index']->value]['cartitem'], null, 0);?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['cartitem']->value['multioffers'])) {?>
                           <?php $_smarty_tpl->tpl_vars['multioffers'] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['cartitem']->value['multioffers']), null, 0);?> 
                        <?php }?>
                        <tr data-id="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" data-product-id="<?php echo $_smarty_tpl->tpl_vars['cartitem']->value['entity_id'];?>
" class="cartitem<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['items']['first']) {?> first<?php }?>">
                            <td class="colPreview">
                                <a class="preview" href="<?php echo $_smarty_tpl->tpl_vars['product']->value->getUrl();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['product']->value->getMainImage(64,64);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
"/></a>
                            </td>
                            <td class="colTitle">
                                <a class="title" href="<?php echo $_smarty_tpl->tpl_vars['product']->value->getUrl();?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
</a><br>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value->isMultiOffersUse()) {?>
                                    <div class="multiOffers">
                                        <?php  $_smarty_tpl->tpl_vars['level'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['level']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['multioffers']['levels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['level']->key => $_smarty_tpl->tpl_vars['level']->value) {
$_smarty_tpl->tpl_vars['level']->_loop = true;
?>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['level']->value['values'])) {?>
                                                <div class="title"><?php if ($_smarty_tpl->tpl_vars['level']->value['title']) {?><?php echo $_smarty_tpl->tpl_vars['level']->value['title'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['level']->value['prop_title'];?>
<?php }?></div>
                                                <select name="products[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][multioffers][<?php echo $_smarty_tpl->tpl_vars['level']->value['prop_id'];?>
]" data-prop-title="<?php if ($_smarty_tpl->tpl_vars['level']->value['title']) {?><?php echo $_smarty_tpl->tpl_vars['level']->value['title'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['level']->value['prop_title'];?>
<?php }?>">
                                                    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['level']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                                                        <option <?php if ($_smarty_tpl->tpl_vars['multioffers']->value[$_smarty_tpl->tpl_vars['level']->value['prop_id']]['value']==$_smarty_tpl->tpl_vars['value']->value['val_str']) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['value']->value['val_str'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['val_str'];?>
</option>   
                                                    <?php } ?>
                                                </select>
                                            <?php }?>
                                        <?php } ?>
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value->isOffersUse()) {?>
                                            <?php  $_smarty_tpl->tpl_vars['offer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['offer']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['offers']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['offer']->key => $_smarty_tpl->tpl_vars['offer']->value) {
$_smarty_tpl->tpl_vars['offer']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['offer']->key;
?>
                                                <input id="offer_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" type="hidden" name="hidden_offers" class="hidden_offers" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-info='<?php echo $_smarty_tpl->tpl_vars['offer']->value->getPropertiesJson();?>
' data-num="<?php echo $_smarty_tpl->tpl_vars['offer']->value['num'];?>
"/>
                                                <?php if ($_smarty_tpl->tpl_vars['cartitem']->value['offer']==$_smarty_tpl->tpl_vars['key']->value) {?>
                                                    <input type="hidden" name="products[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][offer]" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"/>
                                                <?php }?>
                                            <?php } ?>
                                        <?php }?>
                                    </div>
                                <?php } elseif ($_smarty_tpl->tpl_vars['product']->value->isOffersUse()) {?>
                                    <select name="products[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][offer]" class="offer">
                                        <?php  $_smarty_tpl->tpl_vars['offer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['offer']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['offers']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['offer']->key => $_smarty_tpl->tpl_vars['offer']->value) {
$_smarty_tpl->tpl_vars['offer']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['offer']->key;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['cartitem']->value['offer']==$_smarty_tpl->tpl_vars['key']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['offer']->value['title'];?>
</option>
                                        <?php } ?>
                                    </select>
                                <?php }?>
                            </td>
                            <td class="colAmount">      
                                <div class="amoutPicker">                    
                                    <div class="qpicker">
                                        <a class="inc"></a>
                                        <a class="dec"></a>
                                    </div>                    
                                    <input type="text" maxlength="4" class="fieldAmount" value="<?php echo $_smarty_tpl->tpl_vars['cartitem']->value['amount'];?>
" name="products[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][amount]"> 
                                    <span class="unit">
                                        <?php if ($_smarty_tpl->tpl_vars['catalog_config']->value['use_offer_unit']) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['product']->value['offers']['items'][$_smarty_tpl->tpl_vars['cartitem']->value['offer']]->getUnit()->stitle;?>

                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->tpl_vars['product']->value->getUnit()->stitle;?>

                                        <?php }?>
                                    </span>
                                    <div class="error"><?php echo $_smarty_tpl->tpl_vars['item']->value['amount_error'];?>
</div>
                                </div>
                            </td>
                            <td class="colPrice">
                                <div class="floatbox">
                                    <span class="priceBlock">
                                        <span class="priceValue"><?php echo $_smarty_tpl->tpl_vars['item']->value['cost'];?>
</span>
                                    </span>
                                </div>
                                <div class="discount">
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['discount']>0) {?>
                                    скидка <?php echo $_smarty_tpl->tpl_vars['item']->value['discount'];?>

                                    <?php }?>
                                </div>
                            </td>
                            <td class="colRemove">
                                <a title="Удалить товар из корзины" class="remove" href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('shop-front-cartpage',array("Act"=>"removeItem","id"=>$_smarty_tpl->tpl_vars['index']->value));?>
"></a>
                            </td>
                        </tr>
                        <?php $_smarty_tpl->tpl_vars['concomitant'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getConcomitant(), null, 0);?>
                        
                        <?php  $_smarty_tpl->tpl_vars['sub_product_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub_product_data']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['sub_products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub_product_data']->key => $_smarty_tpl->tpl_vars['sub_product_data']->value) {
$_smarty_tpl->tpl_vars['sub_product_data']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['sub_product_data']->key;
?>
                            <?php $_smarty_tpl->tpl_vars['sub_product'] = new Smarty_variable($_smarty_tpl->tpl_vars['concomitant']->value[$_smarty_tpl->tpl_vars['id']->value], null, 0);?>
                            <tr>

                                <td colspan="2" class="colTitle">
                                    <label>
                                        <input 
                                            class="fieldConcomitant" 
                                            type="checkbox" 
                                            name="products[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][concomitant][]" 
                                            value="<?php echo $_smarty_tpl->tpl_vars['sub_product']->value->id;?>
"
                                            <?php if ($_smarty_tpl->tpl_vars['sub_product_data']->value['checked']) {?>
                                                checked="checked"
                                            <?php }?>
                                            >
                                        <?php echo $_smarty_tpl->tpl_vars['sub_product']->value->title;?>

                                    </label>
                                </td>
                                <td class="colAmount">
                                    <?php if ($_smarty_tpl->tpl_vars['shop_config']->value['allow_concomitant_count_edit']) {?>
                                        <div class="amoutPicker">                    
                                            <div class="qpicker">
                                                <a class="inc"></a>
                                                <a class="dec"></a>
                                            </div>                            
                                            <input type="text" maxlength="4" class="fieldAmount concomitant" data-id="<?php echo $_smarty_tpl->tpl_vars['sub_product']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['sub_product_data']->value['amount'];?>
" name="products[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][concomitant_amount][<?php echo $_smarty_tpl->tpl_vars['sub_product']->value->id;?>
]"> 
                                            <span class="unit"><?php echo $_smarty_tpl->tpl_vars['product']->value->getUnit()->stitle;?>
</span>
                                        </div>
                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->tpl_vars['sub_product_data']->value['amount'];?>
 <?php echo $_smarty_tpl->tpl_vars['sub_product']->value->getUnit()->stitle;?>

                                    <?php }?>
                                    <div class="error"><?php echo $_smarty_tpl->tpl_vars['sub_product_data']->value['amount_error'];?>
</div>
                                </td>
                                <td class="colPrice">
                                    <span class="priceBlock">
                                        <span class="priceValue"><?php echo $_smarty_tpl->tpl_vars['sub_product_data']->value['cost'];?>
</span>
                                    </span>
                                    <div class="discount">
                                        <?php if ($_smarty_tpl->tpl_vars['sub_product_data']->value['discount']>0) {?>
                                        скидка <?php echo $_smarty_tpl->tpl_vars['sub_product_data']->value['discount'];?>

                                        <?php }?>
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                </table>
            </div>
            <div class="cartFooter">
                <div class="linesContainer">
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart']->value->getCouponItems(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                        <div class="line">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('shop-front-cartpage',array("Act"=>"removeItem","id"=>$_smarty_tpl->tpl_vars['id']->value));?>
" class="remove" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
удалить скидочный купон<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"></a>
                            <div class="text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Купон на скидку<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['coupon']['code'];?>
</div>
                            <div class="digits"></div>
                        </div>
                    <?php } ?>
                    <?php if ($_smarty_tpl->tpl_vars['cart_data']->value['total_discount']>0) {?>
                        <div class="line">
                            <div class="text">Скидка на заказ</div>
                            <div class="digits"><?php echo $_smarty_tpl->tpl_vars['cart_data']->value['total_discount'];?>
</div>
                        </div>                        
                    <?php }?>
                </div>
                <div class="discountText">
                    <span class="info">Купон на скидку (если есть): </span><input type="text" class="couponCode<?php if ($_smarty_tpl->tpl_vars['cart']->value->getUserError('coupon')!==false) {?> hasError<?php }?>" size="12" name="coupon" value="<?php echo $_smarty_tpl->tpl_vars['coupon_code']->value;?>
">&nbsp;
                    <a class="applyCoupon" data-href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('shop-front-cartpage',array("Act"=>"applyCoupon"));?>
">применить</a>
                </div>
                <div class="total"><span class="text">Итого:</span> <span class="total-value"><?php echo $_smarty_tpl->tpl_vars['cart_data']->value['total'];?>
</span></div>
                <div class="loader"></div>                                
            </div>
            <div class="bottom">
                <noscript><input type="submit" class="onemoreEmpty recalc" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Пересчитать<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"></noscript>
                <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('shop-front-checkout');?>
" class="submit<?php if ($_smarty_tpl->tpl_vars['cart_data']->value['has_error']) {?> disabled<?php }?>"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Оформить заказ<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
                <a href="JavaScript:;" class="continue">Продолжить покупки</a>
                <div class="error" <?php if (!empty($_smarty_tpl->tpl_vars['cart_data']->value['errors'])) {?>style="display: block;"<?php }?>>
                    <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart_data']->value['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
                        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<br>
                    <?php } ?>
                </div>
            </div>
        </form>
        <?php } else { ?>
            <div class="empty">В корзине нет товаров</div>
        <?php }?>
    </div>
</div><?php }} ?>
