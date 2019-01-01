<?php /* Smarty version Smarty-3.1.18, created on 2018-04-03 14:43:43
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/menu/view/form/menu_model_menutype_link_815748819.auto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20050313325ac368efd22830-68508596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71b7eefc83a951693679b9dac33bf8970a6d1b34' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/menu/view/form/menu_model_menutype_link_815748819.auto.tpl',
      1 => 1522755823,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '20050313325ac368efd22830-68508596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ac368efd43c94_53067540',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac368efd43c94_53067540')) {function content_5ac368efd43c94_53067540($_smarty_tpl) {?>
                                            
                                            
    
                                    
            <tr>
                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__link']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__link']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__link']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                </td>
                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__link']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__link']), 0);?>
</td>
            </tr>
                                            
            <tr>
                <td class="otitle"><?php echo $_smarty_tpl->tpl_vars['elem']->value['__target_blank']->getTitle();?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['elem']->value['__target_blank']->getHint()!='') {?><a class="help-icon" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['__target_blank']->getHint(), ENT_QUOTES, 'UTF-8', true);?>
">?</a><?php }?>
                </td>
                <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__target_blank']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__target_blank']), 0);?>
</td>
            </tr>
                        <?php }} ?>
