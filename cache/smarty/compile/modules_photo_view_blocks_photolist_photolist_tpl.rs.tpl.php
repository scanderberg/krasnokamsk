<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:52:32
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/photo/view/blocks/photolist/photolist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:744924325788dc90bcaff0-59132362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1476933c4216ce149a3dcb783a32922876aa94d9' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/photo/view/blocks/photolist/photolist.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '744924325788dc90bcaff0-59132362',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'photos' => 0,
    'photo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc90c6c918_83629871',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc90c6c918_83629871')) {function content_5788dc90c6c918_83629871($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
?><?php echo smarty_function_addjs(array('file'=>"jcarousel/jquery.jcarousel.min.js"),$_smarty_tpl);?>

<?php if (!empty($_smarty_tpl->tpl_vars['photos']->value)) {?>
<section class="recommended">
    <h2><span>Фото</span></h2>
    <div class="previewList">
        <div class="gallery">
            <ul>
                <?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['photo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['photos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value) {
$_smarty_tpl->tpl_vars['photo']->_loop = true;
?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['photo']->value->getUrl(800,600);?>
" title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['title'];?>
" class="photoitem" rel="photolist"><img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value->getUrl(64,64);?>
"></a></li>
                <?php } ?>
            </ul>
        </div>
        <a class="control prev"></a>
        <a class="control next"></a>
    </div>
</section>

<script type="text/javascript">
    $(function() {
       $('.photoitem').colorbox({
           className: 'titleMargin',
           opacity:0.2
       });
    });
</script>
<?php }?><?php }} ?>
