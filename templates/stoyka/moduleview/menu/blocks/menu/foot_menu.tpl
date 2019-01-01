{if $items}

<br><br>

{foreach from=$items item=item}
<span>{if $item.fields.typelink!='separator'}<a href="{$item.fields->getHref()}" {if $item.fields.target_blank}target="_blank"{/if}>{$item.fields.title}</a>{else}&nbsp;{/if}<span>
<br><br>
    {/foreach}

{else}
    {include file="theme:default/block_stub.tpl"  class="noBack blockSmall blockLeft blockLogo" do=[
        {$this_controller->getSettingUrl()}    => t("Настройте блок")
    ]}
{/if}