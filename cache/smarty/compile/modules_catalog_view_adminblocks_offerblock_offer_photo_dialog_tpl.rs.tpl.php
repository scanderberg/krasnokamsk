<?php /* Smarty version Smarty-3.1.18, created on 2016-10-28 08:23:04
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/adminblocks/offerblock/offer_photo_dialog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1683123205812e0b8e88651-45158544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfcb93661d69f1d1f5aa4bce7e9825aa81d3dc8d' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/adminblocks/offerblock/offer_photo_dialog.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '1683123205812e0b8e88651-45158544',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'photos_id' => 0,
    'photo_id' => 0,
    'dialog_data' => 0,
    'key' => 0,
    'params' => 0,
    'param' => 0,
    'offer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5812e0b9106b59_61970897',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5812e0b9106b59_61970897')) {function content_5812e0b9106b59_61970897($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><div class="offers-photo-select-dialog">
    <span class="gray">Выбрано фотографий: <?php echo count($_smarty_tpl->tpl_vars['photos_id']->value);?>
</span>
    <form method="POST" id="offers-photo-form">
        <?php  $_smarty_tpl->tpl_vars['photo_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['photo_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['photos_id']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['photo_id']->key => $_smarty_tpl->tpl_vars['photo_id']->value) {
$_smarty_tpl->tpl_vars['photo_id']->_loop = true;
?>
        <input type="hidden" name="photos_id[]" value="<?php echo $_smarty_tpl->tpl_vars['photo_id']->value;?>
">
        <?php } ?>    

    <?php if ($_smarty_tpl->tpl_vars['dialog_data']->value['params']) {?>
        <div class="params-row">
            <div class="param-title">
               <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Выбор по параметрам комплектаций<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <a class="help-icon" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Выберите параметры по которым будут отобраны комплектации<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">?</a>
            </div>
            <div class="items">
                
                <?php  $_smarty_tpl->tpl_vars['params'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['params']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['dialog_data']->value['params']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['params']->key => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['params']->key;
?>
                    <span class="item"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
: <select data-name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                        <option value=""><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
-не выбрано-<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
                    <?php  $_smarty_tpl->tpl_vars['param'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['param']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['params']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['param']->key => $_smarty_tpl->tpl_vars['param']->value) {
$_smarty_tpl->tpl_vars['param']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['param']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['param']->value;?>
</option>
                    <?php } ?>
                    </select>
                    </span>
                <?php } ?>
            </div>          
            <div class="params-buttons">
                <a class="button apply-photo-offer-filter">Отметить</a>
                <a class="button clear-photo-offer-filter">Снять отметки</a>
            </div>
        </div>
        <?php }?>
        <div class="offer-photo-select">
            <span class="gray">Удерживая CTRL, вы можете отметить несколько комплектаций</span>
            <select multiple="multiple" class="photo-select" name="offers_id[]">
                
                <?php  $_smarty_tpl->tpl_vars['offer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['offer']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['dialog_data']->value['offers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['offer']->key => $_smarty_tpl->tpl_vars['offer']->value) {
$_smarty_tpl->tpl_vars['offer']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['offer']->key;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['dialog_data']->value['selected'])) {?>selected<?php }?> data-params='<?php echo json_encode($_smarty_tpl->tpl_vars['offer']->value['params']);?>
'><?php echo $_smarty_tpl->tpl_vars['offer']->value['title'];?>
</option>
                <?php } ?>
            </select>
        </div>
        <div class="offer-photo-actions">
            <a class="button save">Назначить</a>
            <a class="offer-photo-clear">Отменить связь фото с комплектациями</a>
        </div>
    </form>
</div><?php }} ?>
