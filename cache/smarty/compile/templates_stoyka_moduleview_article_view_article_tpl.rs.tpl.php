<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:52:32
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/article/view_article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5938141485788dc9095a179-53718551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0da71550b3c72c1bfe54291a87f42b36832358d7' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/article/view_article.tpl',
      1 => 1459953291,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '5938141485788dc9095a179-53718551',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc90a069b9_52366328',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc90a069b9_52366328')) {function content_5788dc90a069b9_52366328($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_moduleinsert')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.moduleinsert.php';
?><section class="article">
    <div class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['dateof'],"d.m.Y H:i");?>
</div>
    <h3><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h3>
    <article>
        <?php if (!empty($_smarty_tpl->tpl_vars['article']->value['image'])) {?>
        <img class="mainImage" src="<?php echo $_smarty_tpl->tpl_vars['article']->value['__image']->getUrl(700,304,'xy');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
"/>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>

    </article>
    <?php echo smarty_function_moduleinsert(array('name'=>"\Photo\Controller\Block\PhotoList",'type'=>"article",'route_id_param'=>"article_id"),$_smarty_tpl,'/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/article/view_article.tpl');?>

</section><?php }} ?>
