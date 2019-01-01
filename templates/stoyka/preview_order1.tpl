{extends file="%THEME%/body.tpl"} {* Указываем родителя данного шаблона *}
{block name="content"} {* Указываем какую часть будем перезаписывать *}

Просмотр заказа
<br>
{$app->blocks->getMainContent()} {* Вставляем "Главное содержимое страницы" *}






{/block}