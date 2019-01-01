<div class='all-shop'>
{* Вставляем блок "перезвоните мне" *}
{moduleinsert name="\Feedback\Controller\Block\Feedback" form_id='2' hvalues=[] values=[]}

<div class='verx'>

{* Вставляем блок "меню" *}
        {moduleinsert name="\Menu\Controller\Block\Menu"}

		
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
8 (342) 73-73-566<br>
<span>Перезвоните мне</span>

</div>	

		{* Вставляем блок "корзина" *}
        {moduleinsert name="\Shop\Controller\Block\Cart"}
</div>
		
		</div>	

</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
           {* Позволяем наследникам этого шаблона определять данную область *}
            {block name="content"}{/block}
            <br>
            низ
</div>	