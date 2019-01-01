{if count($products)}

{foreach from=$products item=producted name=prelasted}

{if $smarty.foreach.prelasted.total < 4}
{assign var="prelast" value="veavere"}
{/if}

{/foreach}

<section class="recommended" align="center">
    <h2><span>{t}Просмотренные товары{/t}</span></h2>
<div align="center">
    <div class="previewList" style="width: 1000px;" {if $prelast}id="preViewed"{/if}>
        <div class="gallery">
            <ul>
                {foreach from=$products item=product name=lastviewed}
                {$main_image=$product->getMainImage()}
				
{if $smarty.foreach.lastviewed.total <= 4}
{assign var="lastviewed2" value="Bob"}
{/if}
				
                <li {if $smarty.foreach.lastviewed.first}{if $smarty.foreach.lastviewed.total == 4}id="preViewed1"{elseif $smarty.foreach.lastviewed.total == 3}id="preViewed2"{elseif $smarty.foreach.lastviewed.total == 2}id="preViewed3"{elseif $smarty.foreach.lastviewed.total == 1}id="preViewed4"{/if}{/if} style="width: 200px!important; height: 270px!important; vertical-align: bottom!important;"><a href="{$product->getUrl()}" title="{$product.title}"><img src="{$main_image->getUrl(200,200,'xy')}" alt="{$main_image.title|default:"{$product.title}"}" />
				</a>
<div align="center" style="width: 200px!important; vertical-align: bottom!important; text-align: center!important;">		
<a align="center" href="{$product->getUrl()}" title="{$product.title}" style="line-height: 18px!important; font-size: 14px!important; display: inline-block!important;">
				{$product.title|truncate:30}
				<br>
				<span style="color: red!important; font-weight: bold!important;">{$product->getCost()} {$product->getCurrency()}</span>
				</a>
</div>
				</li>
                {/foreach}
            </ul>
        </div>
		{if !$lastviewed2}
        <a class="control prev" style="top: 150px!important;"></a>
        <a class="control next" style="top: 150px!important;"></a>
		{/if}
    </div>
</div>
</section>

{/if}