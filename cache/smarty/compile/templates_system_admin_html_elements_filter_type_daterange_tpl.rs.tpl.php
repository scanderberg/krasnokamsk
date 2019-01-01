<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:51:53
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/filter/type/daterange.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19971608935788dc69946378-04759130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc74cd2155c7e9c8e2338c2b45bc5be835180a1d' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/html_elements/filter/type/daterange.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '19971608935788dc69946378-04759130',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fitem' => 0,
    'values' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc69a6a1b5_68894470',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc69a6a1b5_68894470')) {function content_5788dc69a6a1b5_68894470($_smarty_tpl) {?><div class="daterange">
    <?php $_smarty_tpl->tpl_vars['values'] = new Smarty_variable($_smarty_tpl->tpl_vars['fitem']->value->getValue(), null, 0);?>
    <span class="from"><?php echo t('с');?>
</span> <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['fitem']->value->getName();?>
[from]" value="<?php if (isset($_smarty_tpl->tpl_vars['values']->value['from'])) {?><?php echo $_smarty_tpl->tpl_vars['values']->value['from'];?>
<?php }?>" <?php echo $_smarty_tpl->tpl_vars['fitem']->value->getAttrString();?>
 datefilter="datefilter"/> 
    <span class="to"><?php echo t('по');?>
</span> <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['fitem']->value->getName();?>
[to]" value="<?php if (isset($_smarty_tpl->tpl_vars['values']->value['to'])) {?><?php echo $_smarty_tpl->tpl_vars['values']->value['to'];?>
<?php }?>" <?php echo $_smarty_tpl->tpl_vars['fitem']->value->getAttrString();?>
 datefilter="datefilter"/>
</div><?php }} ?>
