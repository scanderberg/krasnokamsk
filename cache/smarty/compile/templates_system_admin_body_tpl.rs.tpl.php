<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:51:53
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7396326685788dc69bd1111-55521149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0375ef2270c8a67af5c9daa22e02bc9bd269b757' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/body.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '7396326685788dc69bd1111-55521149',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app' => 0,
    'sites' => 0,
    'site' => 0,
    'router' => 0,
    'current_user' => 0,
    'notice' => 0,
    'SITE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc69c7f344_40926467',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc69c7f344_40926467')) {function content_5788dc69c7f344_40926467($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
if (!is_callable('smarty_function_addcss')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addcss.php';
if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
if (!is_callable('smarty_function_moduleinsert')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.moduleinsert.php';
if (!is_callable('smarty_function_modulegetvars')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.modulegetvars.php';
if (!is_callable('smarty_modifier_teaser')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/modifier.teaser.php';
if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><?php echo smarty_function_addjs(array('file'=>"jquery.rsframework.js"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"jquery.deftext.js",'basepath'=>"common"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"jquery.autotranslit.js"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"jquery.messenger.js"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"jstour/jquery.tour.js",'basepath'=>"common"),$_smarty_tpl);?>

<?php echo smarty_function_addcss(array('file'=>"readyscript.ui/jquery-ui.css?v=2"),$_smarty_tpl);?>

<?php echo smarty_function_addcss(array('file'=>"debugstyle.css?v=8"),$_smarty_tpl);?>

<?php echo smarty_function_addcss(array('file'=>"style.css?v=2"),$_smarty_tpl);?>

<?php echo smarty_function_addcss(array('file'=>"framework.css"),$_smarty_tpl);?>

<?php echo smarty_function_addcss(array('file'=>"common/animate.css",'basepath'=>"common"),$_smarty_tpl);?>

<?php echo smarty_function_addcss(array('file'=>"common/tour.css",'basepath'=>"common"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->tpl_vars['app']->value->setBodyClass('admin-body admin-style');?>

<div id="header">    
    <?php if (@constant('STRONG_NOTICE')) {?>
        <div class="strong-notice">
            <?php echo @constant('STRONG_NOTICE');?>

        </div>
    <?php }?>
    <div class="menuline">
        <div class="viewport relative">
            <a href="<?php echo smarty_function_adminUrl(array('mod_controller'=>false,'do'=>false),$_smarty_tpl);?>
" class="brand"></a>
            <?php echo smarty_function_moduleinsert(array('name'=>"\Menu\Controller\Admin\View"),$_smarty_tpl,'/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/body.tpl');?>

            <div class="action-zone">
                <?php echo smarty_function_modulegetvars(array('name'=>"\Site\Controller\Admin\BlockSelectSite",'var'=>"sites"),$_smarty_tpl);?>

                <div class="panel-menu">
                    <div class="current"><?php echo smarty_modifier_teaser($_smarty_tpl->tpl_vars['sites']->value['current']['title'],"27");?>
</div>
                    <ul class="drop-down">
                        <?php  $_smarty_tpl->tpl_vars['site'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['site']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sites']->value['sites']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['site']->key => $_smarty_tpl->tpl_vars['site']->value) {
$_smarty_tpl->tpl_vars['site']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['site']->value['id']!=$_smarty_tpl->tpl_vars['sites']->value['current']['id']) {?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('main.admin',array('Act'=>'changeSite','site'=>$_smarty_tpl->tpl_vars['site']->value['id']));?>
"><?php echo $_smarty_tpl->tpl_vars['site']->value['title'];?>
</a></li>
                            <?php }?>
                        <?php } ?>
                        <li class="user-section">
                            <a href="<?php echo smarty_function_adminUrl(array('mod_controller'=>"users-ctrl",'do'=>"edit",'id'=>$_smarty_tpl->tpl_vars['current_user']->value['id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['current_user']->value->getFio();?>
</a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('main.admin',array('Act'=>'logout'));?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Выход<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
                        </li>
                    </ul>
                </div>
                <?php if (!isset($_smarty_tpl->tpl_vars['notice'])) $_smarty_tpl->tpl_vars['notice'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['notice']->value = __GET_ADMIN_NOTICE()) {?>
                    <a <?php if (!defined('CLOUD_UNIQ')) {?>href="<?php echo smarty_function_adminUrl(array('mod_controller'=>"main-license",'do'=>false),$_smarty_tpl);?>
"<?php }?> class="action license-notice-icon" title="<?php echo $_smarty_tpl->tpl_vars['notice']->value;?>
"></a>
                <?php }?>                                    
                <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('main.admin',array("Act"=>"cleanCache"));?>
" class="action clean-cache crud-get" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Очистить кэш<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"></a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['SITE']->value->getRootUrl(true);?>
" class="action to-site wide-element" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Перейти на сайт<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"><span class="wide-text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
перейти на сайт<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></a>
                <?php if (\RS\Module\Manager::staticModuleExists('marketplace')) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getAdminUrl(false,array(),'marketplace-ctrl');?>
" class="action to-marketplace wide-element" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Маркетплейс<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"><span class="wide-text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Маркетплейс<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></a>
                <?php }?>
            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->tpl_vars['app']->value->blocks->getMainContent();?>
<?php }} ?>
