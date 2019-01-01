{* Список категорий из 2-х уровней*}
{if $dirlist}
    {addjs file="jquery.mainmenu.js" basepath="common"}
	
        {foreach from=$dirlist item=dir}
		

		<a href="{$dir.fields->getUrl()}">
        <div class='middleCategory'>
		<img align='left' src="{if !empty($dir.fields.image)}{$dir.fields.__image->getUrl(250,250,'xy')}{else}templates/stoyka/resource/img/no-photo.png{/if}"  width="250px" title="{$dir.fields.name}" alt="{$dir.fields.name}" />
		<div class="descrCategory">{$dir.fields.name}</div>
        </div>
		</a>
        {/foreach}
	
	
	
{else}
    {include file="theme:default/block_stub.tpl"  class="blockCategory" do=[
        [
            'title' => t("Добавьте категории товаров"),
            'href' => {adminUrl do=false mod_controller="catalog-ctrl"}
        ]
    ]}
{/if}