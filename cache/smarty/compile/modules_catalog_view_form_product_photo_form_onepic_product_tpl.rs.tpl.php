<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 13:56:41
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/product/photo/form_onepic_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39705123557bc2be966ae29-31782458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e29a06e44382986a54445dc33a6225c58e422e02' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/form/product/photo/form_onepic_product.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '39705123557bc2be966ae29-31782458',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'photo_list' => 0,
    'photo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bc2be96b0f87_44014516',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc2be96b0f87_44014516')) {function content_57bc2be96b0f87_44014516($_smarty_tpl) {?><?php if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['photo']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['photo_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value) {
$_smarty_tpl->tpl_vars['photo']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['photo']->key;
?>
    <li class="photo-one" data-id="<?php echo $_smarty_tpl->tpl_vars['photo']->value['id'];?>
">
        <div class="chk"><input type="checkbox" name="photos[]" value="<?php echo $_smarty_tpl->tpl_vars['photo']->value['id'];?>
"></div>
        <div class="image" data-small-image="<?php echo $_smarty_tpl->tpl_vars['photo']->value->getUrl(30,30,'xy');?>
">
            <a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['photo']->value['id'];?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_adminUrl(array('mod_controller'=>"photo-blockphotos",'do'=>false,'pdo'=>"delphoto",'photos'=>array($_tmp1)),$_smarty_tpl);?>
" class="delete confirm-delete" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
удалить фото<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['photo']->value->getUrl(800,600,'xy');?>
" rel="lightbox-tour" class="bigview"><img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value->getUrl(148,148,'cxy');?>
"></a>
        </div>
        <div class="title">
            <div class="short" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Нажмите, чтобы редактировать<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['photo']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</div>
            <div class="more">...</div>
            <textarea class="edit_title"><?php echo $_smarty_tpl->tpl_vars['photo']->value['title'];?>
</textarea>
        </div>
        <div class="move">
            <a class="rotate ccw" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Повернуть против часовой стрелки<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" href="<?php echo smarty_function_adminUrl(array('mod_controller'=>"photo-blockphotos",'do'=>false,'pdo'=>"rotate",'photoid'=>$_smarty_tpl->tpl_vars['photo']->value['id'],'direction'=>"ccw"),$_smarty_tpl);?>
"></a>            
            <div class="handle"></div>
            
            <a class="rotate cw" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Повернуть по часовой стрелке<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" href="<?php echo smarty_function_adminUrl(array('mod_controller'=>"photo-blockphotos",'do'=>false,'pdo'=>"rotate",'photoid'=>$_smarty_tpl->tpl_vars['photo']->value['id'],'direction'=>"cw"),$_smarty_tpl);?>
"></a>            
        </div>
        <div class="complekts add-offer-link" data-id="<?php echo $_smarty_tpl->tpl_vars['photo']->value['id'];?>
">Назначить</div>
    </li>
<?php } ?><?php }} ?>
