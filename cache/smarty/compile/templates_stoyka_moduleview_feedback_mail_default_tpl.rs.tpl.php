<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 12:27:07
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/feedback/mail/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75432636057bc16eb036724-48263109%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c45552e454bfa5edc1d6e23b995a1199a20145c' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/feedback/mail/default.tpl',
      1 => 1458674883,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '75432636057bc16eb036724-48263109',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mail' => 0,
    'field' => 0,
    'hvalues' => 0,
    'k' => 0,
    'hv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bc16eb64b103_09612750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc16eb64b103_09612750')) {function content_57bc16eb64b103_09612750($_smarty_tpl) {?><html>
    <body>
        <p>Ответ на форму №<?php echo $_smarty_tpl->tpl_vars['mail']->value->getForm()->id;?>
 (<?php echo $_smarty_tpl->tpl_vars['mail']->value->getForm()->title;?>
):</p>

        <table border="1" cellpadding="5" style="border-collapse:collapse;" >
                <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mail']->value->getFields(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
                    <tr>
                        <td>
                           <?php echo $_smarty_tpl->tpl_vars['field']->value['field']['title'];?>
 
                        </td>
                        <td>
                           <?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>

                        </td>
                    </tr>
                <?php } ?>
                <?php $_smarty_tpl->tpl_vars['hvalues'] = new Smarty_variable($_smarty_tpl->tpl_vars['mail']->value->getForm()->getHiddenValues(), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['hvalues']->value) {?>
                   <?php  $_smarty_tpl->tpl_vars['hv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hv']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hvalues']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hv']->key => $_smarty_tpl->tpl_vars['hv']->value) {
$_smarty_tpl->tpl_vars['hv']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['hv']->key;
?>
                        
                        <tr>
                            <td>
                               <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 
                            </td>
                            <td>
                               <?php echo $_smarty_tpl->tpl_vars['hv']->value;?>
 
                            </td>
                        </tr>
                   <?php } ?>    
                <?php }?>
        </table>

        <p>Форма отправлена с сайта "<?php echo $_smarty_tpl->tpl_vars['mail']->value->host_title;?>
"</p>
        <p><?php echo $_smarty_tpl->tpl_vars['mail']->value->host;?>
</p>
    </body>
</html><?php }} ?>
