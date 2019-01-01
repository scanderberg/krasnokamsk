{if count($products)}

<section class="recommended" align="center">
    <h2><span>{t}Просмотренные товары{/t}</span></h2>
<div align="center">
    <div class="previewList" style="width: 1000px!important;">
        <div class="gallery">
            <ul>
                {foreach from=$products item=product}
                {$main_image=$product->getMainImage()}
                <li style="width: 200px!important; height: 250px!important;"><a href="{$product->getUrl()}" title="{$product.title}"><img src="{$main_image->getUrl(200, 200)}" alt="{$main_image.title|default:"{$product.title}"}"/>
				</a>
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
        <a class="control prev" style="top: 135px!important;"></a>
        <a class="control next" style="top: 135px!important;"></a>
    </div>
</div>
</section>

{/if}