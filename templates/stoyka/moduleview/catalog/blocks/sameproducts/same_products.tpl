{if $sameproducts}

{foreach from=$sameproducts item=preproduct name=presamed}

{if $smarty.foreach.presamed.total < 4}
{assign var="presame" value="veavbwe"}
{/if}

{/foreach}

<section class="recommended" align="center">
    <h2><span>Похожие товары</span></h2>
<div align="center">
    <div class="previewList" style="width: 1000px;" {if $presame}id="preSame"{/if}>
        <div class="gallery">
            <ul>
                {foreach from=$sameproducts item=product name=lastviewed3}
                {$main_image=$product->getMainImage()}
				
{if $smarty.foreach.lastviewed3.total <= 4}
{assign var="lastviewed4" value="Bob"}
{/if}
				
                <li {if $smarty.foreach.lastviewed3.first}{if $smarty.foreach.lastviewed3.total == 4}id="preSame1"{elseif $smarty.foreach.lastviewed3.total == 3}id="preSame2"{elseif $smarty.foreach.lastviewed3.total == 2}id="preSame3"{elseif $smarty.foreach.lastviewed3.total == 1}id="preSame4"{/if}{/if} style=" width: 200px!important; height: 270px!important; vertical-align: bottom!important;"><a href="{$product->getUrl()}" title="{$product.title}"><img src="{$main_image->getUrl(200,200,'xy')}" alt="{$main_image.title|default:"{$product.title}"}" />
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
		{if !$lastviewed4}
        <a class="control prev" style="top: 150px!important;"></a>
        <a class="control next" style="top: 150px!important;"></a>
		{/if}
    </div>
</div>
</section>
{/if}