<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 13:56:41
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/adminblocks/offerblock/offer_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42353167857bc2be91d4fd9-73150483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46ab56312bfed547af2066ac88872ab4674b3ff1' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/adminblocks/offerblock/offer_main.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '42353167857bc2be91d4fd9-73150483',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main_offer' => 0,
    'warehouses' => 0,
    'warehouse' => 0,
    'other_fields_form' => 0,
    'elem' => 0,
    'images' => 0,
    'image' => 0,
    'is_act' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bc2be920b1c0_32493508',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc2be920b1c0_32493508')) {function content_57bc2be920b1c0_32493508($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><h3>Основная комплектация</h3>
<table class="main-offer">
    <tbody class="main-offer-back offer-item">
        <tr>
           <td class="td col1" rowspan="2">&nbsp;</td> 
           <td class="td title-td col2" rowspan="2">
                <input type="hidden" name="offers[main][id]" value="<?php echo $_smarty_tpl->tpl_vars['main_offer']->value['id'];?>
"/> 
                <p class="label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Название основной комплектации (используйте, если есть дополнительные комплектации)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
                <input type="text" class="offers_title" name="offers[main][title]" value="<?php echo $_smarty_tpl->tpl_vars['main_offer']->value['title'];?>
"/><br/>
                <?php  $_smarty_tpl->tpl_vars['warehouse'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['warehouse']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['warehouses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['warehouse']->key => $_smarty_tpl->tpl_vars['warehouse']->value) {
$_smarty_tpl->tpl_vars['warehouse']->_loop = true;
?>
                    <p class="label">"<?php echo $_smarty_tpl->tpl_vars['warehouse']->value['title'];?>
" - остаток</p>
                    <input name="offers[main][stock_num][<?php echo $_smarty_tpl->tpl_vars['warehouse']->value['id'];?>
]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['main_offer']->value['stock_num'][$_smarty_tpl->tpl_vars['warehouse']->value['id']];?>
"/><br/>
                <?php } ?>
                <input name="offers[main][xml_id]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['main_offer']->value['xml_id'];?>
">
                
                <?php echo $_smarty_tpl->tpl_vars['other_fields_form']->value;?>

            </td>
            <td class="td keyval-td col3">
                <?php echo $_smarty_tpl->getSubTemplate ("%system%/admin/keyvaleditor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field_name'=>"offers[main][_propsdata]",'arr'=>$_smarty_tpl->tpl_vars['main_offer']->value['propsdata_arr'],'add_button_text'=>t('Добавить характеристику')), 0);?>
                            
            </td>
        </tr>
        <tr>
            
            <td class="images-row">
               <?php $_smarty_tpl->tpl_vars['images'] = new Smarty_variable($_smarty_tpl->tpl_vars['elem']->value->getImages(), null, 0);?>
                  <div class="offer-images-line">  
                  <?php if (!empty($_smarty_tpl->tpl_vars['images']->value)) {?>                  
                      <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
                         <?php $_smarty_tpl->tpl_vars['is_act'] = new Smarty_variable(is_array($_smarty_tpl->tpl_vars['main_offer']->value['photos_arr'])&&in_array($_smarty_tpl->tpl_vars['image']->value['id'],$_smarty_tpl->tpl_vars['main_offer']->value['photos_arr']), null, 0);?>
                         <a data-id="<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
" data-name="offers[main][photos_arr][]" class="<?php if ($_smarty_tpl->tpl_vars['is_act']->value) {?>act<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->getUrl(30,30,'xy');?>
"/></a>
                         <?php if ($_smarty_tpl->tpl_vars['is_act']->value) {?><input type="hidden" name="offers[main][photos_arr][]" value="<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
"><?php }?>
                      <?php } ?>  
                  <?php }?>                   
                  </div>
            </td>
            
        </tr>
    </tbody>
</table><?php }} ?>
