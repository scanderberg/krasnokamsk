<?php /* Smarty version Smarty-3.1.18, created on 2017-03-17 13:34:43
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/templates/view/form/templates_model_orm_sectionpage_3694744468.auto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81082254658cbbbc360db93-91680149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '261de5d79dc404e76e4765e446a22fa6d32d33fb' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/templates/view/form/templates_model_orm_sectionpage_3694744468.auto.tpl',
      1 => 1462819117,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '81082254658cbbbc360db93-91680149',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58cbbbc3b55e57_67366419',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58cbbbc3b55e57_67366419')) {function content_58cbbbc3b55e57_67366419($_smarty_tpl) {?><?php if (!is_callable('smarty_function_urlmake')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.urlmake.php';
?><div class="formbox" >
                
        <form method="POST" action="<?php echo smarty_function_urlmake(array(),$_smarty_tpl);?>
" enctype="multipart/form-data" class="crud-form">
            <input type="submit" value="" style="display:none">
            <div class="notabs">
                                                                                                            
                                                                                            
                                                                                            
                                                    
                                    <table class="otable">
                                                                                                                    
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__route_id']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__route_id']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__route_id']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__route_id']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__route_id']), 0);?>
</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__template']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__template']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__template']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__template']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__template']), 0);?>
</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__inherit']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__inherit']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__inherit']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__inherit']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__inherit']), 0);?>
</td>
                                </tr>
                                                                                                        </table>
                            </div>
        </form>
    </div><?php }} ?>
