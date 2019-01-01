{* Список категорий из 2-х уровней*}
{if $dirlist}
<div class='leftCategory'>
{foreach from=$dirlist item=dir}
<a href="{$dir.fields->getUrl()}" {if in_array($dir.fields.id, $pathids)}id="this-act"{/if}><div class='leftPunct'>{$dir.fields.name}</div></a>
<br>
{/foreach}
</div>

	
	
	
	
	
	
	
	
{else}
    {include file="theme:default/block_stub.tpl"  class="blockCategory" do=[
        [
            'title' => t("Добавьте категории товаров"),
            'href' => {adminUrl do=false mod_controller="catalog-ctrl"}
        ]
    ]}
{/if}