<?php /* Smarty version Smarty-3.1.18, created on 2016-07-20 13:26:24
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/users/view/widget/authlog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1453393845578f51d082e6c3-05194081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3aedb9f183d2fa39a629ab4b559acdd89bbb1065' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/users/view/widget/authlog.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '1453393845578f51d082e6c3-05194081',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'event' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_578f51d08b5e98_30893980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578f51d08b5e98_30893980')) {function content_578f51d08b5e98_30893980($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
?><table class="wtable tbcenter">
    <thead>
        <tr>
            <th>Дата</th>
            <th>Логин/Имя</th>
            <th>IP</th>
        </tr>
    </thead>
    <tbody class="overable">
    <?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
        <tr>
        <?php $_smarty_tpl->tpl_vars['user'] = new Smarty_variable($_smarty_tpl->tpl_vars['event']->value->getObject(), null, 0);?>
            <td style="font-size:11px;"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value->getEventDate(),"%d.%m.%Y");?>
<br>
            <span style="color:#ACACAC"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value->getEventDate(),"%H:%M");?>
</span>
            </td>
            <td>
                <a style="text-decoration:underline; float:left; line-height:15px; margin-right:10px;" href="<?php echo smarty_function_adminUrl(array('mod_controller'=>"users-ctrl",'do'=>"edit",'id'=>$_smarty_tpl->tpl_vars['user']->value['id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
</a>
                <span style="font-size:10px; float:left; line-height:15px;">
                <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['surname'];?>
</span>
            </td>
            <td><?php echo $_smarty_tpl->tpl_vars['event']->value->getIP();?>
</td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<?php echo $_smarty_tpl->getSubTemplate ("%SYSTEM%/admin/widget/paginator.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
