<?php

// регистрационная информация (логин, пароль #1)
// registration info (login, password #1)
$mrh_login = "stroybaza";
$mrh_pass1 = "REZCv47bl54Iy7xZnemj";

// номер заказа
// number of order
$inv_id = 0;

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
$crc  = md5("$mrh_login:$out_summ:$inv_id:$mrh_pass1:shp_Item=$shp_item");

header('Location: http://auth.robokassa.ru/Merchant/Index.aspx?MerchantLogin=demo&OutSum=11.00&InvoiceID=&Description=%D0%9E%D0%BF%D0%BB%D0%B0%D1%82%D0%B0%20%D0%B7%D0%B0%D0%BA%D0%B0%D0%B7%D0%B0%20%D0%B2%20%D0%A2%D0%B5%D1%81%D1%82%D0%BE%D0%B2%D0%BE%D0%BC%20%D0%BC%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD%D0%B5%20ROBOKASSA&shp_Item=1&Culture=ru&Encoding=utf-8&SignatureValue=0169e74c53384516cb9e1e376639b9f3');
exit;
	  
?>