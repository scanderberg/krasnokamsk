<?php /* Smarty version Smarty-3.1.18, created on 2016-07-16 07:40:27
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/form/order/delivery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6616921625789babb858ea4-65575054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '240e47284d4b8ac94030cc38e0b5346a584f7769' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/form/order/delivery.tpl',
      1 => 1460044872,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '6616921625789babb858ea4-65575054',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
    'user_id' => 0,
    'hl' => 0,
    'delivery' => 0,
    'address' => 0,
    'warehouse_list' => 0,
    'warehouse' => 0,
    'show_delivery_buttons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5789babb8fc034_77798725',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5789babb8fc034_77798725')) {function content_5789babb8fc034_77798725($_smarty_tpl) {?><?php if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/plugins/function.cycle.php';
?><?php if ($_smarty_tpl->tpl_vars['elem']->value['delivery']>0) {?>
    <input type="hidden" name="delivery" value="<?php echo $_smarty_tpl->tpl_vars['elem']->value['delivery'];?>
"/>
    <input type="hidden" name="use_addr" value="<?php echo $_smarty_tpl->tpl_vars['elem']->value['use_addr'];?>
"/>
    <?php $_smarty_tpl->tpl_vars['hl'] = new Smarty_variable(array("n","hl"), null, 0);?>  
    
    <h3>Доставка <a href="<?php echo smarty_function_adminUrl(array('do'=>'deliveryDialog','order_id'=>$_smarty_tpl->tpl_vars['elem']->value['id'],'delivery'=>$_smarty_tpl->tpl_vars['elem']->value['delivery'],'user_id'=>$_smarty_tpl->tpl_vars['user_id']->value),$_smarty_tpl);?>
" class="tool-edit crud-add editDeliveryButton" id="editDelivery" title="редактировать"></a></h3>

    <table class="order-table delivery-params">
            <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"delivery"),$_smarty_tpl);?>
">
                <td width="20">
                    Тип
                </td>
                <td class="d_title"><?php echo $_smarty_tpl->tpl_vars['delivery']->value['title'];?>
</td>
            </tr>
            <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"delivery"),$_smarty_tpl);?>
">
                <td>
                    Индекс
                </td>
                <td class="d_zipcode"><?php echo $_smarty_tpl->tpl_vars['address']->value['zipcode'];?>
</td>
            </tr>
            <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"delivery"),$_smarty_tpl);?>
">
                <td>Страна</td>
                <td class="d_country"><?php echo $_smarty_tpl->tpl_vars['address']->value['country'];?>
</td>
            </tr>
            <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"delivery"),$_smarty_tpl);?>
">
                <td>Край/область</td>
                <td class="d_region"><?php echo $_smarty_tpl->tpl_vars['address']->value['region'];?>
</td>
            </tr>
            <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"delivery"),$_smarty_tpl);?>
">
                <td>Город</td>
                <td class="d_city"><?php echo $_smarty_tpl->tpl_vars['address']->value['city'];?>
</td>
            </tr>
            <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"delivery"),$_smarty_tpl);?>
">
                <td>Адрес</td>
                <td class="d_address"><?php echo $_smarty_tpl->tpl_vars['address']->value['address'];?>
</td>
            </tr>
            <?php if (!empty($_smarty_tpl->tpl_vars['warehouse_list']->value)) {?>
                <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"delivery"),$_smarty_tpl);?>
">
                    <td>Склад</td>
                    <td class="d_warehouse">
                        <select name="warehouse">
                            <option value="0">не выбран</option>
                            <?php  $_smarty_tpl->tpl_vars['warehouse'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['warehouse']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['warehouse_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['warehouse']->key => $_smarty_tpl->tpl_vars['warehouse']->value) {
$_smarty_tpl->tpl_vars['warehouse']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['warehouse']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['elem']->value['warehouse']==$_smarty_tpl->tpl_vars['warehouse']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['warehouse']->value['title'];?>
</option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
            <?php }?>
            <tr class="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->tpl_vars['hl']->value,'name'=>"delivery"),$_smarty_tpl);?>
">
                <td>Контактное лицо</td>
                <td class="d_contact_person"><input type="text" name="contact_person" value="<?php echo $_smarty_tpl->tpl_vars['elem']->value['contact_person'];?>
" class="maxWidth"></td>
            </tr>  
    </table> 
                   
    <?php if ($_smarty_tpl->tpl_vars['elem']->value['delivery_new_query']) {?>
        
        <?php echo $_smarty_tpl->tpl_vars['delivery']->value->getTypeObject()->getAdminAddittionalHtml($_smarty_tpl->tpl_vars['elem']->value);?>
    
    <?php }?>     
    <?php if ($_smarty_tpl->tpl_vars['elem']->value['id']>0&&$_smarty_tpl->tpl_vars['show_delivery_buttons']->value) {?>
        
        <?php echo $_smarty_tpl->tpl_vars['delivery']->value->getTypeObject()->getAdminHTML($_smarty_tpl->tpl_vars['elem']->value);?>

            
    <?php }?>
<?php } else { ?>
    <p class="emptyOrderBlock">Тип доставки не указан. <a href="<?php echo smarty_function_adminUrl(array('do'=>'deliveryDialog','order_id'=>$_smarty_tpl->tpl_vars['elem']->value['id'],'user_id'=>$_smarty_tpl->tpl_vars['user_id']->value),$_smarty_tpl);?>
" class="crud-add editDeliveryButton">Указать доставку</a>.</p>
<?php }?><?php }} ?>
