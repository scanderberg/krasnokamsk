<?php /* Smarty version Smarty-3.1.18, created on 2018-04-07 08:25:58
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/modcontrol/view//form/shop_config_file_4198881170.auto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9147839905ac856668c6131-35272148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d2425650940709d766362fd83744ec23567c18b' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/modcontrol/view//form/shop_config_file_4198881170.auto.tpl',
      1 => 1523078758,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '9147839905ac856668c6131-35272148',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ac85666a41171_48080650',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac85666a41171_48080650')) {function content_5ac85666a41171_48080650($_smarty_tpl) {?><?php if (!is_callable('smarty_function_urlmake')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.urlmake.php';
?><div class="formbox" >
    <?php if ($_smarty_tpl->tpl_vars['elem']->value['_before_form_template']) {?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['_before_form_template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?>

            
    <div class="tabs">
        <ul class="tab-container">
                    <li class=" act first"><a data-view="tab0"><?php echo $_smarty_tpl->tpl_vars['elem']->value->getPropertyIterator()->getGroupName(0);?>
</a></li>
                    <li class=""><a data-view="tab1"><?php echo $_smarty_tpl->tpl_vars['elem']->value->getPropertyIterator()->getGroupName(1);?>
</a></li>
                    <li class=""><a data-view="tab2"><?php echo $_smarty_tpl->tpl_vars['elem']->value->getPropertyIterator()->getGroupName(2);?>
</a></li>
                </ul>
        <form method="POST" action="<?php echo smarty_function_urlmake(array(),$_smarty_tpl);?>
" enctype="multipart/form-data" class="crud-form">    
            <input type="submit" value="" style="display:none">
                        <div class="frame" data-name="tab0">
                                                    
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <table class="otable">
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__name']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__name']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__name']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__name']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__name']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__description']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__description']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__description']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__description']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__description']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__version']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__version']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__version']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__version']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__version']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__core_version']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__core_version']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__core_version']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__core_version']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__core_version']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__author']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__author']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__author']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__author']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__author']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__enabled']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__enabled']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__enabled']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__enabled']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__enabled']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__basketminlimit']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__basketminlimit']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__basketminlimit']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__basketminlimit']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__basketminlimit']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__check_quantity']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__check_quantity']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__check_quantity']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__check_quantity']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__check_quantity']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__first_order_status']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__first_order_status']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__first_order_status']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__first_order_status']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__first_order_status']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__discount_code_len']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__discount_code_len']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__discount_code_len']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__discount_code_len']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__discount_code_len']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__user_orders_page_size']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__user_orders_page_size']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__user_orders_page_size']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__user_orders_page_size']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__user_orders_page_size']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__use_personal_account']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__use_personal_account']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__use_personal_account']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__use_personal_account']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__use_personal_account']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__reservation']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__reservation']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__reservation']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__reservation']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__reservation']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__allow_concomitant_count_edit']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__allow_concomitant_count_edit']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__allow_concomitant_count_edit']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__allow_concomitant_count_edit']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__allow_concomitant_count_edit']), 0);?>
</td>
                            </tr>
                            
                                                    </table>
                                                </div>
                        <div class="frame nodisp" data-name="tab1">
                                                    
                                                                        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['____userfields__']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['____userfields__']), 0);?>

                                                                                                                        </div>
                        <div class="frame nodisp" data-name="tab2">
                                                    
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <table class="otable">
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__require_address']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__require_address']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__require_address']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__require_address']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__require_address']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__require_license_agree']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__require_license_agree']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__require_license_agree']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__require_license_agree']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__require_license_agree']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__license_agreement']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__license_agreement']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__license_agreement']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__license_agreement']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__license_agreement']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__use_generated_order_num']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__use_generated_order_num']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__use_generated_order_num']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__use_generated_order_num']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__use_generated_order_num']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__generated_ordernum_mask']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__generated_ordernum_mask']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__generated_ordernum_mask']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__generated_ordernum_mask']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__generated_ordernum_mask']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__generated_ordernum_numbers']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__generated_ordernum_numbers']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__generated_ordernum_numbers']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__generated_ordernum_numbers']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__generated_ordernum_numbers']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__zipcode_required']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__zipcode_required']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__zipcode_required']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__zipcode_required']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__zipcode_required']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__hide_delivery']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__hide_delivery']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__hide_delivery']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__hide_delivery']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__hide_delivery']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__hide_payment']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__hide_payment']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__hide_payment']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__hide_payment']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__hide_payment']), 0);?>
</td>
                            </tr>
                            
                                                    </table>
                                                </div>
                    </form>
    </div>
    </div><?php }} ?>
