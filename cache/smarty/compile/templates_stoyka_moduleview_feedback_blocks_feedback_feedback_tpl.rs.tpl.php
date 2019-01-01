<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:52:33
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/feedback/blocks/feedback/feedback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11214897835788dc9107ed16-85041738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec44e8dc6ab16404ce6109c8be61016ccd9ada06' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/feedback/blocks/feedback/feedback.tpl',
      1 => 1462820019,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '11214897835788dc9107ed16-85041738',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error_fields' => 0,
    'success' => 0,
    'form' => 0,
    'this_controller' => 0,
    'error_field' => 0,
    'error' => 0,
    'fields' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc9114f527_54193773',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc9114f527_54193773')) {function content_5788dc9114f527_54193773($_smarty_tpl) {?>
<div class="light-box" <?php if ($_smarty_tpl->tpl_vars['error_fields']->value||$_smarty_tpl->tpl_vars['success']->value) {?> style='display: block!important;' <?php }?> ></div>

<div align='center' class="feedbkForm" id='lids-form' style='display: <?php if ($_smarty_tpl->tpl_vars['error_fields']->value||$_smarty_tpl->tpl_vars['success']->value) {?>block!important<?php } else { ?>none<?php }?>; position: absolute!important; z-index: 1000!important;'>
<div id="close-lids" align='right'></div>
   <?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
       <div class="formResult success"> 
          <?php echo (($tmp = @$_smarty_tpl->tpl_vars['form']->value['successMessage'])===null||$tmp==='' ? "Благодарим Вас за обращение к нам. Мы ответим вам при первой же возможности." : $tmp);?>

       </div>
   <?php } else { ?>
     
       <?php if ($_smarty_tpl->tpl_vars['form']->value['id']) {?> 
           <form method="POST" enctype="multipart/form-data"> 
               <?php echo $_smarty_tpl->tpl_vars['this_controller']->value->myBlockIdInput();?>

               <input type="hidden" name="form_id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['id'];?>
"/>
               <?php $_smarty_tpl->tpl_vars['fields'] = new Smarty_variable($_smarty_tpl->tpl_vars['form']->value->getFields(), null, 0);?> 
               <p class="feedbkFormName"><?php echo $_smarty_tpl->tpl_vars['form']->value['title'];?>
</p>
               
               <?php if ($_smarty_tpl->tpl_vars['error_fields']->value) {?>
                   <div class="pageError"> 
                   <?php  $_smarty_tpl->tpl_vars['error_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error_field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['error_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error_field']->key => $_smarty_tpl->tpl_vars['error_field']->value) {
$_smarty_tpl->tpl_vars['error_field']->_loop = true;
?>
                       <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['error_field']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
                            <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
                       <?php } ?>
                   <?php } ?>
                   </div>
               <?php }?>
               
               <table class="formTable tabFrame">
                   <tbody>
                       <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?> 
                           <tr class="feedbkRow">
                                
                               <td class="title key">
                                 <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

                                 <?php if ($_smarty_tpl->tpl_vars['item']->value['required']) {?>
                                      <span class="required">*</span>
                                 <?php }?>
                               </td> 
                               <td class="fieldVals value">
                                   <?php echo $_smarty_tpl->tpl_vars['item']->value->getFieldForm();?>

                                   <?php if ($_smarty_tpl->tpl_vars['item']->value['hint']) {?>
                                       <div class="help">
                                           <?php echo $_smarty_tpl->tpl_vars['item']->value['hint'];?>

                                       </div>
                                   <?php }?>
                               </td>      
                           </tr>
                       <?php } ?>
                       
                   </tbody>
               </table>
               <div>
                  <span class="required">*</span> - Поля обязательные для заполнения
               </div>
               <div class="feedbkButtonLine">
                  <input type="submit" class="formSave" value="Отправить"/>
               </div>
           </form>
       <?php } else { ?>
          <p>Формы с таким id не существует. Или id указан неправильно.</p>
       <?php }?>
   <?php }?>
</div>
<?php }} ?>
