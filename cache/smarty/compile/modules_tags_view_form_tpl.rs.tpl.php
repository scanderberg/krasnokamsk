<?php /* Smarty version Smarty-3.1.18, created on 2018-04-03 14:48:55
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/tags/view/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15077083505ac36a27819322-06089645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6539c13f9c80a720a26e7335725a0ac98396e8f3' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/tags/view/form.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '15077083505ac36a27819322-06089645',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mod_css' => 0,
    'mod_js' => 0,
    'param' => 0,
    'word_list_html' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ac36a27856114_60701866',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac36a27856114_60701866')) {function content_5ac36a27856114_60701866($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addcss')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addcss.php';
if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><?php echo smarty_function_addcss(array('file'=>((string)$_smarty_tpl->tpl_vars['mod_css']->value)."mtagsblock.css",'basepath'=>"root"),$_smarty_tpl);?>


<script>
$LAB
.script("<?php echo $_smarty_tpl->tpl_vars['mod_js']->value;?>
blocktags.jquery.js")
.wait(function() {
    $(function() {
        $('.tags').blocktags({
            getWordsUrl: '<?php echo smarty_function_adminUrl(array('mod_controller'=>"tags-blocktags",'tdo'=>"getWords",'do'=>false),$_smarty_tpl);?>
',
            delWordUrl: '<?php echo smarty_function_adminUrl(array('mod_controller'=>"tags-blocktags",'tdo'=>"del",'do'=>false),$_smarty_tpl);?>
',
            getHelpListUrl: '<?php echo smarty_function_adminUrl(array('mod_controller'=>"tags-blocktags",'tdo'=>"getHelpList",'do'=>false),$_smarty_tpl);?>
'
        });
    });
});
</script>

<div class="tags" data-type="<?php echo $_smarty_tpl->tpl_vars['param']->value['type'];?>
" data-linkid="<?php echo $_smarty_tpl->tpl_vars['param']->value['linkid'];?>
">
    <?php if ($_smarty_tpl->tpl_vars['param']->value['linkid']==0) {?>
        <div class="notags">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Добавлени тегов возможно только в режиме редактирования<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>    
    <?php } else { ?>
        <div class="grayblock">
                <div data-action="<?php echo smarty_function_adminUrl(array('mod_controller'=>"tags-blocktags",'do'=>false,'tdo'=>"addWords"),$_smarty_tpl);?>
" class="tag_form">
                    <input type="hidden" name="link_id" value="<?php echo $_smarty_tpl->tpl_vars['param']->value['linkid'];?>
">
                    <input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['param']->value['type'];?>
">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Ключевые слова<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <input type="text" name="keywords" style="width:270px;" class="autocomplete">
                    <span class="hint" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Введите ключевые слова через запятую. <br>Например: книги,классическая литература,чтение <br>Минимальная длина ключевого слова должна составлять 2 знака<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">?</span>
                    <input type="button" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Добавить<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="add-btn">
                </div>
        </div>
        <div class="word_container">
            <?php echo $_smarty_tpl->tpl_vars['word_list_html']->value;?>

        </div>        
    <?php }?>
</div><?php }} ?>
