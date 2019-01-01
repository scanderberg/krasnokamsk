<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:56:24
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/article/view/blocks/lastnews/lastnews.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3173778625788dd78cd6881-38536050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0c723e60f507ad1f94f9cfac3b78a9e5c421fca' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/article/view/blocks/lastnews/lastnews.tpl',
      1 => 1463046407,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '3173778625788dd78cd6881-38536050',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'news' => 0,
    'item' => 0,
    'item1' => 0,
    'item2' => 0,
    'this_controller' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dd78da4b82_82359669',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dd78da4b82_82359669')) {function content_5788dd78da4b82_82359669($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_dateformat')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/modifier.dateformat.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_function_adminUrl')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.adminurl.php';
?><?php if ($_smarty_tpl->tpl_vars['category']->value&&$_smarty_tpl->tpl_vars['news']->value) {?>

<div id="carousel" align='center'>
				<ul>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<?php echo $_smarty_tpl->tpl_vars['item']->value->getDebugAttributes();?>

<li title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"><img src="<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['image'])) {?><?php echo $_smarty_tpl->tpl_vars['item']->value['__image']->getUrl(282,282,'xy');?>
<?php } else { ?>templates/stoyka/resource/img/no-photo.png<?php }?>" width="282" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" /><div class='text-date' align='left'><?php echo smarty_modifier_dateformat($_smarty_tpl->tpl_vars['item']->value['dateof'],"%d %v %Y, %H:%M");?>
</div><br><br><br><div class='carouselDescr' align='left'><a class='hoverCarousel' style='black!important; display: inline!important; position: relative!important; top: 0px!important; left: 0px!important;' href="<?php echo $_smarty_tpl->tpl_vars['item']->value->getUrl();?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['item']->value['title'],40);?>
</a><br><span><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['item']->value->getPreview(),80);?>
</span></div></li>
<?php } ?>	
				</ul>
				<div class="clearfix"></div>
				<a id="prev" class="prev" href="#">&lt;</a>
				<a id="next" class="next" href="#">&gt;</a>
				<div id="pager" class="pager"></div>
			</div>
			
<div id="carousel1" align='center'>
				<ul>
<?php  $_smarty_tpl->tpl_vars['item1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item1']->key => $_smarty_tpl->tpl_vars['item1']->value) {
$_smarty_tpl->tpl_vars['item1']->_loop = true;
?>
<?php echo $_smarty_tpl->tpl_vars['item1']->value->getDebugAttributes();?>

<li title="<?php echo $_smarty_tpl->tpl_vars['item1']->value['title'];?>
"><img src="<?php if (!empty($_smarty_tpl->tpl_vars['item1']->value['image'])) {?><?php echo $_smarty_tpl->tpl_vars['item1']->value['__image']->getUrl(282,282,'xy');?>
<?php } else { ?>templates/stoyka/resource/img/no-photo.png<?php }?>" width="282" alt="<?php echo $_smarty_tpl->tpl_vars['item1']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item1']->value['title'];?>
" /><div class='text-date' align='left'><?php echo smarty_modifier_dateformat($_smarty_tpl->tpl_vars['item1']->value['dateof'],"%d %v %Y, %H:%M");?>
</div><br><br><br><div class='carouselDescr' align='left'><a class='hoverCarousel' style='black!important; display: inline!important; position: relative!important; top: 0px!important; left: 0px!important;' href="<?php echo $_smarty_tpl->tpl_vars['item1']->value->getUrl();?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['item1']->value['title'],40);?>
</a><br><span><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['item1']->value->getPreview(),80);?>
</span></div></li>
<?php } ?>	
				</ul>
				<div class="clearfix"></div>
				<a id="prev" class="prev1" href="#">&lt;</a>
				<a id="next" class="next1" href="#">&gt;</a>
				<div id="pager" class="pager1"></div>
			</div>
						
<div id="carousel2" align='center'>
				<ul>
<?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value) {
$_smarty_tpl->tpl_vars['item2']->_loop = true;
?>
<?php echo $_smarty_tpl->tpl_vars['item2']->value->getDebugAttributes();?>

<li title="<?php echo $_smarty_tpl->tpl_vars['item2']->value['title'];?>
"><img src="<?php if (!empty($_smarty_tpl->tpl_vars['item2']->value['image'])) {?><?php echo $_smarty_tpl->tpl_vars['item2']->value['__image']->getUrl(282,282,'xy');?>
<?php } else { ?>templates/stoyka/resource/img/no-photo.png<?php }?>" width="282" alt="<?php echo $_smarty_tpl->tpl_vars['item2']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item2']->value['title'];?>
" /><div class='text-date' align='left'><?php echo smarty_modifier_dateformat($_smarty_tpl->tpl_vars['item2']->value['dateof'],"%d %v %Y, %H:%M");?>
</div><br><br><br><div class='carouselDescr' align='left'><a class='hoverCarousel' style='black!important; display: inline!important; position: relative!important; top: 0px!important; left: 0px!important;' href="<?php echo $_smarty_tpl->tpl_vars['item2']->value->getUrl();?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['item2']->value['title'],40);?>
</a><br><span><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['item2']->value->getPreview(),80);?>
</span></div></li>
<?php } ?>	
				</ul>
				<div class="clearfix"></div>
				<a id="prev" class="prev2" href="#">&lt;</a>
				<a id="next" class="next2" href="#">&gt;</a>
				<div id="pager" class="pager2"></div>
			</div>




<?php } else { ?>
    <?php ob_start();?><?php echo smarty_function_adminUrl(array('do'=>false,'mod_controller'=>"article-ctrl"),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['this_controller']->value->getSettingUrl();?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("theme:default/block_stub.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>"blockLastNews",'do'=>array(array('title'=>t("Добавьте категорию с новостями"),'href'=>$_tmp2),array('title'=>t("Настройте блок"),'href'=>$_tmp3,'class'=>'crud-add'))), 0);?>

<?php }?><?php }} ?>
