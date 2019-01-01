{if $items}

        {include file="blocks/menu/branch.tpl" menu_level=$items}

{else}
    {include file="theme:default/block_stub.tpl"  class="noBack blockSmall blockLeft blockMenu" do=[
        {adminUrl do="add" mod_controller="menu-ctrl"} => t("Добавьте пункт меню")
    ]}
{/if}