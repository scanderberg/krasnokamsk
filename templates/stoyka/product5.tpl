{extends file="%THEME%/body.tpl"} {* Указываем родителя данного шаблона *}
{block name="content"} {* Указываем какую часть будем перезаписывать *}

<div class='verxProduct'>
<div align='center'>
<div class='verxCrumbs'>
<br>
		{* Вставляем блок "хлебные крошки" *}
        {moduleinsert name="\Main\Controller\Block\BreadCrumbs"}

<div align='center' style="margin-top: -85px!important; margin-left: 230px!important;">
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

{$app->blocks->getMainContent()} {* Вставляем "Главное содержимое страницы" *}







{/block}