{foreach from=$menu_level item=item}

<a href="{$item.fields->getHref()}" {if $item.fields.target_blank}target="_blank"{/if}>
<li>

        {if $item.fields.typelink!='separator'}{$item.fields.title}{else}&nbsp;{/if}

    {if !empty($item.child)}
    <ul>
        {include file="blocks/menu/branch.tpl" menu_level=$item.child}
    </ul>
    {/if}
</li>
</a>

{/foreach}