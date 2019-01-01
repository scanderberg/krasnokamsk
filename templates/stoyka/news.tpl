{extends file="%THEME%/body.tpl"} {* Указываем родителя данного шаблона *}
{block name="content"} {* Указываем какую часть будем перезаписывать *}

<div class='verxListing'>
<div align='center'>
<div class='verxListing2'>

		{* Вставляем блок "хлебные крошки" *}
        {moduleinsert name="\Main\Controller\Block\BreadCrumbs"}

</div>
</div>
</div>

<br><br>

<div align='center' class='mainProducts'>
<div align='left' class='fixProducts'>
{* Вставляем блок "меню слева" *}
        {moduleinsert name="\Menu\Controller\Block\Menu" indexTemplate='blocks/menu/left_menu.tpl'}

<div class='pageListing'>
{$app->blocks->getMainContent()} {* Вставляем "Главное содержимое страницы" *}
</div>

</div>
</div>








{/block}