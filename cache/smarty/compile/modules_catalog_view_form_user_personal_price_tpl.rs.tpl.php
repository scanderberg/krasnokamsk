<?php /* Smarty version Smarty-3.1.18, created on 2016-12-06 10:50:18
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/user/personal_price.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108379769158466dba5bf108-03827483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93a4863a2492e129447eb868dd84599cce8a5da9' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/user/personal_price.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '108379769158466dba5bf108-03827483',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
    'sites_prepare' => 0,
    'sites' => 0,
    'site' => 0,
    'price' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58466dba635be4_47624195',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58466dba635be4_47624195')) {function content_58466dba635be4_47624195($_smarty_tpl) {?><?php if (!is_callable('smarty_function_static_call')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.static_call.php';
?><?php echo smarty_function_static_call(array('var'=>'sites_prepare','callback'=>array('\Catalog\Model\CostApi','getUserSelectList')),$_smarty_tpl);?>

<?php echo smarty_function_static_call(array('var'=>'sites','callback'=>array('\Catalog\Model\CostApi','fillUsersPriceList'),'params'=>array($_smarty_tpl->tpl_vars['elem']->value,$_smarty_tpl->tpl_vars['sites_prepare']->value)),$_smarty_tpl);?>


<table> 

    <?php  $_smarty_tpl->tpl_vars['site'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['site']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sites']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['site']->key => $_smarty_tpl->tpl_vars['site']->value) {
$_smarty_tpl->tpl_vars['site']->_loop = true;
?>

          <tr class="user_cost_row">
             <td>
                <?php if (count($_smarty_tpl->tpl_vars['sites']->value)>1) {?><?php echo $_smarty_tpl->tpl_vars['site']->value['title'];?>
<?php }?>
             </td>
             <td>
                <?php if (!empty($_smarty_tpl->tpl_vars['site']->value['prices'])) {?>
                  <select name="user_cost[<?php echo $_smarty_tpl->tpl_vars['site']->value['id'];?>
]">
                    <?php  $_smarty_tpl->tpl_vars['price'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['price']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['site']->value['prices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['price']->key => $_smarty_tpl->tpl_vars['price']->value) {
$_smarty_tpl->tpl_vars['price']->_loop = true;
?>
                        <option  value="<?php echo $_smarty_tpl->tpl_vars['price']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['price']->value['selected']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['price']->value['title'];?>
</option>
                    <?php } ?>
                  </select>
                <?php }?>
             </td>
          </tr>
           
    <?php } ?>
    
</table>


<?php }} ?>
