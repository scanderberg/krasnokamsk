<?php /* Smarty version Smarty-3.1.18, created on 2016-08-23 13:56:40
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/adminblocks/offerblock/offerblock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137840538257bc2be8b300a8-84143574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5badadd265437f10caaf26e6d9bdc405b804b2e' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/adminblocks/offerblock/offerblock.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '137840538257bc2be8b300a8-84143574',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elem' => 0,
    'router' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57bc2be8b78244_73313894',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bc2be8b78244_73313894')) {function content_57bc2be8b78244_73313894($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
if (!is_callable('smarty_function_addcss')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addcss.php';
if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><?php echo smarty_function_addjs(array('file'=>"jquery.tablednd.js",'basepath'=>"common"),$_smarty_tpl);?>

<?php echo smarty_function_addcss(array('file'=>"%catalog%/offer.css?v=6",'basepath'=>"root"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"%catalog%/offer.js?v=4",'basepath'=>"root"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"tmpl.min.js",'basepath'=>"common"),$_smarty_tpl);?>


<div id="offers" data-urls='{ "offerEdit": "<?php echo $_smarty_tpl->tpl_vars['router']->value->getAdminUrl(false,array('odo'=>'offerEdit','product_id'=>$_smarty_tpl->tpl_vars['elem']->value['id']),'catalog-block-offerblock');?>
",
                              "offerDelete": "<?php echo $_smarty_tpl->tpl_vars['router']->value->getAdminUrl(false,array('odo'=>'offerdelete','product_id'=>$_smarty_tpl->tpl_vars['elem']->value['id']),'catalog-block-offerblock');?>
",
                              "offerMultiEdit": "<?php echo $_smarty_tpl->tpl_vars['router']->value->getAdminUrl(false,array('odo'=>'offermultiedit','product_id'=>$_smarty_tpl->tpl_vars['elem']->value['id']),'catalog-block-offerblock');?>
",
                              "offerMakeFromMultioffer": "<?php echo $_smarty_tpl->tpl_vars['router']->value->getAdminUrl(false,array('odo'=>'OfferMakeFromMultioffers','product_id'=>$_smarty_tpl->tpl_vars['elem']->value['id']),'catalog-block-offerblock');?>
",
                              "offerLinkPhoto": "<?php echo $_smarty_tpl->tpl_vars['router']->value->getAdminUrl(false,array('odo'=>'OfferLinkPhoto','product_id'=>$_smarty_tpl->tpl_vars['elem']->value['id']),'catalog-block-offerblock');?>
",
                              "offerLinkPhotoSave": "<?php echo $_smarty_tpl->tpl_vars['router']->value->getAdminUrl(false,array('odo'=>'OfferLinkPhotoSave','product_id'=>$_smarty_tpl->tpl_vars['elem']->value['id']),'catalog-block-offerblock');?>
" }'>
    <?php echo $_smarty_tpl->getSubTemplate ("%catalog%/adminblocks/offerblock/multioffers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
    <div class="offer-block">
        <table class="otable">
           <tbody>
               <tr>
                    <td class="title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Подпись к комплектациям<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</td>
                    <td><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['elem']->value['__offer_caption']->getRenderTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>$_smarty_tpl->tpl_vars['elem']->value['__offer_caption']), 0);?>
</td>
               </tr>
           </tbody>
        </table>
        
        <div id="all-offers">
            <?php echo $_smarty_tpl->getSubTemplate ("%catalog%/adminblocks/offerblock/offer_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
        
        </div>
    </div>
</div>

<script type=" text/javascript">
    $.allReady(function() {
        $('#offers').offer();
    });
</script><?php }} ?>
