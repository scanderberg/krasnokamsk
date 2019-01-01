{if $category && $news}

<div id="carousel" align='center'>
				<ul>
{foreach from=$news item=item}
{$item->getDebugAttributes()}
<li title="{$item.title}"><img src="{if !empty($item.image)}{$item.__image->getUrl(282,282,'xy')}{else}templates/stoyka/resource/img/no-photo.png{/if}" width="282" alt="{$item.title}" title="{$item.title}" /><div class='text-date' align='left'>{$item.dateof|dateformat:"%d %v %Y, %H:%M"}</div><br><br><br><div class='carouselDescr' align='left'><a class='hoverCarousel' style='black!important; display: inline!important; position: relative!important; top: 0px!important; left: 0px!important;' href="{$item->getUrl()}">{$item.title|truncate:40}</a><br><span>{$item->getPreview()|truncate:80}</span></div></li>
{/foreach}	
				</ul>
				<div class="clearfix"></div>
				<a id="prev" class="prev" href="#">&lt;</a>
				<a id="next" class="next" href="#">&gt;</a>
				<div id="pager" class="pager"></div>
			</div>
			
<div id="carousel1" align='center'>
				<ul>
{foreach from=$news item=item1}
{$item1->getDebugAttributes()}
<li title="{$item1.title}"><img src="{if !empty($item1.image)}{$item1.__image->getUrl(282,282,'xy')}{else}templates/stoyka/resource/img/no-photo.png{/if}" width="282" alt="{$item1.title}" title="{$item1.title}" /><div class='text-date' align='left'>{$item1.dateof|dateformat:"%d %v %Y, %H:%M"}</div><br><br><br><div class='carouselDescr' align='left'><a class='hoverCarousel' style='black!important; display: inline!important; position: relative!important; top: 0px!important; left: 0px!important;' href="{$item1->getUrl()}">{$item1.title|truncate:40}</a><br><span>{$item1->getPreview()|truncate:80}</span></div></li>
{/foreach}	
				</ul>
				<div class="clearfix"></div>
				<a id="prev" class="prev1" href="#">&lt;</a>
				<a id="next" class="next1" href="#">&gt;</a>
				<div id="pager" class="pager1"></div>
			</div>
						
<div id="carousel2" align='center'>
				<ul>
{foreach from=$news item=item2}
{$item2->getDebugAttributes()}
<li title="{$item2.title}"><img src="{if !empty($item2.image)}{$item2.__image->getUrl(282,282,'xy')}{else}templates/stoyka/resource/img/no-photo.png{/if}" width="282" alt="{$item2.title}" title="{$item2.title}" /><div class='text-date' align='left'>{$item2.dateof|dateformat:"%d %v %Y, %H:%M"}</div><br><br><br><div class='carouselDescr' align='left'><a class='hoverCarousel' style='black!important; display: inline!important; position: relative!important; top: 0px!important; left: 0px!important;' href="{$item2->getUrl()}">{$item2.title|truncate:40}</a><br><span>{$item2->getPreview()|truncate:80}</span></div></li>
{/foreach}	
				</ul>
				<div class="clearfix"></div>
				<a id="prev" class="prev2" href="#">&lt;</a>
				<a id="next" class="next2" href="#">&gt;</a>
				<div id="pager" class="pager2"></div>
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