<?php /* Smarty version Smarty-3.1.18, created on 2018-04-03 16:40:24
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/modcontrol/view//form/menu_config_file_705316652.auto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2956601685ac384485994f7-38490922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '515029651d65d7dad2bdc722657b98670563b068' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/modcontrol/view//form/menu_config_file_705316652.auto.tpl',
      1 => 1522762824,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '2956601685ac384485994f7-38490922',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ac38448627111_45235943',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac38448627111_45235943')) {function content_5ac38448627111_45235943($_smarty_tpl) {?><?php if (!is_callable('smarty_function_urlmake')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.urlmake.php';
?><div class="formbox" >
    <?php if ($_smarty_tpl->tpl_vars['elem']->value['_before_form_template']) {?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['_before_form_template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?>

                
        <form method="POST" action="<?php echo smarty_function_urlmake(array(),$_smarty_tpl);?>
" enctype="multipart/form-data" class="crud-form">
            <input type="submit" value="" style="display:none">
            <div class="notabs">
                                                                                                                                                                                                                                                                                                                                            
                                    <table class="otable">
                                                                                    
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__name']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__name']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__name']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?></td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__name']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__name']), 0);?>
</td>
                                </tr>
                                                            
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__description']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__description']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__description']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?></td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__description']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__description']), 0);?>
</td>
                                </tr>
                                                            
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__version']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__version']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__version']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?></td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__version']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__version']), 0);?>
</td>
                                </tr>
                                                            
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__core_version']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__core_version']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__core_version']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?></td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__core_version']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__core_version']), 0);?>
</td>
                                </tr>
                                                            
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__author']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__author']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__author']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?></td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__author']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__author']), 0);?>
</td>
                                </tr>
                                                            
                                <tr>
                                    <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__enabled']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__enabled']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__enabled']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?></td>
                                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__enabled']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__enabled']), 0);?>
</td>
                                </tr>
                                                                        </table>
                            </div>
        </form>
    </div><?php }} ?>
