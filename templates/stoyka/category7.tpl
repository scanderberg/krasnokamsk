{extends file="%THEME%/body.tpl"} {* Указываем родителя данного шаблона *}
{block name="content"} {* Указываем какую часть будем перезаписывать *}

<div class='verxCategory'>
<div align='center'>
<div class='verxCategory2'>
<div style='width: 300px!important;'>
		{* Вставляем блок "хлебные крошки" *}
        {moduleinsert name="\Main\Controller\Block\BreadCrumbs"}
</div>

<div align='center' style="margin-top: -90px!important; margin-left: 230px!important;">
<div class="fixCalc">

<noindex>
<div class="clearCalc">
<a rell="nofollow" href="http://стройбаза-к.рф/calc/metall.html" onclick="newMyWindow1(this.href); return false;">
<img align="center" src="{$router->getRootUrl()}templates/stoyka/resource/img/calc2.png" />
Калькулятор 
металлопроката
</a>

</div>
<div class="clearCalc">
<a rell="nofollow" href="http://стройбаза-к.рф/calc/kirpich.html" onclick="newMyWindow(this.href); return false;">
<img align="center" src="{$router->getRootUrl()}templates/stoyka/resource/img/calc1.png" />Калькулятор 
кирпича
</a>

</div>
<div class="clearCalc">
<a rell="nofollow" href="http://стройбаза-к.рф/calc/gazobeton.html" onclick="newMyWindow(this.href); return false;">
<img align="center" src="{$router->getRootUrl()}templates/stoyka/resource/img/calc3.png" />Калькулятор 
газобетона
</a>

</div>
</noindex>

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