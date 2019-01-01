

{* Основной шаблон *}
{strip}
{addcss file="/rss-news/" basepath="root" rel="alternate" type="application/rss+xml" title="t('Новости')"}
{addcss file="//fonts.googleapis.com/css?family=Neucha&amp;subset=cyrillic" basepath="root" no_compress=true}
{addcss file="960gs/reset.css"}
{addcss file="style.css?v=4"}
{addcss file="960gs/960_orig.css" before="<!--[if lte IE 8]>" after="<![endif]-->"}
{addcss file="960gs/mobile.css"}
{addcss file="960gs/720.css"}
{addcss file="960gs/960.css"}
{addcss file="960gs/1200.css"}
{addcss file="colorbox.css"}
{addcss file="mystyle.css"} {* подключаем файл ТЕКУЩАЯ_ТЕМА/resource/css/style.css *}

{addjs file="html5shiv.js" unshift=true header=true}
{addjs file="jquery.min.js" name="jquery" basepath="common" unshift=true header=true}
{addjs file="jquery.autocomplete.js"}
{addjs file="jquery.deftext.js" basepath="common"}
{addjs file="jquery.form.js" basepath="common"}
{addjs file="jquery.cookie.js" basepath="common"}
{addjs file="jquery.switcher.js"}
{addjs file="jquery.ajaxpagination.js"}
{addjs file="jquery.colorbox-min.js"}
{addjs file="jquery.activetabs.js"}
{addjs file="jquery.formstyler.min.js"}
{addjs file="jcarousel/jquery.jcarousel.min.js"}
{addjs file="jquery.touchswipe.min.js"}
{addjs file="modernizr.touch.js"}
{addjs file="common.js"}
{addjs file="theme.js"}

{addjs file="jquery.carouFredSel-5.2.3-packed.js"}
{addjs file="script.js"}
{addjs file="maps.js"}
{addjs file="maps2.js"}

{addmeta http-equiv="X-UA-Compatible" content="IE=Edge" unshift=true}
{$app->meta->add(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0'])|devnull}

{assign var=shop_config value=ConfigLoader::byModule('shop')}
{if $shop_config===false}{$app->setBodyClass('shopBase')}{/if}

{$app->setDoctype('HTML')}
{/strip}
{$app->blocks->renderLayout()} {* Запускаем рендеринг данной страницы *}

{* Подключаем файл scripts.tpl, если он существует в папке темы. В данном файле 
рекомендуется добавлять JavaScript код, который должен присутствовать на всех страницах сайта *}
{tryinclude file="%THEME%/scripts.tpl"}
