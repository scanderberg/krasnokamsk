<?php /* Smarty version Smarty-3.1.18, created on 2018-04-03 15:13:01
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/modcontrol/view//form/catalog_config_file_2196584036.auto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18578766555ac36fcd4217f4-29972342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5baf0d4fd86b4724e9c87f1b186ab667337b4f5' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/modcontrol/view//form/catalog_config_file_2196584036.auto.tpl',
      1 => 1463052481,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '18578766555ac36fcd4217f4-29972342',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ac36fcd681b30_12576244',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac36fcd681b30_12576244')) {function content_5ac36fcd681b30_12576244($_smarty_tpl) {?><?php if (!is_callable('smarty_function_urlmake')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.urlmake.php';
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
                    <li class=""><a data-view="tab3"><?php echo $_smarty_tpl->tpl_vars['elem']->value->getPropertyIterator()->getGroupName(3);?>
</a></li>
                    <li class=""><a data-view="tab4"><?php echo $_smarty_tpl->tpl_vars['elem']->value->getPropertyIterator()->getGroupName(4);?>
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
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__default_cost']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__default_cost']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__default_cost']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__default_cost']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__default_cost']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__old_cost']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__old_cost']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__old_cost']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__old_cost']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__old_cost']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__hide_unobtainable_goods']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__hide_unobtainable_goods']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__hide_unobtainable_goods']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__hide_unobtainable_goods']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__hide_unobtainable_goods']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__list_page_size']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__list_page_size']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__list_page_size']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__list_page_size']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__list_page_size']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__items_on_page']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__items_on_page']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__items_on_page']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__items_on_page']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__items_on_page']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__list_default_order']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__list_default_order']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__list_default_order']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__list_default_order']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__list_default_order']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__list_default_order_direction']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__list_default_order_direction']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__list_default_order_direction']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__list_default_order_direction']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__list_default_order_direction']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__list_default_view_as']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__list_default_view_as']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__list_default_view_as']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__list_default_view_as']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__list_default_view_as']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__default_weight']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__default_weight']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__default_weight']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__default_weight']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__default_weight']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__default_weight_unit']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__default_weight_unit']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__default_weight_unit']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__default_weight_unit']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__default_weight_unit']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__default_unit']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__default_unit']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__default_unit']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__default_unit']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__default_unit']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__concat_dir_meta']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__concat_dir_meta']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__concat_dir_meta']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__concat_dir_meta']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__concat_dir_meta']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__auto_barcode']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__auto_barcode']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__auto_barcode']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__auto_barcode']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__auto_barcode']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__disable_search_index']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__disable_search_index']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__disable_search_index']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__disable_search_index']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__disable_search_index']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__update_price_round']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__update_price_round']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__update_price_round']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__update_price_round']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__update_price_round']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__update_price_round_value']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__update_price_round_value']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__update_price_round_value']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__update_price_round_value']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__update_price_round_value']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__cbr_link']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__cbr_link']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__cbr_link']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__cbr_link']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__cbr_link']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__cbr_percent_update']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__cbr_percent_update']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__cbr_percent_update']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__cbr_percent_update']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__cbr_percent_update']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__use_offer_unit']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__use_offer_unit']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__use_offer_unit']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__use_offer_unit']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__use_offer_unit']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__import_photos_timeout']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__import_photos_timeout']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__import_photos_timeout']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__import_photos_timeout']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__import_photos_timeout']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__import_yml_timeout']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__import_yml_timeout']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__import_yml_timeout']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__import_yml_timeout']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__import_yml_timeout']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__show_all_products']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__show_all_products']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__show_all_products']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__show_all_products']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__show_all_products']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__price_like_slider']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__price_like_slider']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__price_like_slider']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__price_like_slider']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__price_like_slider']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__search_fields']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__search_fields']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__search_fields']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__search_fields']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__search_fields']), 0);?>
</td>
                            </tr>
                            
                                                    </table>
                                                </div>
                        <div class="frame nodisp" data-name="tab1">
                                                    
                                                                        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['____clickfields__']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['____clickfields__']), 0);?>

                                                                                                                                                                                                                </div>
                        <div class="frame nodisp" data-name="tab2">
                                                    
                                                                                                                                                                                                    <table class="otable">
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__csv_id_fields']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__csv_id_fields']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__csv_id_fields']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__csv_id_fields']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__csv_id_fields']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__csv_offer_product_search_field']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__csv_offer_product_search_field']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__csv_offer_product_search_field']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__csv_offer_product_search_field']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__csv_offer_product_search_field']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__csv_offer_search_field']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__csv_offer_search_field']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__csv_offer_search_field']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__csv_offer_search_field']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__csv_offer_search_field']), 0);?>
</td>
                            </tr>
                            
                                                    </table>
                                                </div>
                        <div class="frame nodisp" data-name="tab3">
                                                    
                                                                                                                                                        <table class="otable">
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__brand_products_specdir']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__brand_products_specdir']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__brand_products_specdir']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__brand_products_specdir']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__brand_products_specdir']), 0);?>
</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__brand_products_cnt']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__brand_products_cnt']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__brand_products_cnt']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__brand_products_cnt']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__brand_products_cnt']), 0);?>
</td>
                            </tr>
                            
                                                    </table>
                                                </div>
                        <div class="frame nodisp" data-name="tab4">
                                                    
                                                                                                            <table class="otable">
                                                        
                            <tr>
                                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__warehouse_sticks']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__warehouse_sticks']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__warehouse_sticks']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__warehouse_sticks']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__warehouse_sticks']), 0);?>
</td>
                            </tr>
                            
                                                    </table>
                                                </div>
                    </form>
    </div>
    </div><?php }} ?>
