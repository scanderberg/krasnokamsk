<?php /* Smarty version Smarty-3.1.18, created on 2017-05-12 13:38:53
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:769978757591590bd751ec3-92434789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9e44a0426edb452be0289cc7f1eed59fd3355fb' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/profile.tpl',
      1 => 1463088280,
      2 => 'rs',
    ),
    'aacd121bd1646de7f4c0e741d78a63ed64853c22' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/body.tpl',
      1 => 1489747737,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '769978757591590bd751ec3-92434789',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'router' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_591590bdb28ae6_46387100',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591590bdb28ae6_46387100')) {function content_591590bdb28ae6_46387100($_smarty_tpl) {?><?php if (!is_callable('smarty_function_moduleinsert')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.moduleinsert.php';
?><div class='all-shop'>

<?php echo smarty_function_moduleinsert(array('name'=>"\Feedback\Controller\Block\Feedback",'form_id'=>'2','hvalues'=>array(),'values'=>array()),$_smarty_tpl,'/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/body.tpl');?>


<div class='verx'>

<header class='top-nav'>
    <ul>

        <?php echo smarty_function_moduleinsert(array('name'=>"\Menu\Controller\Block\Menu",'root'=>'15'),$_smarty_tpl,'/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/body.tpl');?>


        <?php echo smarty_function_moduleinsert(array('name'=>"\Menu\Controller\Block\Menu",'root'=>'16'),$_smarty_tpl,'/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/body.tpl');?>

		
		    </ul>
</header>

		

        <?php echo smarty_function_moduleinsert(array('name'=>"\Users\Controller\Block\AuthBlock"),$_smarty_tpl,'/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/body.tpl');?>
	
	
<div align='center' class='line2'>

<div align='center' class='line2-left'>

        <?php echo smarty_function_moduleinsert(array('name'=>"\Main\Controller\Block\Logo"),$_smarty_tpl,'/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/body.tpl');?>
	
		
		
        <?php echo smarty_function_moduleinsert(array('name'=>"\Catalog\Controller\Block\SearchLine"),$_smarty_tpl,'/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/body.tpl');?>

</div>	

<div align='center' class='line2-right'>	
<div class="tel-top">
+7 (34273) 7-35-66<br>
+7 902 47 50 855<br>
<span>Перезвоните мне</span>

</div>	

		
        <?php echo smarty_function_moduleinsert(array('name'=>"\Shop\Controller\Block\Cart"),$_smarty_tpl,'/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/body.tpl');?>

</div>
		
		</div>	

<div align='left' class='line3'>	
		
<div align='left' class='catalog-dropdown'>Каталог


        <?php echo smarty_function_moduleinsert(array('name'=>"\Catalog\Controller\Block\Category"),$_smarty_tpl,'/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/body.tpl');?>


</div>
		
		
</div>
	
</div>
<div align='left' class='offsetTop'></div>
<br>
           
             

<br><br>
<div align='center'>
<h1>Мой профиль</h1>
</div>
<br>
<?php echo $_smarty_tpl->tpl_vars['app']->value->blocks->getMainContent();?>
 


			
			
<div align='center' class='niz-lite'>	
<div align='center' class='fix-lite'>

<span class='capt-lite'>Преимущества</span>
<br><br>

<div align='center' class='lite1'>
<img align='bottom' src='<?php echo $_smarty_tpl->tpl_vars['router']->value->getRootUrl();?>
templates/stoyka/resource/img/dostavka2.png' width='96px' />
<br><br>
Быстрая доставка уже на следующий день до Вашего дома!		
</div>		

<div align='center' class='lite1'>
<img align='bottom' src='<?php echo $_smarty_tpl->tpl_vars['router']->value->getRootUrl();?>
templates/stoyka/resource/img/oplata.png' width='100px' />
<br><br>
Различные способы оплаты товара, включая возможность покупки онлайн!		
</div>	

<div align='center' class='lite1'>
<img align='bottom' src='<?php echo $_smarty_tpl->tpl_vars['router']->value->getRootUrl();?>
templates/stoyka/resource/img/lock.png' width='80px' />
<br><br>
Личный кабинет для удобства покупок и отслеживания информации по заказам.		
</div>	

<div align='center' class='lite1'>
<img align='bottom' src='<?php echo $_smarty_tpl->tpl_vars['router']->value->getRootUrl();?>
templates/stoyka/resource/img/provereno2.png' width='92px' />
<br><br>
Только качественный товар, всё изготовлено по ГОСТу!
</div>	

</div>	
</div>
			
<div align='center' class='niz-middle'>	
<div align='center'>
<div align='center' class='fix-middle'>


        <?php echo smarty_function_moduleinsert(array('name'=>"\Catalog\Controller\Block\BrandList"),$_smarty_tpl,'/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/body.tpl');?>


<div align='center' class='method-pay'>
<span>Способы оплаты</span>
<br><br>
<img align='bottom' src='<?php echo $_smarty_tpl->tpl_vars['router']->value->getRootUrl();?>
templates/stoyka/resource/img/visa_mastercard1.png' height='30px' /><a href='http://money.yandex.ru/' target='_blank'><img align='bottom' src='<?php echo $_smarty_tpl->tpl_vars['router']->value->getRootUrl();?>
templates/stoyka/resource/img/yamoney_button.gif'  height='30px' /></a>
<img align='bottom' src='<?php echo $_smarty_tpl->tpl_vars['router']->value->getRootUrl();?>
templates/stoyka/resource/img/qiwi.png'  height='30px' />
<img align='bottom' class='alfaBank' src='<?php echo $_smarty_tpl->tpl_vars['router']->value->getRootUrl();?>
templates/stoyka/resource/img/alfa.png'  height='30px' />
<img align='bottom' class='russianStandard' src='<?php echo $_smarty_tpl->tpl_vars['router']->value->getRootUrl();?>
templates/stoyka/resource/img/RussianStandardBankR.gif'  height='30px' />

</div>
			
</div>	
</div>	
</div>		

<div align='center' class='niz-bottom'>	
<div align='center'>
<div align='center' class='fix-bottom'>

<div align='left' class="tel-bottom">
(8 34 273) 2-44-00<br>
8-901-268-44-00<br>
<span>Перезвоните мне</span>

</div>	

<div align='left' class="catalog-bottom">
<a href='<?php echo $_smarty_tpl->tpl_vars['router']->value->getRootUrl();?>
catalog/'>Каталог товаров</a>
</div>

<div align='left' class="menu-bottom">
Компания


<?php echo smarty_function_moduleinsert(array('name'=>"\Menu\Controller\Block\Menu",'indexTemplate'=>'blocks/menu/foot_menu.tpl','root'=>'15'),$_smarty_tpl,'/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/body.tpl');?>



</div>	

<div align='left' class="menu-bottom">
Интернет-магазин


<?php echo smarty_function_moduleinsert(array('name'=>"\Menu\Controller\Block\Menu",'indexTemplate'=>'blocks/menu/foot_menu.tpl','root'=>'16'),$_smarty_tpl,'/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/body.tpl');?>



</div>

<div align='left' class="menu-bottom">
Информация


<?php echo smarty_function_moduleinsert(array('name'=>"\Menu\Controller\Block\Menu",'indexTemplate'=>'blocks/menu/foot_menu.tpl','root'=>'17'),$_smarty_tpl,'/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/body.tpl');?>



</div>


</div>	
</div>	
</div>	

<div align='center' class='copyright-bottom'>	
<div align='center'>

<a href="<?php echo $_smarty_tpl->tpl_vars['router']->value->getRootUrl();?>
">© 2016 СТРОЙБАЗА-К. Все права защищены.</a>
<br><br>
<!--LiveInternet logo--><a href="//www.liveinternet.ru/click" target="_blank"><img src="//counter.yadro.ru/logo?44.11" border="0" width="31" height="31" alt="" title="LiveInternet"/></a><!--/LiveInternet-->
</div>	
</div>	

</div>	<?php }} ?>
