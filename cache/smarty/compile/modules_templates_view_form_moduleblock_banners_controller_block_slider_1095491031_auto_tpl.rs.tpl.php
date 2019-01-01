<?php /* Smarty version Smarty-3.1.18, created on 2018-04-04 06:39:16
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/templates/view//form/moduleblock_banners_controller_block_slider_1095491031.auto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16122801255ac448e475e633-56371093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1507babb1bd1af4f0f2d41d8b52d1b678d4342b' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/templates/view//form/moduleblock_banners_controller_block_slider_1095491031.auto.tpl',
      1 => 1522813156,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '16122801255ac448e475e633-56371093',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ac448e48d2b45_61199070',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac448e48d2b45_61199070')) {function content_5ac448e48d2b45_61199070($_smarty_tpl) {?><?php if (!is_callable('smarty_function_urlmake')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.urlmake.php';
?><div class="formbox" >
                
        <form method="POST" action="<?php echo smarty_function_urlmake(array(),$_smarty_tpl);?>
" enctype="multipart/form-data" class="crud-form">
            <input type="submit" value="" style="display:none">
            <div class="notabs">
                                                                                                            
                                                                                            
                                                    
                                    <table class="otable">
                                                                                                                    
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__indexTemplate']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__indexTemplate']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__indexTemplate']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__indexTemplate']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__indexTemplate']), 0);?>
</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__zone']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__zone']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__zone']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__zone']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__zone']), 0);?>
</td>
                                </tr>
                                                                                                        </table>
                            </div>
        </form>
    </div><?php }} ?>
