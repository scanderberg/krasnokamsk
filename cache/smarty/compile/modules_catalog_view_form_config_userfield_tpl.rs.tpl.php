<?php /* Smarty version Smarty-3.1.18, created on 2018-04-03 15:13:01
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/config/userfield.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12612985595ac36fcd8b7130-81314276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccace04dd218a7ccf6c25eb0df01c2cccc7390f5' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/config/userfield.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '12612985595ac36fcd8b7130-81314276',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ac36fcd95c972_89999487',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac36fcd95c972_89999487')) {function content_5ac36fcd95c972_89999487($_smarty_tpl) {?><table class="otable">                          
    <tbody>
    <tr>
        <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__buyinoneclick']->getTitle();?>
</td>
        <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__buyinoneclick']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__buyinoneclick']), 0);?>
</td>
    </tr>
    <tr>
        <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__dont_buy_when_null']->getTitle();?>
</td>
        <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__dont_buy_when_null']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__dont_buy_when_null']), 0);?>
</td>
    </tr>
    </tbody>
</table>

<?php echo $_smarty_tpl->tpl_vars['elem']->value->getClickFieldsManager()->getAdminForm(t('Будут запрошены при оформлении заказа'));?>
<?php }} ?>
