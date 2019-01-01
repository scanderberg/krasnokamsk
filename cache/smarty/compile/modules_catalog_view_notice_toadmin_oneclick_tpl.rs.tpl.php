<?php /* Smarty version Smarty-3.1.18, created on 2017-06-19 08:56:34
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/notice/toadmin_oneclick.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84242224159476792b15ec5-76003015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd66ffd2814af5d5a800bbf5162bea07c181de94c' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/notice/toadmin_oneclick.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '84242224159476792b15ec5-76003015',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'data' => 0,
    'product' => 0,
    'offers_info' => 0,
    'router' => 0,
    'offer' => 0,
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59476792cc8ab5_32338813',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59476792cc8ab5_32338813')) {function content_59476792cc8ab5_32338813($_smarty_tpl) {?><p>Уважаемый, администратор! На сайте <?php echo $_smarty_tpl->tpl_vars['url']->value->getDomainStr();?>
 хотят купить в 1 клик товар:</p>

<?php $_smarty_tpl->tpl_vars['product'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value->oneclick['product'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['offers_info'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value->oneclick['offer_fields'], null, 0);?>

<p><?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
</p>

<p><a href="<?php echo $_smarty_tpl->tpl_vars['product']->value->getUrl(true);?>
">Перейти к товару</a></p>

<h3>Контакты заказчика</h3>
<p>Имя заказчика: <?php echo $_smarty_tpl->tpl_vars['data']->value->oneclick['name'];?>
</p>
<p>Телефон: <?php echo $_smarty_tpl->tpl_vars['data']->value->oneclick['phone'];?>
</p>

<h3>Заказан товар</h3>
<table cellpadding="5" border="1" bordercolor="#969696" style="border-collapse:collapse; border:1px solid #969696">
    <thead>
        <tr>
            <th>ID</th>
            <th>Наименование</th>
            <?php if (!empty($_smarty_tpl->tpl_vars['offers_info']->value['offer'])||!empty($_smarty_tpl->tpl_vars['offers_info']->value['multioffer'])) {?>
                <th>Комплектация</th>  
            <?php }?>
            <th>Код</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getAdminUrl('edit',array("id"=>$_smarty_tpl->tpl_vars['product']->value['id']),'catalog-ctrl',true);?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
</a></td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getAdminUrl('edit',array("id"=>$_smarty_tpl->tpl_vars['product']->value['id']),'catalog-ctrl',true);?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
</a></td>
            <?php if (!empty($_smarty_tpl->tpl_vars['offers_info']->value['offer'])) {?>
                <h3>Сведения о комплектации</h3>
                <td><a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getAdminUrl('edit',array("id"=>$_smarty_tpl->tpl_vars['product']->value['id']),'catalog-ctrl',true);?>
"><?php echo $_smarty_tpl->tpl_vars['offers_info']->value['offer'];?>
</a></td>
            <?php } elseif (!empty($_smarty_tpl->tpl_vars['offers_info']->value['multioffer'])) {?>
                <h3>Сведения о комплектации</h3>
                <td>
                <?php  $_smarty_tpl->tpl_vars['offer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['offer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['offers_info']->value['multioffer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['offer']->key => $_smarty_tpl->tpl_vars['offer']->value) {
$_smarty_tpl->tpl_vars['offer']->_loop = true;
?>
                    <?php echo $_smarty_tpl->tpl_vars['offer']->value;?>
<br/>
                <?php } ?>
                </td>     
            <?php }?>
            <td><?php echo $_smarty_tpl->tpl_vars['product']->value['barcode'];?>
</td>
        </tr>
    </tbody>
</table>




<?php if ($_smarty_tpl->tpl_vars['data']->value->oneclick['ext_fields']) {?>
<h3>Дополнительные сведения</h3>
    <table cellpadding="5" border="1" bordercolor="#969696" style="border-collapse:collapse; border:1px solid #969696">
       <tbody>
          <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value->oneclick['ext_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>  
              <tr>
                 <td><b><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</b></td>
                 <td><?php echo $_smarty_tpl->tpl_vars['field']->value['current_val'];?>
</td>
              </tr>
          <?php } ?>
       </tbody>
    </table>
<?php }?>


<p>Автоматическая рассылка <?php echo $_smarty_tpl->tpl_vars['url']->value->getDomainStr();?>
.</p><?php }} ?>
