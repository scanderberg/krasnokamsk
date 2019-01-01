<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 13:56:41
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/keyvaleditor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15134755257bc2be920f743-65987782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cbfb4eff7cd753ee040feb67528107859791130' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/system/admin/keyvaleditor.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '15134755257bc2be920f743-65987782',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field_name' => 0,
    'arr' => 0,
    'prop_key' => 0,
    'prop_val' => 0,
    'add_button_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bc2be923f642_43642561',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc2be923f642_43642561')) {function content_57bc2be923f642_43642561($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?>
<?php echo smarty_function_addjs(array('file'=>"jquery.tablednd.js",'basepath'=>"common"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"jquery.keyvaleditor.js",'basepath'=>"common"),$_smarty_tpl);?>

<div class="keyval-container" data-var="<?php echo $_smarty_tpl->tpl_vars['field_name']->value;?>
">
    <table class="keyvalTable<?php if (empty($_smarty_tpl->tpl_vars['arr']->value)) {?> hidden<?php }?>">
        <thead>
            <tr>
                <th></th>
                <th class="kv-head-key"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Параметр<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
                <th class="kv-head-val"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Значение<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
            </tr>
        </thead>
        <tbody>
            <?php if (is_array($_smarty_tpl->tpl_vars['arr']->value)) {?>
            <?php  $_smarty_tpl->tpl_vars['prop_val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prop_val']->_loop = false;
 $_smarty_tpl->tpl_vars['prop_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prop_val']->key => $_smarty_tpl->tpl_vars['prop_val']->value) {
$_smarty_tpl->tpl_vars['prop_val']->_loop = true;
 $_smarty_tpl->tpl_vars['prop_key']->value = $_smarty_tpl->tpl_vars['prop_val']->key;
?>
            <tr>
                <td class="kv-sort">
                    <div class="ksort"></div>
                </td>
                <td class="kv-key"><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['field_name']->value;?>
[key][]" value="<?php echo $_smarty_tpl->tpl_vars['prop_key']->value;?>
"></td>
                <td class="kv-val"><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['field_name']->value;?>
[val][]" value="<?php echo $_smarty_tpl->tpl_vars['prop_val']->value;?>
"></td>
                <td class="kv-del"><a class="remove"></a></td>
            </tr>
            <?php } ?>
            <?php }?>
        </tbody>
    </table>
    <a href="javascript:;" class="add-pair"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['add_button_text']->value)===null||$tmp==='' ? "Добавить" : $tmp);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
</div><?php }} ?>
