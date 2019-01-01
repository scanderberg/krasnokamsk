{extends file="%THEME%/body.tpl"} {* Указываем родителя данного шаблона *}
{block name="content"} {* Указываем какую часть будем перезаписывать *}

<div class='verxCategory'>
<div align='center'>
<div class='verxCategory2'>

		{* Вставляем блок "хлебные крошки" *}
        {moduleinsert name="\Main\Controller\Block\BreadCrumbs"}
<br>
<h1>{$category.name}</h1>

</div>
</div>
</div>

<br>
<br>
<div align='center' class='mainProducts'>
<div align='center' class='fixProducts'>
		{* Вставляем блок "категории слева" *}
        {moduleinsert name="\Catalog\Controller\Block\Category" indexTemplate='blocks/category/category_left.tpl'}

{$app->blocks->getMainContent()} {* Вставляем "Главное содержимое страницы" *}
</div>
</div>





{/block}