{if $products}
<div align="center">
<section class="topProducts pl{$_block_id}" id='hit-products'>

        <div class="productWrap">
                <ul class="productList" align="center">
                    {foreach from=$products item=product}
                    <li {$product->getDebugAttributes()} class='news-products'>
{$product->fillCategories()|devnull}	
{if $product->inDir('new')}
<div class="productNew"></div>
{/if}
{if $product->inDir('popular')}
<div class="productMoll" {if $product->inDir('new')} style="margin-top: 40px;" {/if} ></div>
{/if}
{if $product->inDir('top')}
<div class="productHit" {if $product->inDir('new') and $product->inDir('popular')}} style="margin-top: 70px!important;" {/if} {if $product->inDir('new')} style="margin-top: 40px!important;" {/if} {if $product->inDir('popular')} style="margin-top: 40px!important;" {/if} ></div>
{/if}				
					
                        <a href="{$product->getUrl()}" class="pic">
                        <span class="labels">
                            {foreach from=$product->getMySpecDir() item=spec}
                            {if $spec.image}
                                <img src="{$spec->__image->getUrl(62,62, 'xy')}">
                            {/if}
                            {/foreach}
                        </span>
                        {$main_image=$product->getMainImage()}
                        <img src="{$main_image->getUrl(141,185,'xy')}" alt="{$main_image.title|default:"{$product.title}"}"/></a>
                        <a href="{$product->getUrl()}" class="info">
                            <h3 align='center'>{$product.title}</h3>
                            <p class="group" align='center'>
                                <span class="sale-index">{$product->getCost()} {$product->getCurrency()}</span>
                                <span class="name">{$product->getMainDir()->name}</span>
                            </p>
                        </a>
                    </li>
                    {/foreach}
                </ul>
                <div class="clearLeft"></div>
                {if $paginator->total_pages > $paginator->page}
                    <a data-pagination-options='{ "appendElement":".productList", "context":".pl{$_block_id}" }' data-href="{$router->getUrl('catalog-block-topproducts', ['_block_id' => $_block_id, 'page' => $paginator->page+1])}" class="onemoreEmpty ajaxPaginator">посмотреть еще</a>
                {/if}
        </div>
</section>
</div>
{else}
    {include file="theme:default/block_stub.tpl"  class="blockTopProducts" do=[
        [
            'title' => t("Добавьте категорию с товарами"),
            'href' => {adminUrl do=false mod_controller="catalog-ctrl"}
        ],
        [
            'title' => t("Настройте блок"),
            'href' => {$this_controller->getSettingUrl()},
            'class' => 'crud-add'
        ]
    ]}
{/if}