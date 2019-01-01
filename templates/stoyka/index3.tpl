{extends file="%THEME%/body.tpl"} {* Указываем родителя данного шаблона *}
{block name="content"} {* Указываем какую часть будем перезаписывать *}
    {* Выводим 6 товаров из категории "top" *}
    {moduleinsert name="\Catalog\Controller\Block\TopProducts" dirs="top" pageSize="8"}
{/block}