<?php /* Smarty version Smarty-3.1.18, created on 2018-04-07 08:33:14
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/main/view/widget_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3186425705ac8581ac3d495-92898085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '983271d3bb993a731cf65936a2a6080ed34e22f4' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/main/view/widget_list.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '3186425705ac8581ac3d495-92898085',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'list' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ac8581acf82b6_36378443',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac8581acf82b6_36378443')) {function content_5ac8581acf82b6_36378443($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><?php if (!$_smarty_tpl->tpl_vars['url']->value->isAjax()) {?>
    <div id="content-layout">
        <div class="viewport">
<?php }?>
    <div class="titlebox"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Виджеты<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
    <div class="widget-collection overable" data-dialog-options='{ "width": "1010px" }'>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['wid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['wid']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
            <!-- Начало: виджет -->
            <div class="item<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['use'])) {?> already-exists<?php }?>" data-wclass="<?php echo $_smarty_tpl->tpl_vars['item']->value['short_class'];?>
">
                <div class="item-head">
                    <a class="add" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Добавить виджет<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"></a>
                    <a class="remove" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Скрыть виджет<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"></a>
                    <div class="title"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</div>
                </div>
                <div class="item-body">
                    <table class="preview-table">
                        <tr>
                            <td class="key">Описание:</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</td>
                        </tr>
                        <tr>
                            <td class="key">Модуль:</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['module'];?>
</td>
                        </tr>                        
                    </table>
                </div>
            </div>
            <!-- Конец: виджет -->
    <?php } ?>
    </div>

<?php if (!$_smarty_tpl->tpl_vars['url']->value->isAjax()) {?>
    </div> <!-- .viewport -->
</div> <!-- .content -->
<?php }?><?php }} ?>
