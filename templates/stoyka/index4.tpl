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

<div class='index-popular' align='center'>

<div class='index-news' align='center'>НОВИНКИ
<div class='index-news2' align='center'>
</div>
</div>

<div class='index-moll' align='center'>ДЁШЕВО
<div class='index-moll-tik' align='center'>
</div>
</div>

<div class='index-hits' align='center'>ХИТЫ ПРОДАЖ
<div class='index-hits-tik' align='center'>
</div>
</div>


</div>

    {* Выводим 6 товаров из категории "top" *}
    {moduleinsert name="\Catalog\Controller\Block\TopProducts" indexTemplate='blocks/topproducts/top_products.tpl' pageSize=8 dirs='2' order='id'}
{/block}