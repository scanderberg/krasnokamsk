<form method="GET" action="{$router->getUrl('catalog-front-listproducts', [])}" class='search-top'>
    <div class="searchLine">
        <div class="queryWrap" id="queryBox">
            <input type="text" class="query{if !$param.hideAutoComplete} autocomplete{/if}" data-deftext="Поиск по каталогу" name="query" value="{$query}" autocomplete="off" data-source-url="{$router->getUrl('catalog-block-searchline', ['sldo' => 'ajaxSearchItems', _block_id => $_block_id])}">
        </div>
        <input type="submit" class="find" value="">
    </div>
</form>