<div class='all-shop'>
{* Вставляем модальное окно "перезвоните мне" *}
{moduleinsert name="\Feedback\Controller\Block\Feedback" form_id='2' hvalues=[] values=[]}

<div class='verx'>

<header class='top-nav'>
    <ul>
{* Вставляем блок "меню - компания" *}
        {moduleinsert name="\Menu\Controller\Block\Menu" root='15'}
{* Вставляем блок "меню - интернет-магазин" *}
        {moduleinsert name="\Menu\Controller\Block\Menu" root='16'}
		
		    </ul>
</header>

		
{* Вставляем блок "авторизации/личного кабинета" *}
        {moduleinsert name="\Users\Controller\Block\AuthBlock"}	
	
<div align='center' class='line2'>

<div align='center' class='line2-left'>
{* Вставляем блок "лого" *}
        {moduleinsert name="\Main\Controller\Block\Logo"}	
		
		{* Вставляем блок "поиск" *}
        {moduleinsert name="\Catalog\Controller\Block\SearchLine"}
</div>	

<div align='center' class='line2-right'>	
<div class="tel-top">
<a href="tel:+73427373566"> +7 (34273) 7-35-66 </ a> <br>
<a href="tel:+79024750855"> +7 902 47 50 855 </ a> <br>
<span>Перезвоните мне</span>

</div>	

		{* Вставляем блок "корзина" *}
        {moduleinsert name="\Shop\Controller\Block\Cart"}
</div>
		
		</div>	

<div align='left' class='line3'>	
		
<div align='left' class='catalog-dropdown'>Каталог

{* Вставляем блок "категории товаров" *}
        {moduleinsert name="\Catalog\Controller\Block\Category"}

</div>
		
		
</div>
	
</div>
<div align='left' class='offsetTop'></div>
<br>
           {* Позволяем наследникам этого шаблона определять данную область *}
            {block name="content"}{/block}
			
			
<div align='center' class='niz-lite'>	
<div align='center' class='fix-lite'>

<span class='capt-lite'>Преимущества</span>
<br><br>

<div align='center' class='lite1'>
<img align='bottom' src='{$router->getRootUrl()}templates/stoyka/resource/img/dostavka2.png' width='96px' />
<br><br>
Быстрая доставка уже на следующий день до Вашего дома!		
</div>		

<div align='center' class='lite1'>
<img align='bottom' src='{$router->getRootUrl()}templates/stoyka/resource/img/oplata.png' width='100px' />
<br><br>
Различные способы оплаты товара, включая возможность покупки онлайн!		
</div>	

<div align='center' class='lite1'>
<img align='bottom' src='{$router->getRootUrl()}templates/stoyka/resource/img/lock.png' width='80px' />
<br><br>
Личный кабинет для удобства покупок и отслеживания информации по заказам.		
</div>	

<div align='center' class='lite1'>
<img align='bottom' src='{$router->getRootUrl()}templates/stoyka/resource/img/provereno2.png' width='92px' />
<br><br>
Только качественный товар, всё изготовлено по ГОСТу!
</div>	

</div>	
</div>
			
<div align='center' class='niz-middle'>	
<div align='center'>
<div align='center' class='fix-middle'>

{* Вставляем блок "категории товаров" *}
        {moduleinsert name="\Catalog\Controller\Block\BrandList"}

<div align='center' class='method-pay'>
<span>Способы оплаты</span>
<br><br>
<img align='bottom' src='{$router->getRootUrl()}templates/stoyka/resource/img/visa_mastercard1.png' height='30px' /><img align='bottom' src='{$router->getRootUrl()}templates/stoyka/resource/img/yamoney_button.gif'  height='30px' />
<img align='bottom' src='{$router->getRootUrl()}templates/stoyka/resource/img/qiwi.png'  height='30px' />
<img align='bottom' src='{$router->getRootUrl()}templates/stoyka/resource/img/alfa.png'  height='30px' />
<img align='bottom' src='{$router->getRootUrl()}templates/stoyka/resource/img/RussianStandardBankR.gif'  height='30px' />

</div>
			
</div>	
</div>	
</div>		

<div align='center' class='niz-bottom'>	
<div align='center'>
<div align='center' class='fix-bottom'>

<div align='left' class="tel-bottom">
<a href="tel:+73427373566"> +7 (34273) 7-35-66 </ a> <br>
<a href="tel:+79024750855"> +7 902 47 50 855 </ a> <br>
<span>Перезвоните мне</span>

</div>	

<div align='left' class="catalog-bottom">
<a href='{$router->getRootUrl()}catalog/'>Каталог товаров</a>
</div>

<div align='left' class="menu-bottom">
Компания

{* Вставляем блок "нижнее меню" *}
{moduleinsert name="\Menu\Controller\Block\Menu" indexTemplate='blocks/menu/foot_menu.tpl' root='15'}


</div>	

<div align='left' class="menu-bottom">
Интернет-магазин

{* Вставляем блок "нижнее меню" *}
{moduleinsert name="\Menu\Controller\Block\Menu" indexTemplate='blocks/menu/foot_menu.tpl' root='16'}


</div>

<div align='left' class="menu-bottom">
Информация

{* Вставляем блок "нижнее меню" *}
{moduleinsert name="\Menu\Controller\Block\Menu" indexTemplate='blocks/menu/foot_menu.tpl' root='17'}


</div>


</div>	
</div>	
</div>	

<div align='center' class='copyright-bottom'>	
<div align='center'>

<a href="{$router->getRootUrl()}">© 2016 СТРОЙБАЗА-К. Все права защищены.</a>
<br><br>
<!--LiveInternet logo--><a href="//www.liveinternet.ru/click" target="_blank"><img src="//counter.yadro.ru/logo?44.11" border="0" width="31" height="31" alt="" title="LiveInternet"/></a><!--/LiveInternet-->
</div>	
</div>	

</div>	