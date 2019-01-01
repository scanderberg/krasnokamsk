<?php /* Smarty version Smarty-3.1.18, created on 2016-07-20 13:26:24
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/main/view/widget_wrapper.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1148315569578f51d05dc000-89296354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b8881bb7daee4cf44be9424d946fa1781d48647' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/main/view/widget_wrapper.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '1148315569578f51d05dc000-89296354',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'widget' => 0,
    'app' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_578f51d0605957_28592597',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578f51d0605957_28592597')) {function content_578f51d0605957_28592597($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
?><div class="widget" wid="<?php echo $_smarty_tpl->tpl_vars['widget']->value['id'];?>
" wclass="<?php echo $_smarty_tpl->tpl_vars['widget']->value['class'];?>
">
<?php echo $_smarty_tpl->tpl_vars['app']->value->autoloadScripsAjaxBefore();?>

    <div class="widget-border">
        <div class="widget-head">
            <div class="widget-tools">
                 <a class="close" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Скрыть виджет<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"></a>
            </div>
            <div class="widget-title"><?php echo $_smarty_tpl->tpl_vars['widget']->value['title'];?>
</div>
        </div>  
        <div class="widget-content updatable" data-url="<?php echo smarty_function_adminUrl(array('mod_controller'=>$_smarty_tpl->tpl_vars['widget']->value['class'],'do'=>false),$_smarty_tpl);?>
" data-update-block-id="<?php echo $_smarty_tpl->tpl_vars['widget']->value['class'];?>
">
            <?php echo $_smarty_tpl->tpl_vars['widget']->value['inside_html'];?>

        </div>
    </div>
<?php echo $_smarty_tpl->tpl_vars['app']->value->autoloadScripsAjaxAfter();?>
    
</div><?php }} ?>
