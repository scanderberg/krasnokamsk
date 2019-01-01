<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:52:33
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/main/blocks/breadcrumbs/breadcrumbs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3549853225788dc917ac8c9-49529574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '264a340459afb28ff40b08fdca7b39735e7daf79' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/main/blocks/breadcrumbs/breadcrumbs.tpl',
      1 => 1459520869,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '3549853225788dc917ac8c9-49529574',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app' => 0,
    'bc' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc919831d8_87418708',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc919831d8_87418708')) {function content_5788dc919831d8_87418708($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['bc'] = new Smarty_variable($_smarty_tpl->tpl_vars['app']->value->breadcrumbs->getBreadCrumbs(), null, 0);?>
<?php if (!empty($_smarty_tpl->tpl_vars['bc']->value)) {?>
<nav class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#">
    <i itemprop="breadcrumb">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->index++;
 $_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["path"]['first'] = $_smarty_tpl->tpl_vars['item']->first;
?>
            <?php if (empty($_smarty_tpl->tpl_vars['item']->value['href'])) {?>
                <i typeof="v:Breadcrumb">
                    <span <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['path']['first']) {?>class="first"<?php }?> property="v:title"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span>
                </i>
            <?php } else { ?>
                <i typeof="v:Breadcrumb">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['href'];?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['path']['first']) {?>class="first"<?php }?> rel="v:url" property="v:title"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                </i>
            <?php }?>
        <?php } ?>
    </i>
</nav>
<?php }?><?php }} ?>
