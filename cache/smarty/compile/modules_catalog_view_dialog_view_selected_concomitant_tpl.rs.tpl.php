<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 13:56:41
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/dialog/view_selected_concomitant.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174500440557bc2be93c7945-15258660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c918f5fdaf5e66621242388dc4277fbc48a58f5b' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/dialog/view_selected_concomitant.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '174500440557bc2be93c7945-15258660',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hide_group_checkbox' => 0,
    'hide_product_checkbox' => 0,
    'productArr' => 0,
    'item' => 0,
    'extdata' => 0,
    'fieldName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bc2be9412a91_67588499',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc2be9412a91_67588499')) {function content_57bc2be9412a91_67588499($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addcss')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addcss.php';
if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><?php echo smarty_function_addcss(array('file'=>"%catalog%/selectproduct.css",'basepath'=>"root"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"%catalog%/selectproduct.js",'basepath'=>"root"),$_smarty_tpl);?>


<div class="concomitant-product-group-container<?php if ($_smarty_tpl->tpl_vars['hide_group_checkbox']->value) {?> hide-group-cb<?php }?><?php if ($_smarty_tpl->tpl_vars['hide_product_checkbox']->value) {?> hide-product-cb<?php }?>" data-urls='{ "getChild": "<?php echo smarty_function_adminUrl(array('mod_controller'=>"catalog-dialog",'do'=>"getChildCategory"),$_smarty_tpl);?>
", "getProducts": "<?php echo smarty_function_adminUrl(array('mod_controller'=>"catalog-dialog",'do'=>"getProducts"),$_smarty_tpl);?>
", "getDialog": "<?php echo smarty_function_adminUrl(array('mod_controller'=>"catalog-dialog",'do'=>false),$_smarty_tpl);?>
" }'>
    <a href="JavaScript:;" class="select-button"><span>Выбрать сопутствующие товары</span></a><br>
        <div class="selected-container">
            <ul class="group-block">
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productArr']->value['group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <li class="group" val="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
"><a class="remove" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
удалить из списка<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">&#215;</a><span class="group_icon" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
категория товаров<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"></span><?php echo $_smarty_tpl->tpl_vars['extdata']->value['group'][$_smarty_tpl->tpl_vars['item']->value]['obj']['name'];?>
</li>
                <?php } ?>
            </ul>
            <ul class="product-block">
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productArr']->value['product']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <li class="product" val="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
">
                        <a class="remove" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
удалить из списка<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">&#215;</a><span class="product_icon" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
товар<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"></span>
                        <?php echo $_smarty_tpl->tpl_vars['extdata']->value['product'][$_smarty_tpl->tpl_vars['item']->value]['obj']['title'];?>

                        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
[onlyone][<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
]" value="0">
                        <input 
                            type="checkbox" 
                            name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
[onlyone][<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
]" 
                            value="1" 
                            title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Всегда в количестве одна штука<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"
                            <?php if ($_smarty_tpl->tpl_vars['productArr']->value['onlyone'][$_smarty_tpl->tpl_vars['item']->value]) {?>
                                checked="checked"
                            <?php }?>
                            >
                            
                    </li>
                <?php } ?>
            </ul>
        </div>

        <div class="input-container" data-field-name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productArr']->value['product']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <input type="hidden" catids="<?php echo $_smarty_tpl->tpl_vars['extdata']->value['product'][$_smarty_tpl->tpl_vars['item']->value]['dirs'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
[product][]">
            <?php } ?>
        </div>
</div>        

<script>
    $.allReady(function() {
        $('.concomitant-product-group-container').selectProduct({
            dialog: 'concomitantDialog',
            itemHtml: function(){
                return $('<li class="product">'+
                        '<a class="remove">&#215</a>'+
                        '<span class="product_icon"></span>'+
                        '<span class="value"></span>'+
                        '<input type="checkbox" value="1" class="onlyone" name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
[onlyone]">'+
                    '</li>');
            }
        });
    });
</script><?php }} ?>
