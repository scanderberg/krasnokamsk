<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 13:56:39
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/catalog_model_orm_product_273934082.auto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115460895957bc2be7a85216-10002469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bce845949dfe7cba41df8ffe3f3c98d367858a25' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/catalog_model_orm_product_273934082.auto.tpl',
      1 => 1462862793,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '115460895957bc2be7a85216-10002469',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bc2be7ea34b5_76083437',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc2be7ea34b5_76083437')) {function content_57bc2be7ea34b5_76083437($_smarty_tpl) {?><?php if (!is_callable('smarty_function_urlmake')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.urlmake.php';
?><div class="formbox" data-dialog-options = '{ "width":900, "minHeight":500 }'>
            
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
                    <li class=""><a data-view="tab5"><?php echo $_smarty_tpl->tpl_vars['elem']->value->getPropertyIterator()->getGroupName(5);?>
</a></li>
                    <li class=""><a data-view="tab6"><?php echo $_smarty_tpl->tpl_vars['elem']->value->getPropertyIterator()->getGroupName(6);?>
</a></li>
                    <li class=""><a data-view="tab7"><?php echo $_smarty_tpl->tpl_vars['elem']->value->getPropertyIterator()->getGroupName(7);?>
</a></li>
                    <li class=""><a data-view="tab8"><?php echo $_smarty_tpl->tpl_vars['elem']->value->getPropertyIterator()->getGroupName(8);?>
</a></li>
                </ul>
        <form method="POST" action="<?php echo smarty_function_urlmake(array(),$_smarty_tpl);?>
" enctype="multipart/form-data" class="crud-form">    
            <input type="submit" value="" style="display:none"/>
                        <div class="frame" data-name="tab0">
                                                    
                                                                                                <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__id']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__id']), 0);?>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['___tmpid']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['___tmpid']), 0);?>

                                                                                                                                                                                                                                <table class="otable">
                                                                                                                                                        
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__title']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__title']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__title']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__title']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__title']), 0);?>
</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__alias']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__alias']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__alias']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__alias']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__alias']), 0);?>
</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__short_description']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__short_description']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__short_description']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__short_description']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__short_description']), 0);?>
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
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__barcode']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__barcode']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__barcode']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__barcode']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__barcode']), 0);?>
</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__weight']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__weight']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__weight']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__weight']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__weight']), 0);?>
</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__dateof']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__dateof']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__dateof']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__dateof']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__dateof']), 0);?>
</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__excost']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__excost']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__excost']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__excost']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__excost']), 0);?>
</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__unit']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__unit']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__unit']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__unit']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__unit']), 0);?>
</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__min_order']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__min_order']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__min_order']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__min_order']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__min_order']), 0);?>
</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__public']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__public']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__public']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__public']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__public']), 0);?>
</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__xdir']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__xdir']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__xdir']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__xdir']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__xdir']), 0);?>
</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__maindir']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__maindir']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__maindir']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__maindir']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__maindir']), 0);?>
</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__xspec']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__xspec']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__xspec']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__xspec']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__xspec']), 0);?>
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
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__brand_id']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__brand_id']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__brand_id']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__brand_id']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__brand_id']), 0);?>
</td>
                                </tr>
                                
                                                                                                                                                                                        
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__rating']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__rating']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__rating']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__rating']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__rating']), 0);?>
</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__xml_id']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__xml_id']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__xml_id']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__xml_id']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__xml_id']), 0);?>
</td>
                                </tr>
                                
                                                                                    </table>
                                                </div>
                        <div class="frame nodisp" data-name="tab1">
                                                    
                                                                        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['___property_']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['___property_']), 0);?>

                                                                                                                                                </div>
                        <div class="frame nodisp" data-name="tab2">
                                                    
                                                                        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['___offers_']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['___offers_']), 0);?>

                                                                                                                                                                                                                    </div>
                        <div class="frame nodisp" data-name="tab3">
                                                    
                                                                                                                                                                                                                                                                            <table class="otable">
                                                                                            
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__meta_title']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__meta_title']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__meta_title']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__meta_title']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__meta_title']), 0);?>
</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__meta_keywords']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__meta_keywords']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__meta_keywords']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__meta_keywords']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__meta_keywords']), 0);?>
</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__meta_description']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__meta_description']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__meta_description']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__meta_description']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__meta_description']), 0);?>
</td>
                                </tr>
                                
                                                                                    </table>
                                                </div>
                        <div class="frame nodisp" data-name="tab4">
                                                    
                                                                        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['___recomended_']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['___recomended_']), 0);?>

                                                                                                                                                </div>
                        <div class="frame nodisp" data-name="tab5">
                                                    
                                                                        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['___concomitant_']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['___concomitant_']), 0);?>

                                                                                                                                                </div>
                        <div class="frame nodisp" data-name="tab6">
                                                    
                                                                        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['___photo_']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['___photo_']), 0);?>

                                                                                                                                                </div>
                        <div class="frame nodisp" data-name="tab7">
                                                    
                                                                                                                                    <table class="otable">
                                                                                            
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__tax_ids']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__tax_ids']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__tax_ids']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__tax_ids']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__tax_ids']), 0);?>
</td>
                                </tr>
                                
                                                                                    </table>
                                                </div>
                        <div class="frame nodisp" data-name="tab8">
                                                    
                                                                        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['____files__']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['____files__']), 0);?>

                                                                                                                                                </div>
                    </form>
    </div>
    </div><?php }} ?>
