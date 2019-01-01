<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:55:53
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/reservation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14610868335788dd5999dda3-74298003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ede270f2fca77ee6f40aca8d7683946ceb6f51a' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/reservation.tpl',
      1 => 1460044064,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '14610868335788dd5999dda3-74298003',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'router' => 0,
    'reserve' => 0,
    'offers_levels' => 0,
    'level' => 0,
    'value' => 0,
    'use_value' => 0,
    'offers' => 0,
    'offer' => 0,
    'is_auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dd59b36805_09473381',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dd59b36805_09473381')) {function content_5788dd59b36805_09473381($_smarty_tpl) {?><form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('shop-front-reservation',array("product_id"=>$_smarty_tpl->tpl_vars['product']->value['id']));?>
" class="reserveForm">
        <input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
        <h2 class="dialogTitle" data-dialog-options='{ "width": "400" }'>Заказать</h2>
        <p class="prodtitle"><?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
 <?php echo $_smarty_tpl->tpl_vars['product']->value['barcode'];?>
</p>    
        <p class="infotext">
            В данный момент товара нет в наличии. Заполните форму и мы оповестим вас о поступлении товара.
        </p>    
        <?php if ($_smarty_tpl->tpl_vars['reserve']->value->hasError()) {?><div class="error"><?php echo implode(', ',$_smarty_tpl->tpl_vars['reserve']->value->getErrors());?>
</div><?php }?>
        <table class="formTable dialogTable">
            <tr>
                <td class="key">Кол-во</td>
                <td class="value"><input type="text" name="amount" class="amount" value="<?php echo $_smarty_tpl->tpl_vars['reserve']->value['amount'];?>
">
                    <div class="qpicker">
                        <a class="inc"></a>
                        <a class="dec"></a>
                    </div>                            
                </td>
            </tr>
            <tr>
                <td class="key">Телефон</td>
                <td class="value"><input type="text" name="phone" class="inp" value="<?php echo $_smarty_tpl->tpl_vars['reserve']->value['phone'];?>
"></td>
            </tr>            
            <tr>
                <td class="key"><small>или</small> E-mail</td>
                <td class="value"><input type="text" name="email" class="inp" value="<?php echo $_smarty_tpl->tpl_vars['reserve']->value['email'];?>
"></td>
            </tr>
            
            <?php if ($_smarty_tpl->tpl_vars['product']->value->isMultiOffersUse()) {?>
                <tr>
                    <td class="key"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['product']->value['offer_caption'])===null||$tmp==='' ? 'Комплектация' : $tmp);?>
</td>
                    <td class="value">
                    </td>
                </tr>
                <?php $_smarty_tpl->tpl_vars['offers_levels'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['multioffers']['levels'], null, 0);?> 
                <?php  $_smarty_tpl->tpl_vars['level'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['level']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['offers_levels']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['level']->key => $_smarty_tpl->tpl_vars['level']->value) {
$_smarty_tpl->tpl_vars['level']->_loop = true;
?>
                    <tr>
                        <td class="key"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['level']->value['title'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['level']->value['prop_title'] : $tmp);?>
</td>
                        <td class="value">
                            <select name="multioffers[<?php echo $_smarty_tpl->tpl_vars['level']->value['prop_id'];?>
]" data-prop-title="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['level']->value['title'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['level']->value['prop_title'] : $tmp);?>
">
                               <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['level']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                                   <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'use_value', null); ob_start(); ?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['level']->value['title'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['level']->value['prop_title'] : $tmp);?>
: <?php echo $_smarty_tpl->tpl_vars['value']->value['val_str'];?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                   <option <?php if ($_smarty_tpl->tpl_vars['reserve']->value['multioffers'][$_smarty_tpl->tpl_vars['level']->value['prop_id']]==$_smarty_tpl->tpl_vars['use_value']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['use_value']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['val_str'];?>
</option> 
                               <?php } ?>
                            </select>
                        </td>
                    </tr>
                <?php } ?>
            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value->isOffersUse()) {?>
                <?php $_smarty_tpl->tpl_vars['offers'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['offers']['items'], null, 0);?>
                <tr>
                    <td class="key"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['product']->value['offer_caption'])===null||$tmp==='' ? 'Комплектация' : $tmp);?>
</td>
                    <td class="value">
                        <select name="offer">
                           <?php  $_smarty_tpl->tpl_vars['offer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['offer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['offers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['offer']->key => $_smarty_tpl->tpl_vars['offer']->value) {
$_smarty_tpl->tpl_vars['offer']->_loop = true;
?>
                               <option value="<?php echo $_smarty_tpl->tpl_vars['offer']->value['title'];?>
" <?php if ($_smarty_tpl->tpl_vars['reserve']->value['offer']==$_smarty_tpl->tpl_vars['offer']->value['title']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['offer']->value['title'];?>
</option> 
                           <?php } ?>
                        </select>
                    </td>
                </tr>                
            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['is_auth']->value&&\RS\Module\Manager::staticModuleEnabled('kaptcha')) {?>
            <tr>
                <td class="key">Введите код, указанный на картинке</td>
                <td class="value">
                    <img height="42" width="100" src="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('kaptcha',array('rand'=>rand(1,9999999)));?>
">
                    <input type="text" name="kaptcha" class="kaptcha">
                </td>
            </tr>
            <?php }?>
        </table>
        <button type="submit" class="formSave">Оповестить меня</button>
</form>

<script>
    $(function() {
        $('.reserveForm .inc').off('click').on('click', function() {
            var amountField = $(this).closest('.reserveForm').find('.amount');
            amountField.val( (+amountField.val()|0)+1 );
        });
        
        $('.reserveForm .dec').off('click').on('click', function() {
            var amountField = $(this).closest('.reserveForm').find('.amount');
            var val = (+amountField.val()|0);
            if (val>1) {
                amountField.val( val-1 );
            }
        });        
    });
</script><?php }} ?>
