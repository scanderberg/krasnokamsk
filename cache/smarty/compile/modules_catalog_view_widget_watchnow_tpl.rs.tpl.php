<?php /* Smarty version Smarty-3.1.18, created on 2016-07-20 13:26:24
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/widget/watchnow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1780067607578f51d06a5228-84698555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49781fa6ba7937046afa228741bc34a0425808b2' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/widget/watchnow.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '1780067607578f51d06a5228-84698555',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mod_css' => 0,
    'list' => 0,
    'total' => 0,
    'offset' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_578f51d078e706_74638441',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578f51d078e706_74638441')) {function content_578f51d078e706_74638441($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addcss')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addcss.php';
if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><?php echo smarty_function_addcss(array('file'=>((string)$_smarty_tpl->tpl_vars['mod_css']->value)."watchnow.css",'basepath'=>"root"),$_smarty_tpl);?>


<div class="last-watch">
    <?php $_smarty_tpl->tpl_vars['item'] = new Smarty_variable($_smarty_tpl->tpl_vars['list']->value[0], null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['total']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['offset']->value>0) {?><a data-update-url="<?php echo smarty_function_adminUrl(array('mod_controller'=>"catalog-widget-watchnow",'offset'=>$_smarty_tpl->tpl_vars['offset']->value-1),$_smarty_tpl);?>
" class="prev call-update"></a><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['offset']->value+1<$_smarty_tpl->tpl_vars['total']->value) {?><a data-update-url="<?php echo smarty_function_adminUrl(array('mod_controller'=>"catalog-widget-watchnow",'offset'=>$_smarty_tpl->tpl_vars['offset']->value+1),$_smarty_tpl);?>
" class="next call-update"></a><?php }?>
        <div class="picture">
            <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['editUrl'];?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['product']->getMainImage(160,150,'xy');?>
" class="p-photo">
            </a>
        </div>    
        <div class="description">
            <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['editUrl'];?>
" class="title"><?php echo $_smarty_tpl->tpl_vars['item']->value['product']['title'];?>
</a><br>
            <span class="path"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['path']['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['path']['line'];?>
</a></span><br>
            <span class="time"><?php echo $_smarty_tpl->tpl_vars['item']->value['eventDate'];?>
</span><br>
            <a class="login" <?php if ($_smarty_tpl->tpl_vars['item']->value['user']['href']) {?>href="<?php echo $_smarty_tpl->tpl_vars['item']->value['user']['href'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['user']['name'];?>
</a>
        </div>
    <?php } else { ?>
        <div class="empty">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Ни один товар не был просмотрен<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    <?php }?>
</div><?php }} ?>
