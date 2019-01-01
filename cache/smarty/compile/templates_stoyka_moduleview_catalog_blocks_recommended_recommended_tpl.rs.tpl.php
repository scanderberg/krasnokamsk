<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 18:31:28
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/catalog/blocks/recommended/recommended.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1257567215578901d0b63784-80833472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ac61613fd115dd8f6c78060bbcdc195a2f66640' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/catalog/blocks/recommended/recommended.tpl',
      1 => 1463085539,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '1257567215578901d0b63784-80833472',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'recommended' => 0,
    'recommended_title' => 0,
    'recom' => 0,
    'product' => 0,
    'main_image' => 0,
    'recommend2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_578901d0df76c2_60943320',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578901d0df76c2_60943320')) {function content_578901d0df76c2_60943320($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/plugins/modifier.truncate.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['recommended']->value)) {?>

<?php  $_smarty_tpl->tpl_vars['prerecom'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prerecom']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recommended']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['prerecom']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['recomed']['total'] = $_smarty_tpl->tpl_vars['prerecom']->total;
foreach ($_from as $_smarty_tpl->tpl_vars['prerecom']->key => $_smarty_tpl->tpl_vars['prerecom']->value) {
$_smarty_tpl->tpl_vars['prerecom']->_loop = true;
?>

<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['recomed']['total']<4) {?>
<?php $_smarty_tpl->tpl_vars["recom"] = new Smarty_variable("veavfwe", null, 0);?>
<?php }?>

<?php } ?>

<section class="recommended">
    <h2><span><?php echo (($tmp = @$_smarty_tpl->tpl_vars['recommended_title']->value)===null||$tmp==='' ? "С этим товаром покупают" : $tmp);?>
</span></h2>
	<div align="center">
    <div class="previewList" style="width: 1000px;" <?php if ($_smarty_tpl->tpl_vars['recom']->value) {?>id="preRecom"<?php }?>>
        <div class="gallery">
            <ul>
                <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recommended']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['recommend']['total'] = $_smarty_tpl->tpl_vars['product']->total;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['recommend']['first'] = $_smarty_tpl->tpl_vars['product']->first;
?>
                <?php $_smarty_tpl->tpl_vars['main_image'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getMainImage(), null, 0);?>
				
<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['recommend']['total']<=4) {?>

<?php $_smarty_tpl->tpl_vars["recommend2"] = new Smarty_variable("Bob", null, 0);?>

<?php }?>
				
                <li <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['recommend']['first']) {?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['recommend']['total']==4) {?>id="preRecom1"<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['recommend']['total']==3) {?>id="preRecom2"<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['recommend']['total']==2) {?>id="preRecom3"<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['recommend']['total']==1) {?>id="preRecom4"<?php }?><?php }?> style="width: 200px!important; height: 250px!important; margin-right: 10px!important; margin-left: 10px!important;"><a href="<?php echo $_smarty_tpl->tpl_vars['product']->value->getUrl();?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['main_image']->value->getUrl(200,200,'xy');?>
" alt="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['main_image']->value['title'])===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['product']->value['title']) : $tmp);?>
" /></a>
				
				<div align="left" style="width: 200px!important; vertical-align: bottom!important; text-align: left!important;">		
<a align="left" href="<?php echo $_smarty_tpl->tpl_vars['product']->value->getUrl();?>
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
<?php if (!$_smarty_tpl->tpl_vars['recommend2']->value) {?>
        <a class="control prev" style="top: 135px!important;"></a>
        <a class="control next" style="top: 135px!important;"></a>
<?php }?>
    </div>
	</div>
</section>
<?php }?><?php }} ?>
