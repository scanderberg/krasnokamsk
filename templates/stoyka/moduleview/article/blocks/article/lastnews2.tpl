{if $category && $news}

<div id="carousel" align='center'>
				<ul>
{foreach from=$news item=item}
{$item->getDebugAttributes()}
<li><img src="{if !empty($item.image)}{$item.__image->getUrl(120,120,'xy')}{else}templates/stoyka/resource/img/no-photo.png{/if}"  width="96" alt="{$item.title}" title="{$item.title}" /><a href=""></a><div class='text-date' align='left'>{$item.dateof|dateformat:"%d %v %Y, %H:%M"}</div><br><br><br><div class='carouselDescr' align='left'>{$item.title|truncate:40}<br><span>{$item.description|truncate:50}</span></div></li>
{/foreach}	
				</ul>
				<div class="clearfix"></div>
				<a id="prev" class="prev" href="#">&lt;</a>
				<a id="next" class="next" href="#">&gt;</a>
				<div id="pager" class="pager"></div>
			</div>




{else}
    {include file="theme:default/block_stub.tpl"  class="blockLastNews" do=[
        [
            'title' => t("Добавьте категорию с новостями"),
            'href' => {adminUrl do=false mod_controller="article-ctrl"}
        ],        
        [
            'title' => t("Настройте блок"),
            'href' => {$this_controller->getSettingUrl()},
            'class' => 'crud-add'
        ]        
    ]}
{/if}