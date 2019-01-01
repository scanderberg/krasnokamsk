{foreach from=$menu_level item=item}

<a href="{$item.fields->getHref()}" style="display: block!important;" {if $item.fields.target_blank}target="_blank"{/if}>
<div style="line-height: 24px!important;">

{if $item.fields.typelink!='separator'}{$item.fields.title}{else}&nbsp;{/if}

</div>
</a>

{/foreach}