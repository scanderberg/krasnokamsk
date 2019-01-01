{extends file="%THEME%/body.tpl"} {* Указываем родителя данного шаблона *}
{block name="content"} {* Указываем какую часть будем перезаписывать *}

<div class='verxBrand'>
<div align='center'>
<div class='verxBrand2'>

{$app->blocks->getMainContent()} {* Вставляем "Главное содержимое страницы" *}

</div>
</div>
</div>

{/block}