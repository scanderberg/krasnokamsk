<?php /* Smarty version Smarty-3.1.18, created on 2017-03-17 13:41:09
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/site/view/form/site_model_orm_site_3785703083.auto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71628961858cbbd459a7cc2-73325464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34fc2386101b43dbad7dad21acdfec74a79b1a52' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/site/view/form/site_model_orm_site_3785703083.auto.tpl',
      1 => 1489747269,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '71628961858cbbd459a7cc2-73325464',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58cbbd45b88511_31577488',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58cbbd45b88511_31577488')) {function content_58cbbd45b88511_31577488($_smarty_tpl) {?><?php if (!is_callable('smarty_function_urlmake')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.urlmake.php';
?><div class="formbox" >
                
        <form method="POST" action="<?php echo smarty_function_urlmake(array(),$_smarty_tpl);?>
" enctype="multipart/form-data" class="crud-form">
            <input type="submit" value="" style="display:none">
            <div class="notabs">
                                                                                                            
                                                                                            
                                                                                            
                                                                                            
                                                                                            
                                                                                            
                                                                                            
                                                                                            
                                                                                            
                                                    
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
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__full_title']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__full_title']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__full_title']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__full_title']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__full_title']), 0);?>
</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__domains']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__domains']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__domains']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__domains']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__domains']), 0);?>
</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__folder']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__folder']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__folder']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__folder']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__folder']), 0);?>
</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__language']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__language']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__language']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__language']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__language']), 0);?>
</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__default']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__default']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__default']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__default']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__default']), 0);?>
</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__update_robots_txt']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__update_robots_txt']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__update_robots_txt']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__update_robots_txt']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__update_robots_txt']), 0);?>
</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__redirect_to_main_domain']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__redirect_to_main_domain']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__redirect_to_main_domain']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__redirect_to_main_domain']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__redirect_to_main_domain']), 0);?>
</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__theme']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__theme']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__theme']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__theme']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__theme']), 0);?>
</td>
                                </tr>
                                                                                                        </table>
                            </div>
        </form>
    </div><?php }} ?>
