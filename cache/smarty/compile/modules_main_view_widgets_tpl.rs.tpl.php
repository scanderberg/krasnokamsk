<?php /* Smarty version Smarty-3.1.18, created on 2016-07-20 13:26:23
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/main/view/widgets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1308128167578f51cff07c10-10946769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d43a5e20e21ca78d337d897ec62ef4edc90420a' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/main/view/widgets.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '1308128167578f51cff07c10-10946769',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mod_js' => 0,
    'mod_css' => 0,
    'total' => 0,
    'widgetsByCol' => 0,
    'col_name' => 0,
    'widgets' => 0,
    'widget' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_578f51d0366832_69550260',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578f51d0366832_69550260')) {function content_578f51d0366832_69550260($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
if (!is_callable('smarty_function_addcss')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addcss.php';
if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
if (!is_callable('smarty_function_moduleinsert')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.moduleinsert.php';
?><?php echo smarty_function_addjs(array('file'=>((string)$_smarty_tpl->tpl_vars['mod_js']->value)."widgetengine.js",'basepath'=>"root"),$_smarty_tpl);?>

<?php echo smarty_function_addcss(array('file'=>((string)$_smarty_tpl->tpl_vars['mod_css']->value)."widgetstyle.css?v=2",'basepath'=>"root"),$_smarty_tpl);?>

<div class="viewport" id="widgets-block" data-widget-urls='{ "widgetList": "<?php echo smarty_function_adminUrl(array('do'=>"GetWidgetList"),$_smarty_tpl);?>
", "addWidget":"<?php echo smarty_function_adminUrl(array('do'=>"ajaxAddWidget"),$_smarty_tpl);?>
", "removeWidget":"<?php echo smarty_function_adminUrl(array('do'=>"ajaxRemoveWidget"),$_smarty_tpl);?>
", "moveWidget": "<?php echo smarty_function_adminUrl(array('do'=>"ajaxMoveWidget"),$_smarty_tpl);?>
" }'>
    <div class="widget-buttons">
        <a class="addwidget" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Добавить виджет<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"></a>
    </div>

    <div id="noWidgetText" class="<?php if (!$_smarty_tpl->tpl_vars['total']->value) {?>visible<?php }?>">
        <p class="text">Настройте<br><span class="small">свой рабочий стол</span></p>
        <div class="welcome-disk">
            <span class="dynamic">динамика<br>продаж</span>
            <span class="stat">статистика<br>магазина</span>
            <span class="lastviewed">что смотрят на сайте</span>
            <span class="welcome">приветствие</span>
            <span class="lastcomments">последние<br>комментарии</span>
            <span class="orders">недавние заказы</span>
            <span class="support">поддержка клиентов</span>
            <span class="security">безопасность</span>
            <a class="add addwidget">добавить виджет</a>
        </div>
    </div>
    <div id="contentblock-widget">
        <div id="widget-zone">
            <?php  $_smarty_tpl->tpl_vars['widgets'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['widgets']->_loop = false;
 $_smarty_tpl->tpl_vars['col_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['widgetsByCol']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['widgets']->key => $_smarty_tpl->tpl_vars['widgets']->value) {
$_smarty_tpl->tpl_vars['widgets']->_loop = true;
 $_smarty_tpl->tpl_vars['col_name']->value = $_smarty_tpl->tpl_vars['widgets']->key;
?>
                <div id="col_<?php echo $_smarty_tpl->tpl_vars['col_name']->value;?>
" colname="<?php echo $_smarty_tpl->tpl_vars['col_name']->value;?>
">
                    <?php  $_smarty_tpl->tpl_vars['widget'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['widget']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widgets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['widget']->key => $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->_loop = true;
?>
                        <?php echo smarty_function_moduleinsert(array('name'=>$_smarty_tpl->tpl_vars['widget']->value->getFullClass(),'id'=>$_smarty_tpl->tpl_vars['widget']->value['id']),$_smarty_tpl,'/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/main/view/widgets.tpl');?>

                    <?php } ?>
                </div>
            <?php } ?>    
        </div>
    </div>
</div><?php }} ?>
