{if $zone}
{assign var=banners value=$zone->getBanners()}
        {foreach from=$banners item=banner}
        <div class="pod-slider" align='center'>
            <a {if $banner.link}href="{$banner.link}"{/if} {if $banner.targetblank}target="_blank"{/if}><img src="{$banner->getBannerUrl($zone.width, $zone.height, 'axy')}" alt="{$banner.title}"></a>
        </div>
        {/foreach}
{/if}