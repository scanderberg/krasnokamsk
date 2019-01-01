
{foreach from=$list item=item}
    <div {$item->getDebugAttributes()}>
{if !empty($item.image)}<img align="left" src="{$item.__image->getUrl(120,120,'xy')}" alt="{$item.title}" class="listImage"/>{/if}
        <span class="date">{$item.dateof|date_format:"d.m.Y H:i"}</span><br>
        <a class="link" href="{$item->getUrl()}">
            <b class="listCapt">{$item.title}</b><br>
            <span class="preview"> 
            {$item->getPreview()|truncate:180}</span>
        </a>
    </div>
	
	<br>
{/foreach}

{include file="%THEME%/paginator.tpl"}