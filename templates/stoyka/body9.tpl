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
(8 34 273) 2-44-00<br>
8-901-268-44-00<br>
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
<img align='bottom' src='{$router->getRootUrl()}templates/stoyka/resource/img/dostavka2.png' width='100px' />
<br><br>
Быстрая доставка в течении двух дней до Вашего дома!		
</div>		

<div align='center' class='lite1'>
<img align='bottom' src='{$router->getRootUrl()}templates/stoyka/resource/img/oplata.png' width='100px' />
<br><br>
Различные способы оплаты товара, включая возможность покупки в кредит!		
</div>	

<div align='center' class='lite1'>
<img align='bottom' src='{$router->getRootUrl()}templates/stoyka/resource/img/skidki.png' width='80px' />
<br><br>
В нашем интернет-магазине действует гибкая система скидок!		
</div>	

<div align='center' class='lite1'>
<img align='bottom' src='{$router->getRootUrl()}templates/stoyka/resource/img/provereno2.png' width='100px' />
<br><br>
Только качественный товар, всё изготовлено по ГОСТу!
</div>	

</div>	
</div>
			
<div align='center' class='niz-middle'>	
<div align='center'>
<div align='center' class='fix-middle'>

<div align='center' class='subscribe'>
<span>Подписаться на рассылку</span>
<br><br>
<form action='{$router->getRootUrl()}email.php' method='POST' class='form-subs' id='form-subs' name='form-subs'>
<input type='text' class='email-subs' id='email-subs' name='email-subs' placeholder='Ваш Email' required />

<input type='button' class='button-subs' id='button-subs' name='button-subs' value='ОТПРАВИТЬ' />
</form>
</div>

{* Вставляем блок "категории товаров" *}
        {moduleinsert name="\Catalog\Controller\Block\BrandList"}

<div align='center' class='method-pay'>
<span>Способы оплаты</span>
<br><br>
<img align='bottom' src='{$router->getRootUrl()}templates/stoyka/resource/img/visa_mastercard1.png' height='30px' /><img align='bottom' src='{$router->getRootUrl()}templates/stoyka/resource/img/alfa.png'  height='30px' />

</div>
			
</div>	
</div>	
</div>		

<div align='center' class='niz-bottom'>	
<div align='center'>
<div align='center' class='fix-bottom'>

<div align='left' class="tel-bottom">
8 (342) 73-73-566<br>
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
</div>	
</div>	

</div>	