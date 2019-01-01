{extends file="%THEME%/body.tpl"} {* Указываем родителя данного шаблона *}
{block name="content"} {* Указываем какую часть будем перезаписывать *}

<div class='verxProduct'>
<div align='center'>
<div class='verxCrumbs'>

		{* Вставляем блок "хлебные крошки" *}
        {moduleinsert name="\Main\Controller\Block\BreadCrumbs"}

</div>
</div>
</div>

{$app->blocks->getMainContent()} {* Вставляем "Главное содержимое страницы" *}







{/block}