<?php /* Smarty version Smarty-3.1.18, created on 2016-12-06 10:50:18
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/users/view/form/user/ban_expire.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43653582858466dba307486-63209238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d35c7bb2deb6e41b3a178bbf52ef47e84adb43b' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/users/view/form/user/ban_expire.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '43653582858466dba307486-63209238',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58466dba3ce220_39271272',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58466dba3ce220_39271272')) {function content_58466dba3ce220_39271272($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><input type="checkbox" name="setban" value="1" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
заблокировать<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" id="setban" <?php if ($_smarty_tpl->tpl_vars['elem']->value['ban_expire']) {?>checked<?php }?>>
<span class="ban-reason">
    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__ban_expire']->getOriginalTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__ban_expire']), 0);?>
<br>
    <p><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Причина блокировки<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__ban_reason']->getOriginalTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__ban_reason']), 0);?>

</span>

<script>
    $(function() {        
        $('#setban').change(function() {
            var context = $(this).closest('td');
            if ($(this).is(':checked')) {
                $('.ban-reason', context).show();
            } else {
                $('[name="ban_expire"]', context).val('');
                $('[name="ban_reason"]', context).val('');
                $('.ban-reason', context).hide();
            }
        }).change();
    });
</script><?php }} ?>
