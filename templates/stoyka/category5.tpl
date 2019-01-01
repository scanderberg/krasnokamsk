{extends file="%THEME%/body.tpl"} {* Указываем родителя данного шаблона *}
{block name="content"} {* Указываем какую часть будем перезаписывать *}

<div class='verxCategory'>
<div align='center'>
<div class='verxCategory2'>

		{* Вставляем блок "хлебные крошки" *}
        {moduleinsert name="\Main\Controller\Block\BreadCrumbs"}
<br>
<h1>{$category.name}</h1>

<div align='center' style="margin-top: -110px!important; margin-left: 230px!important;">
<div class="fixCalc">

<div class="clearCalc">
<img align="center" src="{$router->getRootUrl()}templates/stoyka/resource/img/calc.png" /><a href="#" target="_blank">Калькулятор 1</a>
</div>
<div class="clearCalc">
<img align="center" src="{$router->getRootUrl()}templates/stoyka/resource/img/calc.png" /><a href="#" target="_blank">Калькулятор 2</a>
</div>
<div class="clearCalc">
<img align="center" src="{$router->getRootUrl()}templates/stoyka/resource/img/calc.png" /><a href="#" target="_blank">Калькулятор 3</a>
</div>

</div>
</div>


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