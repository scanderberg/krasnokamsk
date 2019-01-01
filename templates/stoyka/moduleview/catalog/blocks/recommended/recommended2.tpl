{if !empty($recommended)}
<section class="recommended">
    <h2><span>{$recommended_title|default:"С этим товаром покупают"}</span></h2>
	<div align="center">
    <div class="previewList" style="width: 1000px!important;">
        <div class="gallery">
            <ul>
                {foreach from=$recommended item=product name=recommend}
                {$main_image=$product->getMainImage()}
				
{if $smarty.foreach.recommend.total <= 4}

{assign var="recommend2" value="Bob"}

{/if}
				
                <li style="{if $smarty.foreach.recommend.first}{if $smarty.foreach.recommend.total == 4}margin-left: 100px!important;{elseif $smarty.foreach.recommend.total == 3}margin-left: 200px!important;{elseif $smarty.foreach.recommend.total == 2}margin-left: 300px!important;{elseif $smarty.foreach.recommend.total == 1}margin-left: 400px!important;{/if}{/if} width: 200px!important; height: 250px!important; margin-right: 10px!important; margin-left: 10px!important;"><a href="{$product->getUrl()}" title="{$product.title}"><img src="{$main_image->getUrl(200,200,'xy')}" alt="{$main_image.title|default:"{$product.title}"}" /></a>
				
				<div align="left" style="width: 200px!important; vertical-align: bottom!important; text-align: left!important;">		
<a align="left" href="{$product->getUrl()}" title="{$product.title}" style="line-height: 18px!important; font-size: 14px!important; display: inline-block!important;">
				{$product.title|truncate:30}
				<br>
				<span style="color: red!important; font-weight: bold!important;">{$product->getCost()} {$product->getCurrency()}</span>
				
				</a>
</div>
				
				</li>
                {/foreach}
            </ul>
        </div>
{if !$recommend2}
        <a class="control prev" style="top: 135px!important;"></a>
        <a class="control next" style="top: 135px!important;"></a>
{/if}
    </div>
	</div>
</section>
{/if}