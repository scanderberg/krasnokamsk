{extends file="%THEME%/body.tpl"} {* Указываем родителя данного шаблона *}
{block name="content"} {* Указываем какую часть будем перезаписывать *}

<div align='center' class='mainProducts'>
<div align='center' class='fixProducts'>
<br><br>
<h1>Просмотр заказа</h1>
<br>
{$app->blocks->getMainContent()} {* Вставляем "Главное содержимое страницы" *}

</div>
</div>




{/block}