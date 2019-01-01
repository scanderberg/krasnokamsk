{extends file="%THEME%/body.tpl"} {* Указываем родителя данного шаблона *}
{block name="content"} {* Указываем какую часть будем перезаписывать *}

<div class='verxText'>
<div align='center'>
<div class='verxCont'>

		{* Вставляем блок "хлебные крошки" *}
        {moduleinsert name="\Main\Controller\Block\BreadCrumbs"}

<h1>{$title}</h1>
		
</div>
</div>
</div>

<div align='center' class='mainProducts'>
<div align='left' class='fixProducts'>
{$app->blocks->getMainContent()} {* Вставляем "Главное содержимое страницы" *}
</div>
</div>







{/block}