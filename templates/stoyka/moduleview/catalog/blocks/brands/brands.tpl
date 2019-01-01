{if !empty($brands)}
 
 <div align='center' class='owner2'>
<span>Поставщики</span>
<br>
{foreach $brands as $bran name=brandcount}

{if $smarty.foreach.brandcount.first} 
{assign var="firstbrand" value={$bran.id}}
{/if} 

{if $smarty.foreach.brandcount.last}  
{assign var="lastbrand" value={$bran.id}}
{/if}             

{/foreach}

{math assign="myrand" equation="rand({$firstbrand},{$lastbrand})"}
{math assign="myrand2" equation="rand({$firstbrand},{$lastbrand})"}
{math assign="myrand3" equation="rand({$firstbrand},{$lastbrand})"}
{math assign="myrand4" equation="rand({$firstbrand},{$lastbrand})"}
 
<div style='margin-top: -7px!important;'>
{foreach $brands as $brand}

{if $brand.image}
{if $brand.id == $myrand or $brand.id2 eq $myrand or $brand.id eq $myrand3 or $brand.id eq $myrand4}

<a href="{$brand->getUrl()}">
<img src="{$brand->__image->getUrl(100,100,'axy')}" alt="{$brand.title}" height="80px"/>
</a>

{/if} 
{/if}              

{/foreach}
</div>  

</div>

{/if}