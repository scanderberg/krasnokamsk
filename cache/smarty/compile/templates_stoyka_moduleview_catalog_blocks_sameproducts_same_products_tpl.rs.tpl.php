<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 18:31:28
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/catalog/blocks/sameproducts/same_products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1061599973578901d0cd9928-30617271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb06ba60b26a1c2d69603b6e3356abef25b5f043' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/catalog/blocks/sameproducts/same_products.tpl',
      1 => 1463084344,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '1061599973578901d0cd9928-30617271',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sameproducts' => 0,
    'presame' => 0,
    'product' => 0,
    'main_image' => 0,
    'lastviewed4' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_578901d0e04613_08692161',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578901d0e04613_08692161')) {function content_578901d0e04613_08692161($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/plugins/modifier.truncate.php';
?><?php if ($_smarty_tpl->tpl_vars['sameproducts']->value) {?>

<?php  $_smarty_tpl->tpl_vars['preproduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['preproduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sameproducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['preproduct']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['presamed']['total'] = $_smarty_tpl->tpl_vars['preproduct']->total;
foreach ($_from as $_smarty_tpl->tpl_vars['preproduct']->key => $_smarty_tpl->tpl_vars['preproduct']->value) {
$_smarty_tpl->tpl_vars['preproduct']->_loop = true;
?>

<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['presamed']['total']<4) {?>
<?php $_smarty_tpl->tpl_vars["presame"] = new Smarty_variable("veavbwe", null, 0);?>
<?php }?>

<?php } ?>

<section class="recommended" align="center">
    <h2><span>Похожие товары</span></h2>
<div align="center">
    <div class="previewList" style="width: 1000px;" <?php if ($_smarty_tpl->tpl_vars['presame']->value) {?>id="preSame"<?php }?>>
        <div class="gallery">
            <ul>
                <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sameproducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['lastviewed3']['total'] = $_smarty_tpl->tpl_vars['product']->total;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['lastviewed3']['first'] = $_smarty_tpl->tpl_vars['product']->first;
?>
                <?php $_smarty_tpl->tpl_vars['main_image'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getMainImage(), null, 0);?>
				
<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['lastviewed3']['total']<=4) {?>
<?php $_smarty_tpl->tpl_vars["lastviewed4"] = new Smarty_variable("Bob", null, 0);?>
<?php }?>
				
                <li <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['lastviewed3']['first']) {?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['lastviewed3']['total']==4) {?>id="preSame1"<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['lastviewed3']['total']==3) {?>id="preSame2"<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['lastviewed3']['total']==2) {?>id="preSame3"<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['lastviewed3']['total']==1) {?>id="preSame4"<?php }?><?php }?> style=" width: 200px!important; height: 270px!important; vertical-align: bottom!important;"><a href="<?php echo $_smarty_tpl->tpl_vars['product']->value->getUrl();?>
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
		<?php if (!$_smarty_tpl->tpl_vars['lastviewed4']->value) {?>
        <a class="control prev" style="top: 150px!important;"></a>
        <a class="control next" style="top: 150px!important;"></a>
		<?php }?>
    </div>
</div>
</section>
<?php }?><?php }} ?>
