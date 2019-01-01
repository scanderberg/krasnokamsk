<?php /* Smarty version Smarty-3.1.18, created on 2016-08-22 18:11:12
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/checkout/confirm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139113407857bb161039cdc8-41702955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d2a65a947df321ed516060aa2384338d548afb8' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/checkout/confirm.tpl',
      1 => 1462811505,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '139113407857bb161039cdc8-41702955',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order' => 0,
    'item' => 0,
    'user' => 0,
    'fmanager' => 0,
    'field' => 0,
    'router' => 0,
    'delivery' => 0,
    'pay' => 0,
    'cart' => 0,
    'products' => 0,
    'barcode' => 0,
    'multioffer_titles' => 0,
    'offer_title' => 0,
    'multioffer' => 0,
    'catalog_config' => 0,
    'n' => 0,
    'cartdata' => 0,
    'tax' => 0,
    'this_controller' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bb16106e2e74_36543491',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bb16106e2e74_36543491')) {function content_57bb16106e2e74_36543491($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><?php $_smarty_tpl->tpl_vars['catalog_config'] = new Smarty_variable(\RS\Config\Loader::byModule('catalog'), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['order']->value->hasError()) {?>
<div class="pageError">
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value->getErrors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <p><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</p>
    <?php } ?>
</div>
<?php }?>

<form method="POST">
    <div id="basket">
        <div class="orderInfo">
                <?php $_smarty_tpl->tpl_vars['user'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getUser(), null, 0);?>
                
                <ul class="section first">
                    <li><span class="key">Заказчик:</span> <?php echo $_smarty_tpl->tpl_vars['user']->value['surname'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</li>
                    <li><span class="key">Телефон:</span> <?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
</li>
                    <li><span class="key">E-mail:</span> <?php echo $_smarty_tpl->tpl_vars['user']->value['e_mail'];?>
</li>
                </ul>
                
                <?php $_smarty_tpl->tpl_vars['fmanager'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getFieldsManager(), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['fmanager']->value->notEmpty()) {?>
                    <ul class="section">
                        <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fmanager']->value->getStructure(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
                        <li><span class="key"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
:</span> <a href="?do=address"><?php echo $_smarty_tpl->tpl_vars['fmanager']->value->textView($_smarty_tpl->tpl_vars['field']->value['alias']);?>
</a></li>
                        <?php } ?>
                    </ul>
                <?php }?>
                
                <?php $_smarty_tpl->tpl_vars['delivery'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getDelivery(), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['address'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getAddress(), null, 0);?>
                <ul class="section">
                    <?php if ($_smarty_tpl->tpl_vars['order']->value['delivery']) {?>
                        <li><span class="key">Доставка:</span> <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl(null,array('Act'=>'delivery'));?>
"><?php echo $_smarty_tpl->tpl_vars['delivery']->value['title'];?>
</a></li>
                    <?php }?>
                    
                </ul>
                <?php if ($_smarty_tpl->tpl_vars['order']->value['payment']) {?>
                    <?php $_smarty_tpl->tpl_vars['pay'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getPayment(), null, 0);?>
                    <ul class="section last">
                        <li><span class="key">Оплата:</span> <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl(null,array('Act'=>'payment'));?>
"><?php echo $_smarty_tpl->tpl_vars['pay']->value['title'];?>
</a></li>
                    </ul>
                <?php }?>
        </div>
        
        <div class="cartInfo">
            <?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value->getProductItems(), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['cartdata'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value->getCartData(), null, 0);?>
            <table class="orderBasket">
                <tbody class="head">
                    <tr>
                        <td></td>
                        <td>Количество</td>
                        <td>Цена</td>
                    </tr>
                </tbody>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['n']->value = $_smarty_tpl->tpl_vars['item']->key;
 $_smarty_tpl->tpl_vars['item']->index++;
 $_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["basket"]['first'] = $_smarty_tpl->tpl_vars['item']->first;
?>
                    <tr <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['basket']['first']) {?>class="first"<?php }?> data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['obj']['id'];?>
">
                        <td>
                            <?php $_smarty_tpl->tpl_vars['barcode'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['product']->getBarCode($_smarty_tpl->tpl_vars['item']->value['cartitem']['offer']), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['offer_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['product']->getOfferTitle($_smarty_tpl->tpl_vars['item']->value['cartitem']['offer']), null, 0);?>          
                            <?php $_smarty_tpl->tpl_vars['multioffer_titles'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['cartitem']->getMultiOfferTitles(), null, 0);?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['product']->getUrl();?>
" target="_blank" class="prod-name"><?php echo $_smarty_tpl->tpl_vars['item']->value['product']['title'];?>
</a>
                            <div class="codeLine">
                                <?php if ($_smarty_tpl->tpl_vars['barcode']->value!='') {?>Артикул:<span class="value"><?php echo $_smarty_tpl->tpl_vars['barcode']->value;?>
</span>&nbsp;&nbsp;<?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['multioffer_titles']->value||($_smarty_tpl->tpl_vars['offer_title']->value&&$_smarty_tpl->tpl_vars['item']->value['product']->isOffersUse())) {?>
                                    <div class="multioffersWrap">
                                        Комплектация: 
                                        <?php  $_smarty_tpl->tpl_vars['multioffer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['multioffer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['multioffer_titles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['multioffer']->key => $_smarty_tpl->tpl_vars['multioffer']->value) {
$_smarty_tpl->tpl_vars['multioffer']->_loop = true;
?>
                                            <p class="value"><?php echo $_smarty_tpl->tpl_vars['multioffer']->value['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['multioffer']->value['value'];?>
</p>
                                        <?php } ?>
                                        <?php if (!$_smarty_tpl->tpl_vars['multioffer_titles']->value) {?>
                                            <p class="value"><?php echo $_smarty_tpl->tpl_vars['offer_title']->value;?>
</p>
                                        <?php }?>
                                    </div>
                                <?php }?>
                            </div>
                        </td>
                        <td width="110">
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['cartitem']['amount'];?>
 
                            <?php if ($_smarty_tpl->tpl_vars['catalog_config']->value['use_offer_unit']) {?>
                                <?php echo $_smarty_tpl->tpl_vars['item']->value['product']['offers']['items'][$_smarty_tpl->tpl_vars['item']->value['cartitem']['offer']]->getUnit()->stitle;?>

                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['item']->value['product']->getUnit()->stitle;?>

                            <?php }?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['cartdata']->value['items'][$_smarty_tpl->tpl_vars['n']->value]['amount_error'])) {?><div class="errorNum" style="display:block"><?php echo $_smarty_tpl->tpl_vars['cartdata']->value['items'][$_smarty_tpl->tpl_vars['n']->value]['amount_error'];?>
</div><?php }?>
                        </td>
                        <td width="160">
                            <span class="priceBlock">
                                <span class="priceValue"><?php echo $_smarty_tpl->tpl_vars['cartdata']->value['items'][$_smarty_tpl->tpl_vars['n']->value]['cost'];?>
</span>
                            </span>
                            <div class="discount">
                                <?php if ($_smarty_tpl->tpl_vars['cartdata']->value['items'][$_smarty_tpl->tpl_vars['n']->value]['discount']>0) {?>
                                скидка <?php echo $_smarty_tpl->tpl_vars['cartdata']->value['items'][$_smarty_tpl->tpl_vars['n']->value]['discount'];?>

                                <?php }?>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
                <tbody class="additional">
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart']->value->getCouponItems(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                    <tr class="first">
                        <td colspan="2"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Купон на скидку<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['coupon']['code'];?>
</td>
                        <td></td>
                    </tr>
                    <?php } ?>
                    <?php if ($_smarty_tpl->tpl_vars['cartdata']->value['total_discount']>0) {?>
                        <tr class="bold">
                            <td colspan="2"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Скидка на заказ<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
                            <td class="price"><?php echo $_smarty_tpl->tpl_vars['cartdata']->value['total_discount'];?>
</td>
                        </tr>
                    <?php }?>
                    <?php  $_smarty_tpl->tpl_vars['tax'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tax']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cartdata']->value['taxes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tax']->key => $_smarty_tpl->tpl_vars['tax']->value) {
$_smarty_tpl->tpl_vars['tax']->_loop = true;
?>
                        <tr <?php if (!$_smarty_tpl->tpl_vars['tax']->value['tax']['included']) {?>class="bold"<?php }?>>
                            <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['tax']->value['tax']->getTitle();?>
</td>
                            <td class="price"><?php echo $_smarty_tpl->tpl_vars['tax']->value['cost'];?>
</td>
                        </tr>                    
                    <?php } ?>
                    <?php if ($_smarty_tpl->tpl_vars['order']->value['delivery']) {?>
                        <tr class="bold">
                            <td colspan="2">Доставка: <?php echo $_smarty_tpl->tpl_vars['delivery']->value['title'];?>
</td>
                            <td class="price"><?php echo $_smarty_tpl->tpl_vars['cartdata']->value['delivery']['cost'];?>
</td>
                        </tr>
                    <?php }?>
                </tbody>
				
				
				
                <tfoot class="summary">
                    <tr>
                        <td colspan="2">Итого</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['cartdata']->value['total'];?>
</td>
                    </tr>
                </tfoot>
				

				
            </table>        
            
            <br>
            <div class="orderComment">
                <label>Комментарий к заказу</label>
				<br><br>
                <?php echo $_smarty_tpl->tpl_vars['order']->value['__comments']->formView();?>

            </div>
            <br>
            <?php if ($_smarty_tpl->tpl_vars['this_controller']->value->getModuleConfig()->require_license_agree) {?>
            <input type="checkbox" name="iagree" value="1" id="iagree"> <label for="iagree"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Я согласен с <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('shop-front-licenseagreement');?>
" class="licAgreement inDialog">условиями предоставления услуг</a><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
            <script type="text/javascript">
                $(function() {
                    $('.formSave').click(function() {
                        if (!$('#iagree').prop('checked')) {
                            alert('Подтвердите согласие с условиями предоставления услуг');
                            return false;
                        }
                    });
                });
            </script>
            <?php }?>
            <button class="formSave" type="submit">Подтвердить заказ</button>
        </div>
    </div>
</form>

<br><br><br><?php }} ?>
