<?php

// регистрационная информация (логин, пароль #1)
// registration info (login, password #1)
$mrh_login = "stroybaza";
$mrh_pass1 = "Ps7ojYWyUc7M5wzgqS73";

// номер заказа
// number of order
$inv_id = 63466;

// описание заказа
// order description
$inv_desc = "Предоплата за стройматериалы";

// сумма заказа
// sum of order
$out_summ = "700";

// тип товара
// code of goods
$shp_item = 1;

// язык
// language
$culture = "ru";

// кодировка
// encoding
$encoding = "utf-8";

// формирование подписи
// generate signature
$crc = md5("$mrh_login:$out_summ:$inv_id:$mrh_pass1:shp_Item=$shp_item");



header('Location: https://auth.robokassa.ru/Merchant/Index.aspx?MerchantLogin=$mrh_login&IsTest=1&OutSum=$out_summ&InvoiceID=$inv_id&Description=$inv_desc&shp_Item=$shp_item&Culture=$culture&Encoding=$encoding&SignatureValue=$crc');
exit;
	  
?>