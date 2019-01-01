<?php /* Smarty version Smarty-3.1.18, created on 2016-12-06 10:08:38
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/main/view/form/sysoptions/cache.tpl" */ ?>
<?php /*%%SmartyHeaderCode:789914489584663f6bea668-62425538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a78c9b7c0733c67cac8fa6057707c4b2d5acd3c' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/main/view/form/sysoptions/cache.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '789914489584663f6bea668-62425538',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_584663f6c5da73_66646372',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584663f6c5da73_66646372')) {function content_584663f6c5da73_66646372($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><div class="c-help cache_info">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('alias'=>"!Информация о закладке кэш")); $_block_repeat=true; echo smarty_block_t(array('alias'=>"!Информация о закладке кэш"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Клик по любой из представленных ниже ссылок не будет фатальным для системы.
    Удаление файлов из кэша лишь будет означать, что эти файлы нужно создать заново. 
    Система может работать медленне, пока кэш не будет пострен заново.
    Кэш будет строиться помере посещения страниц сайта (в том числе и административной панели).<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('alias'=>"!Информация о закладке кэш"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>

<ul class="cache_links">
    <li><a href="JavaScript:;" data-ctype="common">Очистить общий кэш (будет очищен также и кэш всех модулей)</a>
        <span class="success hidden">готово</span>
    </li>
    <li><a href="JavaScript:;" data-ctype="min">Удалить объединенные и минимизированные файлы CSS и JS</a>
        <span class="success hidden">готово</span>
    </li>
    <li><a href="JavaScript:;" data-ctype="tplcompile">Удалить скомпилированные шаблоны Smarty</a>
        <span class="success hidden">готово</span>
    </li>
    <li><a href="JavaScript:;" data-ctype="autotpl">Удалить автоматически сгенерированные шаблоны форм в админ. панели</a>
        <span class="success hidden">готово</span>
    </li>    
</ul><?php }} ?>
