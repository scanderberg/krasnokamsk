<?php /* Smarty version Smarty-3.1.18, created on 2016-07-23 09:54:37
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/templates/view/gs/containers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:630630228579314adaa1085-58039250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15f386469c43d1c6d8935242a90c9c707f8fa8a6' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/templates/view/gs/containers.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '630630228579314adaa1085-58039250',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currentPage' => 0,
    'grid_system' => 0,
    'containers' => 0,
    'container' => 0,
    'defaultPage' => 0,
    'context' => 0,
    'section_tpl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_579314adb81588_24950383',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579314adb81588_24950383')) {function content_579314adb81588_24950383($_smarty_tpl) {?><?php if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['currentPage']->value['template'])) {?>
    <div class="pageview-text">
        <?php ob_start();?><?php echo smarty_function_adminUrl(array('do'=>"editPage",'id'=>$_smarty_tpl->tpl_vars['currentPage']->value['id']),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('tpl'=>$_smarty_tpl->tpl_vars['currentPage']->value['template'],'link'=>$_tmp1)); $_block_repeat=true; echo smarty_block_t(array('tpl'=>$_smarty_tpl->tpl_vars['currentPage']->value['template'],'link'=>$_tmp1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Для <a href="%link" class="crud-edit uline">текущей страницы</a> задан шаблон `<strong>%tpl</strong>`. Сборка элементов по сетке в этом случае невозможна.
        Все необходимые для данной странице модули должны быть указаны вручную в данном шаблоне.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('tpl'=>$_smarty_tpl->tpl_vars['currentPage']->value['template'],'link'=>$_tmp1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['grid_system']->value=='none') {?>
        <div class="pageview-text">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Тема оформления не использует сетку. Все необходимые для страницы модули должны быть указаны вручную в шаблоне, установленном в <a class="crud-edit uline" href="<?php echo smarty_function_adminUrl(array('do'=>"editPage",'id'=>$_smarty_tpl->tpl_vars['currentPage']->value['id']),$_smarty_tpl);?>
">настройках страницы</a>.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['containers'] = new Smarty_variable($_smarty_tpl->tpl_vars['currentPage']->value->getContainers(), null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['container'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['container']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['containers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['container']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['container']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['container']->key => $_smarty_tpl->tpl_vars['container']->value) {
$_smarty_tpl->tpl_vars['container']->_loop = true;
 $_smarty_tpl->tpl_vars['container']->iteration++;
 $_smarty_tpl->tpl_vars['container']->last = $_smarty_tpl->tpl_vars['container']->iteration === $_smarty_tpl->tpl_vars['container']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["containers"]['last'] = $_smarty_tpl->tpl_vars['container']->last;
?>
        <?php if (!$_smarty_tpl->tpl_vars['container']->value['object']) {?>
        <div class="inherit">
            <?php if (empty($_smarty_tpl->tpl_vars['defaultPage']->value['template'])&&$_smarty_tpl->tpl_vars['container']->value['defaultObject']) {?>
                Контейнер "<?php echo $_smarty_tpl->tpl_vars['container']->value['defaultObject']->getTitle();?>
" используется со страницы по умолчанию. 
                Если Вы хотите придать другой вид этой части страницы, <a class="crud-add make-container" href="<?php echo smarty_function_adminUrl(array('do'=>"addContainer",'page_id'=>$_smarty_tpl->tpl_vars['currentPage']->value['id'],'type'=>$_smarty_tpl->tpl_vars['container']->value['type'],'context'=>$_smarty_tpl->tpl_vars['context']->value),$_smarty_tpl);?>
">создайте новый контейнер</a> или 
                <a data-url="<?php echo smarty_function_adminUrl(array('do'=>"copyContainer",'page_id'=>$_smarty_tpl->tpl_vars['currentPage']->value['id'],'type'=>$_smarty_tpl->tpl_vars['container']->value['type'],'context'=>$_smarty_tpl->tpl_vars['context']->value),$_smarty_tpl);?>
" class="crud-add make-container">скопируйте контейнер</a>, чтобы затем изменить его.
            <?php } else { ?>
                Контейнер будет исключен для данной сраницы.
                Если Вы хотите его использовать, <a class="crud-add make-container" href="<?php echo smarty_function_adminUrl(array('do'=>"addContainer",'page_id'=>$_smarty_tpl->tpl_vars['currentPage']->value['id'],'type'=>$_smarty_tpl->tpl_vars['container']->value['type'],'context'=>$_smarty_tpl->tpl_vars['context']->value),$_smarty_tpl);?>
">создайте контейнер</a>.
            <?php }?>
        </div>
        <?php } else { ?>
        <div class="<?php if ($_smarty_tpl->tpl_vars['grid_system']->value=="bootstrap") {?>container bs_col<?php echo $_smarty_tpl->tpl_vars['container']->value['object']['columns'];?>
<?php } elseif ($_smarty_tpl->tpl_vars['grid_system']->value=="gs960") {?>container_<?php echo $_smarty_tpl->tpl_vars['container']->value['object']['columns'];?>
 col<?php echo $_smarty_tpl->tpl_vars['container']->value['object']['columns'];?>
<?php }?> gs-manager <?php if ($_COOKIE["page-constructor-disabled-".((string)$_smarty_tpl->tpl_vars['container']->value['object']['id'])]) {?>grid-disabled<?php }?>" data-container-id="<?php echo $_smarty_tpl->tpl_vars['container']->value['object']['id'];?>
">
            <div class="commontools">            
                <?php echo $_smarty_tpl->tpl_vars['container']->value['object']->getTitle();?>

                
                <div class="rs-list-button container-tools">
                    <a class="rs-dropdown-handler">&nbsp;</a>
                    <ul class="rs-dropdown">
                        <?php if ($_smarty_tpl->tpl_vars['grid_system']->value=='bootstrap') {?>
                            <li class="first"><a class="iplusrow itool crud-add" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Добавить строку<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" href="<?php echo smarty_function_adminUrl(array('do'=>'addSection','page_id'=>$_smarty_tpl->tpl_vars['currentPage']->value['id'],'parent_id'=>-$_smarty_tpl->tpl_vars['container']->value['object']['type'],'element_type'=>"row"),$_smarty_tpl);?>
"><i></i></a></li>
                        <?php } else { ?>
                            <li class="first"><a class="iplus itool crud-add" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Добавить секцию<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" href="<?php echo smarty_function_adminUrl(array('do'=>'addSection','page_id'=>$_smarty_tpl->tpl_vars['currentPage']->value['id'],'parent_id'=>-$_smarty_tpl->tpl_vars['container']->value['object']['type']),$_smarty_tpl);?>
"><i></i></a></li>
                        <?php }?>
                        <li><a class="isettings itool crud-edit" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Настройки<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" href="<?php echo smarty_function_adminUrl(array('do'=>'editContainer','id'=>$_smarty_tpl->tpl_vars['container']->value['object']['id'],'page_id'=>$_smarty_tpl->tpl_vars['currentPage']->value['id'],'type'=>$_smarty_tpl->tpl_vars['container']->value['object']['type']),$_smarty_tpl);?>
"><i></i></a></li>
                        <?php if ($_smarty_tpl->tpl_vars['currentPage']->value['route_id']!='default'||$_smarty_tpl->getVariable('smarty')->value['foreach']['containers']['last']) {?>
                            <li><a class="iremove itool crud-remove-one" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Удалить контейнер<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" href="<?php echo smarty_function_adminUrl(array('do'=>'removeContainer','id'=>$_smarty_tpl->tpl_vars['container']->value['object']['id']),$_smarty_tpl);?>
"><i></i></a></li>
                        <?php }?>
                    </ul>
                </div>                                            
                
                <div class="drag-handler"></div>
                <div class="grid-switcher<?php if ($_COOKIE["page-constructor-disabled-".((string)$_smarty_tpl->tpl_vars['container']->value['object']['id'])]) {?> off<?php }?>" title="Включить/Выключить сетку"></div>                    
            </div>                                    
            <div class="workarea sort-sections"> <!-- Рабочая область контейнера -->
                    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['section_tpl']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item'=>$_smarty_tpl->tpl_vars['container']->value['object']->getSections()), 0);?>

            </div> <!-- Конец рабочей области контейнера -->
        </div>
        <?php }?>        
        <div class="gs-sep"></div>
        <?php } ?>
        <br>
        <div class="container-tools">
            <a class="crud-add make-container button add" href="<?php echo smarty_function_adminUrl(array('do'=>"addContainer",'page_id'=>$_smarty_tpl->tpl_vars['currentPage']->value['id'],'type'=>$_smarty_tpl->tpl_vars['currentPage']->value->max_container_type+1),$_smarty_tpl);?>
">добавить контейнер</a>
            <?php if (count($_smarty_tpl->tpl_vars['containers']->value)) {?>
            <a class="crud-remove-one button delete" href="<?php echo smarty_function_adminUrl(array('do'=>'removeContainer','id'=>$_smarty_tpl->tpl_vars['container']->value['object']['id']),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Удалить нижний контейнер<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
            <?php }?>
        </div>
        <div class="footerspace"></div>
    <?php }?>
<?php }?><?php }} ?>
