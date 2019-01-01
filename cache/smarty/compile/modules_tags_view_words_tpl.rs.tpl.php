<?php /* Smarty version Smarty-3.1.18, created on 2018-04-03 14:48:55
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/tags/view/words.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4809907855ac36a277fc212-85968596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73aa0fbf21d5014b0caf5aceb8b5b16142242603' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/tags/view/words.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '4809907855ac36a277fc212-85968596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'word_list' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ac36a278150a4_05194878',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac36a278150a4_05194878')) {function content_5ac36a278150a4_05194878($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['word_list']->value)) {?>
    <ul class="taglist">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['word_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <li><div class="padd"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['word'], ENT_QUOTES, 'UTF-8', true);?>
<sup><a class="tagdel" href="JavaScript:;" data-lid="<?php echo $_smarty_tpl->tpl_vars['item']->value['lid'];?>
" title="Удалить">x</a></sup></div></li>
        <?php } ?>
    </ul>
<?php } else { ?>
    <div class="notags">
        Не добавлено ни одного тега
    </div>
<?php }?>
        <?php }} ?>
