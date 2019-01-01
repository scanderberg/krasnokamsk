{extends file="%THEME%/body.tpl"} {* Указываем родителя данного шаблона *}
{block name="content"} {* Указываем какую часть будем перезаписывать *}

<br><br>
<div align='center'>
<h1>Мой профиль</h1>
</div>
<br>
{$app->blocks->getMainContent()} {* Вставляем "Главное содержимое страницы" *}

{/block}