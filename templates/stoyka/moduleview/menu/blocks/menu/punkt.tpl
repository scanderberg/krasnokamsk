{foreach from=$menu_level item=item}

<a href="{$item.fields->getHref()}" {if $item.fields.target_blank}target="_blank"{/if}><div class="leftMenu">
<b style="line-height: 24px!important;">
        {if $item.fields.typelink!='separator'}{$item.fields.title}{else}&nbsp;{/if}
</b>
    {if !empty($item.child)}
    <div class="childMenu">
        {include file="blocks/menu/punkt2.tpl" menu_level=$item.child}
		
    </div>
    {/if}
</div></a>


{/foreach}