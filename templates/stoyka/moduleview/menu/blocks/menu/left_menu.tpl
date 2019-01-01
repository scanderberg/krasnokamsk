{if $items}
<div class="topLeft" style="widht: 200px!important">
        {include file="blocks/menu/punkt.tpl" menu_level=$items}
</div>
{else}
    {include file="theme:default/block_stub.tpl"  class="noBack blockSmall blockLeft blockMenu" do=[
        {adminUrl do="add" mod_controller="menu-ctrl"} => t("Добавьте пункт меню")
    ]}
{/if}