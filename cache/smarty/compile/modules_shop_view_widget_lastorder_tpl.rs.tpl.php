<?php /* Smarty version Smarty-3.1.18, created on 2016-07-20 13:26:24
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/shop/view/widget/lastorder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2022641078578f51d03e4ae7-31463973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f5f19dac0d31d8ebeac57445cb1e9887054243c' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/shop/view/widget/lastorder.tpl',
      1 => 1457614300,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '2022641078578f51d03e4ae7-31463973',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'filter' => 0,
    'orders' => 0,
    'order' => 0,
    'status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_578f51d053d260_20177536',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578f51d053d260_20177536')) {function content_578f51d053d260_20177536($_smarty_tpl) {?><?php if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
if (!is_callable('smarty_modifier_dateformat')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/modifier.dateformat.php';
?><div class="widget-astable">
    <ul class="widget-tabs">
        <li<?php if ($_smarty_tpl->tpl_vars['filter']->value=='active') {?> class="act"<?php }?>><a data-update-url="<?php echo smarty_function_adminUrl(array('mod_controller'=>"shop-widget-lastorders",'filter'=>"active"),$_smarty_tpl);?>
" class="call-update"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
незавершенные<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
        <li<?php if ($_smarty_tpl->tpl_vars['filter']->value=='all') {?> class="act"<?php }?>><a data-update-url="<?php echo smarty_function_adminUrl(array('mod_controller'=>"shop-widget-lastorders",'filter'=>"all"),$_smarty_tpl);?>
" class="call-update"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
все<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
    </ul>
    <?php if (count($_smarty_tpl->tpl_vars['orders']->value)) {?>
    <table class="wtable">
        <thead>
            <tr>
                <th class="statusth">№</th>
                <th>Дата</th>
                <th>Сумма</th>
            </tr>
        </thead>
        <tbody class="overable">
            <?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
            <?php $_smarty_tpl->tpl_vars['status'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getStatus(), null, 0);?>
            <tr onclick="window.open('<?php echo smarty_function_adminUrl(array('mod_controller'=>"shop-orderctrl",'do'=>"edit",'id'=>$_smarty_tpl->tpl_vars['order']->value['id']),$_smarty_tpl);?>
', '_blank')">
                <td class="status" style="background:<?php echo $_smarty_tpl->tpl_vars['status']->value->bgcolor;?>
" title="<?php echo $_smarty_tpl->tpl_vars['status']->value->title;?>
"><?php echo $_smarty_tpl->tpl_vars['order']->value['order_num'];?>
</td>
                <td class="date"><?php echo smarty_modifier_dateformat($_smarty_tpl->tpl_vars['order']->value['dateof'],"@date");?>
 <span class="sep">|</span> <span class="time"><?php echo smarty_modifier_dateformat($_smarty_tpl->tpl_vars['order']->value['dateof'],"@time");?>
</span></td>
                <td class="total"><?php echo $_smarty_tpl->tpl_vars['order']->value->getTotalPrice();?>
</td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php } else { ?>
    <div class="empty-widget">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Нет ни одного заказа<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("%SYSTEM%/admin/widget/paginator.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div><?php }} ?>
