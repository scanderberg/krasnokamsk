<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 13:56:40
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/adminblocks/offerblock/multioffers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173193465057bc2be8b7de99-73163789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba7c146f92463428ff3f1a1e97d776856a78cac2' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/adminblocks/offerblock/multioffers.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '173193465057bc2be8b7de99-73163789',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'all_props' => 0,
    'multioffer_help_url' => 0,
    'elem' => 0,
    'm' => 0,
    'level' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bc2be91b0c07_18912420',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc2be91b0c07_18912420')) {function content_57bc2be91b0c07_18912420($_smarty_tpl) {?><?php if (!is_callable('smarty_function_static_call')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.static_call.php';
if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
if (!is_callable('smarty_function_html_options')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/plugins/function.html_options.php';
?><?php echo smarty_function_static_call(array('var'=>'all_props','callback'=>array('\Catalog\Model\PropertyApi','staticSelectListByType'),'params'=>array('list')),$_smarty_tpl);?>

<?php $_smarty_tpl->tpl_vars['multioffer_help_url'] = new Smarty_variable('http://readyscript.ru/manual/catalog_products.html#catalog_multioffers', null, 0);?>

<?php if (!empty($_smarty_tpl->tpl_vars['all_props']->value)) {?>
    <div id="multioffer-wrap">
        <div class="multioffer-warning">
            &quot;Многомерные комплектации&quot; недоступны, т.к. у товара не добавлены или не отмеченны списковые характеристики. <a href="<?php echo $_smarty_tpl->tpl_vars['multioffer_help_url']->value;?>
" target="_blank" class="how-to">Подробнее...</a>
        </div>
        <div id="multi-check-wrap">
            <input type="checkbox" id="use-multioffer" name="multioffers[use]" value="1" <?php if ($_smarty_tpl->tpl_vars['elem']->value->isMultiOffersUse()) {?>checked<?php }?>> 
            <label for="use-multioffer"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Использовать многомерные комплектации<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
. <span><a href="<?php echo $_smarty_tpl->tpl_vars['multioffer_help_url']->value;?>
" target="_blank" class="how-to">Как использовать?</a></span></label>
        </div>


        <div class="multioffer-wrap">
            <div class="item">
                <div class="no_photo_row">
                    <label><input type="radio" name="multioffers[is_photo]" value="0" checked="checked"/> <span>без фото</span></label>
                </div>
                <table>
                    <tbody class="offers-body">
                        <?php if ($_smarty_tpl->tpl_vars['elem']->value->isMultiOffersUse()) {?>
                            <?php $_smarty_tpl->tpl_vars['m'] = new Smarty_variable(0, null, 0);?>
                            <?php  $_smarty_tpl->tpl_vars['level'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['level']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['elem']->value['multioffers']['levels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['level']->key => $_smarty_tpl->tpl_vars['level']->value) {
$_smarty_tpl->tpl_vars['level']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['level']->key;
?>
                                <tr class="row">
                                    <td class="is_photo">
                                        <label><input type="radio" name="multioffers[is_photo]" value="<?php echo $_smarty_tpl->tpl_vars['m']->value+1;?>
" <?php if ($_smarty_tpl->tpl_vars['level']->value['is_photo']) {?>checked="checked"<?php }?>/> <span>фото</span></label>
                                    </td>
                                    <td class="key">
                                       <div class="title">
                                          <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Название параметра комплектации<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:
                                       </div> 
                                       <input type="text" name="multioffers[levels][<?php echo $_smarty_tpl->tpl_vars['m']->value;?>
][title]" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['level']->value['title'];?>
"/> 
                                    </td>
                                    <td class="value">
                                       <div class="title">
                                          <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Списковые характеристики<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:
                                       </div>  
                                        <?php echo smarty_function_html_options(array('name'=>"multioffers[levels][".((string)$_smarty_tpl->tpl_vars['m']->value)."][prop]",'options'=>$_smarty_tpl->tpl_vars['all_props']->value,'selected'=>$_smarty_tpl->tpl_vars['level']->value['prop_id']),$_smarty_tpl);?>

                                    </td>
                                    <td class="delete-level-td">
                                        <a href="#" class="delete-level">удалить</a>
                                    </td>
                                </tr>
                                <?php $_smarty_tpl->tpl_vars['m'] = new Smarty_variable($_smarty_tpl->tpl_vars['m']->value+1, null, 0);?>
                            <?php } ?>
                        <?php }?>
                    </tbody>
                </table>
            </div>
            <div class="add-wrap">
                <div class="keyval-container" data-id=".multioffer-wrap .row">
                    <a class="add-level" href="javascript:;">добавить параметр</a>
                </div>
                <div>
                   <input type="checkbox" id="create-auto-offers" name="offers[create_autooffers]" value="1" > 
                   <label for="create-auto-offers"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Создавать комплектации<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <a class="help-icon"
                    title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Установите данный флаг, если есть необходимость изменения цены<br/> или количества товара для разных комплектаций<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">?</a></label> 
                </div>
                <div class="bottom-bar">
                    <input class="mbutton create-complexs" type="button" name="" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
cоздать<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"/>
                </div>
            </div>
        </div>

        
        <script type="text/x-tmpl" id="multioffer-line">
            <tr class="row">
                <td class="is_photo">
                    <label><input type="radio" name="multioffers[is_photo]" value="0"/> <span>фото</span></label>
                </td>
                <td class="key">
                   <div class="title">
                   
                      <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Название параметра комплектации<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:
                   
                   </div> 
                   <input type="text" name="multioffers[levels][0][title]" maxlength="255"/> 
                </td>
                <td class="value">
                   <div class="title">
                        
                      <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Списковые характеристики<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:
                      
                   </div>  
                   
                  
                    <?php echo smarty_function_html_options(array('name'=>"multioffers[levels][0][prop]",'options'=>$_smarty_tpl->tpl_vars['all_props']->value,'data-prop-id'=>"0"),$_smarty_tpl);?>

                   
                   
                </td>
                <td class="delete-level-td">
                    <a href="#" class="delete-level">удалить</a>
                </td>
            </tr>
        </script>
        
    </div>
<?php }?><?php }} ?>
