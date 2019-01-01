<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 19:46:01
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/checkout/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25891272457891349641f88-26331772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2adb64f7be2447ead03915de95ab8f53cbadf5b3' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/checkout/payment.tpl',
      1 => 1460044869,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '25891272457891349641f88-26331772',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order' => 0,
    'item' => 0,
    'pay_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5789134975ffa8_33266133',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5789134975ffa8_33266133')) {function content_5789134975ffa8_33266133($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['order']->value->hasError()) {?>
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
<form method="POST" id="order-form">
    <input type="hidden" name="payment" value="0">
    <div class="formSection">
        <span class="formSectionTitle">Оплата</span>
    </div>    
    <table class="formTable">
        <tr>                                            
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pay_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <tr>
                    <td class="value fixedRadio topPadd" width="40">
                        <input type="radio" name="payment" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" id="pay_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['order']->value['payment']==$_smarty_tpl->tpl_vars['item']->value['id']) {?>checked<?php }?>>
                    </td>
                    <td class="value marginRadio topPadd" colspan="2">
                       <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['picture'])) {?>
                           <img class="logoService" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['__picture']->getUrl(100,100,'xy');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"/>
                       <?php }?>                    
                        <div class="middleBox">
                            <label for="pay_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</label>
                            <div class="help"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</div>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tr>
    </table>
    <button type="submit" class="formSave">Далее</button>
</form>
<br><br><br><?php }} ?>
