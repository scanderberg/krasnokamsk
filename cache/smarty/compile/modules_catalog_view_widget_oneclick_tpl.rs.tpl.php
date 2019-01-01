<?php /* Smarty version Smarty-3.1.18, created on 2016-07-20 13:26:24
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/widget/oneclick.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1677806019578f51d0a29274-77639287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bad54301485e57cf7eb1cddeda125d83ccbfd06' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/widget/oneclick.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '1677806019578f51d0a29274-77639287',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'filter' => 0,
    'list' => 0,
    'item' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_578f51d0a6d483_31613978',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578f51d0a6d483_31613978')) {function content_578f51d0a6d483_31613978($_smarty_tpl) {?><?php if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
if (!is_callable('smarty_modifier_dateformat')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/modifier.dateformat.php';
?><div class="widget-astable">
    <ul class="widget-tabs">
        <li<?php if ($_smarty_tpl->tpl_vars['filter']->value=='new') {?> class="act"<?php }?>><a data-update-url="<?php echo smarty_function_adminUrl(array('mod_controller'=>"catalog-widget-oneclick",'filter'=>"new"),$_smarty_tpl);?>
" class="call-update"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Новые<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
        <li<?php if ($_smarty_tpl->tpl_vars['filter']->value=='viewed') {?> class="act"<?php }?>><a data-update-url="<?php echo smarty_function_adminUrl(array('mod_controller'=>"catalog-widget-oneclick",'filter'=>"viewed"),$_smarty_tpl);?>
" class="call-update"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Закрытые<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
    </ul>
    <?php if (count($_smarty_tpl->tpl_vars['list']->value)) {?>
        <table class="wtable">
            <thead>
                <tr>
                    <th class="statusth">№</th>
                    <th>Дата</th>
                    <th>Товар</th>
                </tr>
            </thead>
            <tbody class="overable">
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <tr class="crud-edit" data-crud-options='{ "updateThis": true }' data-url="<?php echo smarty_function_adminUrl(array('mod_controller'=>"catalog-oneclickctrl",'do'=>"edit",'id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
">
                        <td class="date"><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
                        <td class="date"><?php echo smarty_modifier_dateformat($_smarty_tpl->tpl_vars['item']->value['dateof'],"@date");?>
 <span class="sep">|</span> <span class="time"><?php echo smarty_modifier_dateformat($_smarty_tpl->tpl_vars['item']->value['dateof'],"@time");?>
</span></td>
                        <?php $_smarty_tpl->tpl_vars['data'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value->tableDataUnserialized(), null, 0);?>
                        <td class="total"><?php echo $_smarty_tpl->tpl_vars['data']->value['product']['title'];?>
<br/>
                        <?php echo $_smarty_tpl->tpl_vars['data']->value['phone'];?>
</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <div class="empty-widget">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Нет ни одной покупки в 1 клик<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("%SYSTEM%/admin/widget/paginator.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div><?php }} ?>
