<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 19:45:56
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/checkout/delivery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1827704048578913449b59f7-73374790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d365edacced2d2eb2fa9236cc4371893e9b364f' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/checkout/delivery.tpl',
      1 => 1460044869,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '1827704048578913449b59f7-73374790',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order' => 0,
    'item' => 0,
    'delivery_list' => 0,
    'something_wrong' => 0,
    'dcost' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57891344a5acd7_75476054',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57891344a5acd7_75476054')) {function content_57891344a5acd7_75476054($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['order']->value->hasError()) {?>
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
    <input type="hidden" name="delivery" value="0">
    <div class="formSection">
        <span class="formSectionTitle">Доставка</span>
    </div>    
    <table class="formTable">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['delivery_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <?php $_smarty_tpl->tpl_vars['something_wrong'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value->getTypeObject()->somethingWrong($_smarty_tpl->tpl_vars['order']->value), null, 0);?> 
                <tr class="row">
                    <td class="value fixedRadio topPadd" width="40">
                        <input type="radio" name="delivery" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" id="dlv_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['order']->value['delivery']==$_smarty_tpl->tpl_vars['item']->value['id']) {?>checked<?php }?> <?php if ($_smarty_tpl->tpl_vars['something_wrong']->value) {?>disabled="disabled"<?php }?>>
                    </td>                    
                    <td class="value marginRadio topPadd" colspan="2">
                        <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['picture'])) {?>
                           <img class="logoService" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['__picture']->getUrl(100,100,'xy');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"/>
                       <?php }?>
                       <div class="middleBox">
                           <label for="dlv_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</label>
                           <div class="help"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</div>
                           <div class="additionalInfo"><?php echo $_smarty_tpl->tpl_vars['item']->value->getAddittionalHtml();?>
</div>
                       </div>
                    </td>
                    <td class="value marginRadio checkoutPriceCol">
                            <?php if ($_smarty_tpl->tpl_vars['something_wrong']->value) {?>
                                <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['something_wrong']->value;?>
</span>
                            <?php } else { ?>
                            
                                <span class="help"><?php echo $_smarty_tpl->tpl_vars['order']->value->getDeliveryExtraText($_smarty_tpl->tpl_vars['item']->value);?>
</span>                             
                                <?php $_smarty_tpl->tpl_vars['dcost'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getDeliveryCostText($_smarty_tpl->tpl_vars['item']->value), null, 0);?>
                                <?php if ($_smarty_tpl->tpl_vars['dcost']->value>0) {?>                        
                                    <span id="scost_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="scost"><?php echo $_smarty_tpl->tpl_vars['dcost']->value;?>
</span>
                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->tpl_vars['dcost']->value;?>

                                <?php }?>
                            <?php }?>
                    </td>
                </tr>
            <?php } ?>
        </tr>
    </table>
    <button type="submit" class="formSave">Далее</button>
</form>
<br><br><br><?php }} ?>
