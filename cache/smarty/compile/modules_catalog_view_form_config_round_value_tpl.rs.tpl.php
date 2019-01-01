<?php /* Smarty version Smarty-3.1.18, created on 2018-04-03 15:13:01
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/config/round_value.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12280518695ac36fcd6b0270-83723077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82c5b309f14db64403bac31d483777da1a6064bd' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/config/round_value.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '12280518695ac36fcd6b0270-83723077',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
    'el' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ac36fcd72d524_33889597',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac36fcd72d524_33889597')) {function content_5ac36fcd72d524_33889597($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['el'] = new Smarty_variable($_smarty_tpl->tpl_vars['elem']->value['__update_price_round_value'], null, 0);?>
<input type="text" maxlength="<?php echo $_smarty_tpl->tpl_vars['el']->value->getMaxLength();?>
" disabled="disabled" value="<?php echo $_smarty_tpl->tpl_vars['el']->value->get();?>
" name="<?php echo $_smarty_tpl->tpl_vars['el']->value->getName();?>
"/>

<script type="text/javascript">
    $(function(){
       //Если округлять опция включена 
       if ($("[name='update_price_round']").prop('checked')){
         $("[name='update_price_round_value']").prop('disabled',false);  
       } 
       $("[name='update_price_round']").on('click',function(){
           //Если округлять опция включена 
           if ($(this).prop('checked')){
              $("[name='update_price_round_value']").prop('disabled',false); 
           }else{
              $("[name='update_price_round_value']").prop('disabled',true); 
           }
       });
    });
</script><?php }} ?>
