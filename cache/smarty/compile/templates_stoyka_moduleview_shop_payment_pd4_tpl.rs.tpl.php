<?php /* Smarty version Smarty-3.1.18, created on 2017-05-12 13:47:41
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/payment/pd4.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1649699019591592cd9705d2-83691696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87a2126a8896c499b17f0a7ea0ae5d98e8f724ef' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/shop/payment/pd4.tpl',
      1 => 1462797365,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '1649699019591592cd9705d2-83691696',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order' => 0,
    'sum' => 0,
    'company' => 0,
    'user' => 0,
    'address' => 0,
    'sum_int' => 0,
    'sum_dec' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_591592cda8d9a4_14282008',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591592cda8d9a4_14282008')) {function content_591592cda8d9a4_14282008($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_dateformat')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/modifier.dateformat.php';
?><HTML>
<head>
<title>Квитанция Сбербанка</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<style type="text/css">
H1 {font-size: 12pt;}
p, ul, ol, h1 {margin-top:6px; margin-bottom:6px} 
td {font-size: 9pt;}
small {font-size: 7pt;}
body {font-size: 10pt;}
</style>

</head>
<body>
<?php $_smarty_tpl->tpl_vars['user'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getUser(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['company'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getShopCompany(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['address'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getAddress(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['sum'] = new Smarty_variable(explode('.',$_smarty_tpl->tpl_vars['order']->value['totalcost']), null, 0);?>
<?php $_smarty_tpl->tpl_vars['sum_int'] = new Smarty_variable($_smarty_tpl->tpl_vars['sum']->value[0], null, 0);?>
<?php $_smarty_tpl->tpl_vars['sum_dec'] = new Smarty_variable($_smarty_tpl->tpl_vars['sum']->value[1], null, 0);?>

<table style="width: 180mm; height: 145mm;" border="0" cellpadding="0" cellspacing="0">
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=2) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
<tbody>
    <tr valign="top">
    <td style="<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['first']) {?>border-style: solid none none solid; border-color: rgb(0, 0, 0) -moz-use-text-color -moz-use-text-color rgb(0, 0, 0); border-width: 1pt medium medium 1pt; width: 50mm; height: 70mm;<?php } else { ?>border-style: solid none solid solid; border-color: rgb(0, 0, 0) -moz-use-text-color rgb(0, 0, 0) rgb(0, 0, 0); border-width: 1pt medium 1pt 1pt; width: 50mm; height: 70mm;<?php }?>" align="center">
    <b>Извещение</b><br>
    <font style="font-size: 53mm;">&nbsp;<br></font>
    <b>Кассир</b>
    </td>

    <td style="<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['first']) {?>border-style: solid solid none; border-color: rgb(0, 0, 0) rgb(0, 0, 0) -moz-use-text-color; border-width: 1pt 1pt medium;<?php } else { ?>border: 1pt solid rgb(0, 0, 0);<?php }?>    " align="center">
        <table style="width: 122mm; margin-top: 3pt;" border="0" cellpadding="0" cellspacing="0">
            <tbody><tr>
                <td align="right"><small><?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['first']) {?><i>Форма № ПД-4</i><?php }?></small></td>
            </tr>
            <tr>
                <td style="border-bottom: 1pt solid rgb(0, 0, 0);">&nbsp;<?php echo $_smarty_tpl->tpl_vars['company']->value['firm_name'];?>
</td>
            </tr>

            <tr>
                <td align="center"><small>(наименование получателя платежа)</small></td>
            </tr>
        </tbody></table>

        <table style="width: 122mm; margin-top: 3pt;" border="0" cellpadding="0" cellspacing="0">
            <tbody><tr>
                <td style="border-bottom: 1pt solid rgb(0, 0, 0); width: 37mm;">&nbsp;<?php echo $_smarty_tpl->tpl_vars['company']->value['firm_inn'];?>
</td>
                <td style="width: 9mm;">&nbsp;</td>

                <td style="border-bottom: 1pt solid rgb(0, 0, 0);">&nbsp;<?php echo $_smarty_tpl->tpl_vars['company']->value['firm_rs'];?>
</td>
            </tr>
            <tr>
                <td align="center"><small>(ИНН получателя платежа)</small></td>
                <td><small>&nbsp;</small></td>
                <td align="center"><small>(номер счета получателя платежа)</small></td>
            </tr>
        </tbody></table>

        <table style="width: 122mm; margin-top: 3pt;" border="0" cellpadding="0" cellspacing="0">
            <tbody><tr>
                <td>в&nbsp;</td>
                <td style="border-bottom: 1pt solid rgb(0, 0, 0); width: 73mm;">&nbsp;<?php echo $_smarty_tpl->tpl_vars['company']->value['firm_bank'];?>
</td>
                <td align="right">БИК&nbsp;&nbsp;</td>
                <td style="border-bottom: 1pt solid rgb(0, 0, 0); width: 33mm;">&nbsp;<?php echo $_smarty_tpl->tpl_vars['company']->value['firm_bik'];?>
</td>
            </tr>
            <tr>

                <td></td>
                <td align="center"><small>(наименование банка получателя платежа)</small></td>
                <td></td>
                <td></td>
            </tr>
        </tbody></table>
        <table style="width: 122mm; margin-top: 3pt;" border="0" cellpadding="0" cellspacing="0">
            <tbody><tr>

                <td nowrap="nowrap" width="1%">Номер кор./сч. банка получателя платежа&nbsp;&nbsp;</td>
                <td style="border-bottom: 1pt solid rgb(0, 0, 0);" width="100%">&nbsp;<?php echo $_smarty_tpl->tpl_vars['company']->value['firm_ks'];?>
</td>
            </tr>
        </tbody></table>
        <table style="width: 122mm; margin-top: 3pt;" border="0" cellpadding="0" cellspacing="0">
            <tbody><tr>
                <td style="border-bottom: 1pt solid rgb(0, 0, 0); width: 60mm;">&nbsp;Оплата заказа №<?php echo $_smarty_tpl->tpl_vars['order']->value['order_num'];?>
 от <?php echo smarty_modifier_dateformat($_smarty_tpl->tpl_vars['order']->value['dateof'],"@date");?>
</td>
                <td style="width: 2mm;">&nbsp;</td>

                <td style="border-bottom: 1pt solid rgb(0, 0, 0);">&nbsp;</td>
            </tr>
            <tr>
                <td align="center"><small>(наименование платежа)</small></td>
                <td><small>&nbsp;</small></td>
                <td align="center"><small>(номер лицевого счета (код) плательщика)</small></td>
            </tr>
        </tbody></table>

        <table style="width: 122mm; margin-top: 3pt;" border="0" cellpadding="0" cellspacing="0">
            <tbody><tr>
                <td nowrap="nowrap" width="1%">Ф.И.О. плательщика&nbsp;&nbsp;</td>
                <td style="border-bottom: 1pt solid rgb(0, 0, 0);" width="100%">&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value['surname'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['midname'];?>
</td>
            </tr>
        </tbody></table>
        <table style="width: 122mm; margin-top: 3pt;" border="0" cellpadding="0" cellspacing="0">
            <tbody><tr>
                <td nowrap="nowrap" width="1%">Адрес плательщика&nbsp;&nbsp;</td>
                <td style="border-bottom: 1pt solid rgb(0, 0, 0);" width="100%">&nbsp;<?php echo $_smarty_tpl->tpl_vars['address']->value->getLineView();?>
</td>
            </tr>
        </tbody></table>
        <table style="width: 122mm; margin-top: 3pt;" border="0" cellpadding="0" cellspacing="0">
            <tbody><tr>
                <td>Сумма платежа&nbsp;<font style="text-decoration: underline;">&nbsp;<?php echo $_smarty_tpl->tpl_vars['sum_int']->value;?>
&nbsp;</font>&nbsp;руб.&nbsp;<font style="text-decoration: underline;">&nbsp;<?php echo $_smarty_tpl->tpl_vars['sum_dec']->value;?>
&nbsp;</font>&nbsp;коп.</td>

                <td align="right">&nbsp;&nbsp;Сумма платы за услуги&nbsp;&nbsp;_____&nbsp;руб.&nbsp;____&nbsp;коп.</td>
            </tr>
        </tbody></table>
        <table style="width: 122mm; margin-top: 3pt;" border="0" cellpadding="0" cellspacing="0">
            <tbody><tr>
                <td>Итого&nbsp;&nbsp;<font style="text-decoration: underline;">&nbsp;<?php echo $_smarty_tpl->tpl_vars['sum_int']->value;?>
&nbsp;</font>&nbsp;руб.&nbsp;<font style="text-decoration: underline;">&nbsp;<?php echo $_smarty_tpl->tpl_vars['sum_dec']->value;?>
&nbsp;</font>&nbsp;коп.</td>

                <td align="right">&nbsp;&nbsp;«<?php echo smarty_modifier_dateformat($_smarty_tpl->tpl_vars['order']->value['dateof'],"%d");?>
» <?php echo smarty_modifier_dateformat($_smarty_tpl->tpl_vars['order']->value['dateof'],"%v");?>
 <?php echo smarty_modifier_dateformat($_smarty_tpl->tpl_vars['order']->value['dateof'],"%Y");?>
 г.</td>
            </tr>
        </tbody></table>
        <table style="width: 122mm; margin-top: 3pt;" border="0" cellpadding="0" cellspacing="0">
            <tbody><tr>
                <td><small>С условиями приема указанной в платежном документе суммы, 
                в т.ч. с суммой взимаемой платы за услуги банка, ознакомлен и согласен.</small></td>
            </tr>
        </tbody></table>

        <table style="width: 122mm; margin-top: 3pt;" border="0" cellpadding="0" cellspacing="0">
            <tbody><tr>
                <td align="right"><b>Подпись плательщика _____________________</b></td>
            </tr>
        </tbody></table>
    </td>
</tr>
<?php endfor; endif; ?>

</tbody></table>
</body>
</HTML><?php }} ?>
