{if !empty($brands)}
 
 <div align='center' class='owner2'>
<span>Поставщики</span>
<br><br>
{math assign="myrand" equation="rand(13,26)"}
 
{foreach $brands as $brand}

{if $brand.image}
{if $brand.id == $myrand}
<a href="{$brand->getUrl()}">
<img src="{$brand->__image->getUrl(100,100,'axy')}" alt="{$brand.title}" height="80px"/>
</a>
{/if} 
{/if}                

{/foreach}

</div>

{/if}