<?php

  $mrh_login = "stroybaza";
  $mrh_pass1 = "Ps7ojYWyUc7M5wzgqS73";
  $inv_id = $_GET['id'];
  $inv_desc = urlencode("Предоплата за стройматериалы");
  $out_summ = $_GET['summa'];
  $shp_item = 1;
  $culture = "ru";
  $encoding = "utf-8";
  $crc = md5("$mrh_login:$out_summ:$inv_id:$mrh_pass1");
  
  $url_pay = "https://auth.robokassa.ru/Merchant/Index.aspx?MerchantLogin=$mrh_login&IsTest=1&OutSum=$out_summ&InvoiceID=$inv_id".
      "&Description=$inv_desc&SignatureValue=$crc".
      "&Culture=$culture&Encoding=$encoding";;
  
header("Location: $url_pay");
exit;
	  
?>