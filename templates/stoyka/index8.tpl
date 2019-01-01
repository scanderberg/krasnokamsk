{extends file="%THEME%/body.tpl"} {* Указываем родителя данного шаблона *}
{block name="content"} {* Указываем какую часть будем перезаписывать *}

<div class='index-slider' align='center'>
{* сдайдер *}
{moduleinsert name="\Banners\Controller\Block\Slider" indexTemplate='blocks/slider/slider.tpl' zone=4}
</div>
<div align='center'>
<div class='index-photo' align='center'>
<div align='center'>
{* сдайдер *}
{moduleinsert name="\Banners\Controller\Block\Slider" indexTemplate='blocks/slider/pod-slider.tpl' zone=5}
</div>
</div>
</div>

<br>

<div align='center'>
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

<div align='center' class='cat-bottom'>
<div align='center'>
<span class='cat-bottom'>Каталог</span>
<br><br>

{* Вставляем блок "категории товаров с картинками" *}
        {moduleinsert name="\Catalog\Controller\Block\Category" indexTemplate='blocks/category/category_middle.tpl'}


</div>
</div>

<br>

<div align='center' class='slider-news'>
<div align='center'>
<span class='slider-news'>Новости</span>
<br><br>

{* статьи в карусели *}
{moduleinsert name="\Article\Controller\Block\LastNews" indexTemplate='blocks/lastnews/lastnews.tpl' category='1'}

<br />
</div>
</div>
	
	
	
	
	
	
	
{/block}

























