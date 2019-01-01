<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 18:31:29
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/catalog/blocks/lastviewed/products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:384889971578901d15c8374-67858815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63b25ba6414bd7841b07f6fb3671995e6f33b3a8' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/catalog/blocks/lastviewed/products.tpl',
      1 => 1463085010,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '384889971578901d15c8374-67858815',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'prelast' => 0,
    'product' => 0,
    'main_image' => 0,
    'lastviewed2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_578901d1b52687_92354626',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578901d1b52687_92354626')) {function content_578901d1b52687_92354626($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/plugins/modifier.truncate.php';
?><?php if (count($_smarty_tpl->tpl_vars['products']->value)) {?>

<?php  $_smarty_tpl->tpl_vars['producted'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['producted']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['producted']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['prelasted']['total'] = $_smarty_tpl->tpl_vars['producted']->total;
foreach ($_from as $_smarty_tpl->tpl_vars['producted']->key => $_smarty_tpl->tpl_vars['producted']->value) {
$_smarty_tpl->tpl_vars['producted']->_loop = true;
?>

<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['prelasted']['total']<4) {?>
<?php $_smarty_tpl->tpl_vars["prelast"] = new Smarty_variable("veavere", null, 0);?>
<?php }?>

<?php } ?>

<section class="recommended" align="center">
    <h2><span><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Просмотренные товары<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></h2>
<div align="center">
    <div class="previewList" style="width: 1000px;" <?php if ($_smarty_tpl->tpl_vars['prelast']->value) {?>id="preViewed"<?php }?>>
        <div class="gallery">
            <ul>
                <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['lastviewed']['total'] = $_smarty_tpl->tpl_vars['product']->total;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['lastviewed']['first'] = $_smarty_tpl->tpl_vars['product']->first;
?>
                <?php $_smarty_tpl->tpl_vars['main_image'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getMainImage(), null, 0);?>
				
<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['lastviewed']['total']<=4) {?>
<?php $_smarty_tpl->tpl_vars["lastviewed2"] = new Smarty_variable("Bob", null, 0);?>
<?php }?>
				
                <li <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['lastviewed']['first']) {?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['lastviewed']['total']==4) {?>id="preViewed1"<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['lastviewed']['total']==3) {?>id="preViewed2"<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['lastviewed']['total']==2) {?>id="preViewed3"<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['lastviewed']['total']==1) {?>id="preViewed4"<?php }?><?php }?> style="width: 200px!important; height: 270px!important; vertical-align: bottom!important;"><a href="<?php echo $_smarty_tpl->tpl_vars['product']->value->getUrl();?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['main_image']->value->getUrl(200,200,'xy');?>
" alt="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['main_image']->value['title'])===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['product']->value['title']) : $tmp);?>
" />
				</a>
<div align="center" style="width: 200px!important; vertical-align: bottom!important; text-align: center!important;">		
<a align="center" href="<?php echo $_smarty_tpl->tpl_vars['product']->value->getUrl();?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
" style="line-height: 18px!important; font-size: 14px!important; display: inline-block!important;">
				<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['title'],30);?>

				<br>
				<span style="color: red!important; font-weight: bold!important;"><?php echo $_smarty_tpl->tpl_vars['product']->value->getCost();?>
 <?php echo $_smarty_tpl->tpl_vars['product']->value->getCurrency();?>
</span>
				</a>
</div>
				</li>
                <?php } ?>
            </ul>
        </div>
		<?php if (!$_smarty_tpl->tpl_vars['lastviewed2']->value) {?>
        <a class="control prev" style="top: 150px!important;"></a>
        <a class="control next" style="top: 150px!important;"></a>
		<?php }?>
    </div>
</div>
</section>

<?php }?><?php }} ?>
