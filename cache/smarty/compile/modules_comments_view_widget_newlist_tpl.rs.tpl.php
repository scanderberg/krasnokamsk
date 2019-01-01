<?php /* Smarty version Smarty-3.1.18, created on 2016-07-20 13:26:24
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/comments/view/widget/newlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:639666977578f51d0ae9654-03923266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f7bdefeb0f974f9607d23a863615a775133cdbe' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/comments/view/widget/newlist.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '639666977578f51d0ae9654-03923266',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'item' => 0,
    'config' => 0,
    'item_time' => 0,
    'time' => 0,
    'day_before_time_int' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_578f51d0b36621_46824335',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578f51d0b36621_46824335')) {function content_578f51d0b36621_46824335($_smarty_tpl) {?><?php if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
if (!is_callable('smarty_modifier_teaser')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/modifier.teaser.php';
if (!is_callable('smarty_modifier_dateformat')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/modifier.dateformat.php';
?><?php $_smarty_tpl->tpl_vars['config'] = new Smarty_variable(\RS\Config\Loader::byModule('comment'), null, 0);?>
<table class="wtable">
    <thead>
        <tr>
            <th>Комментарий</th>        
            <th>Инфо</th>
        </tr>
    </thead>
    <tbody class="overable">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <?php $_smarty_tpl->tpl_vars['item_time'] = new Smarty_variable(strtotime($_smarty_tpl->tpl_vars['item']->value['dateof']), null, 0);?>        
        <tr class="crud-edit <?php if ((!$_smarty_tpl->tpl_vars['config']->value['need_moderate']&&($_smarty_tpl->tpl_vars['item_time']->value<$_smarty_tpl->tpl_vars['time']->value&&$_smarty_tpl->tpl_vars['item_time']->value>$_smarty_tpl->tpl_vars['day_before_time_int']->value)&&!$_smarty_tpl->tpl_vars['item']->value['moderated'])||($_smarty_tpl->tpl_vars['config']->value['need_moderate']&&!$_smarty_tpl->tpl_vars['item']->value['moderated'])) {?>highlight<?php }?>" data-crud-options='{ "updateThis": true }' data-url="<?php echo smarty_function_adminUrl(array('mod_controller'=>"comments-ctrl",'do'=>"edit",'id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
">
            <td title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Нажмите, чтобы перейти к редактированию<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"><?php echo smarty_modifier_teaser($_smarty_tpl->tpl_vars['item']->value['message'],"250");?>
</td>        
            <td width="45">
                <span class="help-icon" title="<?php echo smarty_modifier_dateformat($_smarty_tpl->tpl_vars['item']->value['dateof'],"%datetime");?>
<br><?php echo $_smarty_tpl->tpl_vars['item']->value['type_obj_title'];?>
">?</span>
            </td>
        </tr>
        <?php } ?>
        <?php if (empty($_smarty_tpl->tpl_vars['list']->value)) {?>
        <tr>
            <td colspan="3" align="center">Нет комментариев</td>
        </tr>
        <?php }?>
    </tbody>
</table>

<?php echo $_smarty_tpl->getSubTemplate ("%SYSTEM%/admin/widget/paginator.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
