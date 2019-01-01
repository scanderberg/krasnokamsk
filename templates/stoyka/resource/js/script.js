
function newMyWindow(e) {
  var h = 500,
      w = 1100;
  window.open(e, '', 'scrollbars=1,height='+Math.min(h, screen.availHeight)+',width='+Math.min(w, screen.availWidth)+',left='+Math.max(0, (screen.availWidth - w)/2)+',top='+Math.max(0, (screen.availHeight - h)/2));
}

function newMyWindow1(e) {
  var h = 200,
      w = 400;
  window.open(e, '', 'scrollbars=1,height='+Math.min(h, screen.availHeight)+',width='+Math.min(w, screen.availWidth)+',left='+Math.max(0, (screen.availWidth - w)/2)+',top='+Math.max(0, (screen.availHeight - h)/2));
}

$(document).ready(function(){
	
$("div.tel-top span").click(function(){

$("div#lids-form").css("display","block");
$("div.light-box").css("display","block");
  
  });
  
 $("div.tel-bottom span").click(function(){

$("div#lids-form").css("display","block");
$("div.light-box").css("display","block");
$(window).scrollTop(0);
  
  });
  
$("div.light-box, div#close-lids").click(function(){

$("div#lids-form").css("display","none");
$("div.light-box").css("display","none");
  
  });
  
$("div.index-news").click(function(){

$("section#news-products").css("display","block");
$("section#hit-products").css("display","none");
$("section#moll-products").css("display","none");

$("div.index-news").toggleClass("hoverTab", true);
$("div.index-news").toggleClass("unHoverTab", false);
$("div.index-news2").css("display","block");

$("div.index-moll").toggleClass("unHoverTab", true);
$("div.index-moll").toggleClass("hoverTab", false);
$("div.index-moll2").css("display","none");

$("div.index-hits").toggleClass("unHoverTab", true);
$("div.index-hits").toggleClass("hoverTab", false);
$("div.index-hits2").css("display","none");
  
  });
  
$("div.index-moll").click(function(){

$("section#news-products").css("display","none");
$("section#hit-products").css("display","none");
$("section#moll-products").css("display","block");

$("div.index-moll").toggleClass("hoverTab", true);
$("div.index-moll").toggleClass("unHoverTab", false);
$("div.index-moll2").css("display","block");

$("div.index-news").toggleClass("unHoverTab", true);
$("div.index-news").toggleClass("hoverTab", false);
$("div.index-news2").css("display","none");

$("div.index-hits").toggleClass("unHoverTab", true);
$("div.index-hits").toggleClass("hoverTab", false);
$("div.index-hits2").css("display","none");
  
  });
  
$("div.index-hits").click(function(){

$("section#news-products").css("display","none");
$("section#hit-products").css("display","block");
$("section#moll-products").css("display","none");

$("div.index-hits").toggleClass("hoverTab", true);
$("div.index-hits").toggleClass("unHoverTab", false);
$("div.index-hits2").css("display","block");

$("div.index-moll").toggleClass("unHoverTab", true);
$("div.index-moll").toggleClass("hoverTab", false);
$("div.index-moll2").css("display","none");

$("div.index-news").toggleClass("unHoverTab", true);
$("div.index-news").toggleClass("hoverTab", false);
$("div.index-news2").css("display","none");
  
  });
  
  
  
  
  
  
  
$("div.catalog-dropdown").hover(function(){

$("div.all-category").css("display","block");
  
  });
  
$("div.catalog-dropdown").mouseleave(function(){

$("div.all-category").css("display","none");
  
  });
  
  
  });
  
function funcScreen() {
$(document).ready(function(){
allWidth = $("div.verx").width();
allHeight = $("div.all-shop").height();
$("div.light-box").height(allHeight);

if (allWidth < 1940 && allWidth > 1800) {
$("div.searchLine").width(900);
$("input.query").width(900);
$("div.top-logo").css("marginRight", "40px");
$("form.search-top").css("marginLeft", "40px");
$("form.search-top").css("marginRight", "40px");
$("div.tel-top").css("marginLeft", "40px");
$("div.tel-top").css("marginRight", "40px");
$("a#cart").css("marginLeft", "40px");
$("div.pod-slider a img").width(385);
$("div.index-photo").width(1200);
$("div.fix-lite").width(1200);
$("div.fix-middle").width(1200);
$("div.fix-bottom").width(1200);
$("div.lite1").width(270);
$("div.catalog-bottom").css("display", "inline-block");
$("img.alfaBank").css("display", "inline-block");
$("img.russianStandard").css("display", "inline-block");
$("#carousel").css("display", "block");
$("#carousel1").css("display", "none");
$("#carousel2").css("display", "none");
$("span.metallCalc").html("Калькулятор металлопроката");
$("span.kirpichCalc").html("Калькулятор кирпича");
$("span.gazobetonCalc").html("Калькулятор газобетона");
$("div.fixProducts").width(1200);
$("div.catProducts").width(900);
$("div#products").width(900);
$("section.product").width(1200);

$("div#preRecom li#preRecom1").css("margin-left", "150px");
$("div#preRecom li#preRecom2").css("margin-left", "200px");
$("div#preRecom li#preRecom3").css("margin-left", "300px");
$("div#preRecom li#preRecom4").css("margin-left", "400px");

$("div#preSame li#preSame1").css("margin-left", "150px");
$("div#preSame li#preSame2").css("margin-left", "200px");
$("div#preSame li#preSame3").css("margin-left", "300px");
$("div#preSame li#preSame4").css("margin-left", "400px");

$("div#preViewed li#preViewed1").css("margin-left", "150px");
$("div#preViewed li#preViewed2").css("margin-left", "200px");
$("div#preViewed li#preViewed3").css("margin-left", "300px");
$("div#preViewed li#preViewed4").css("margin-left", "400px");

$("div.previewList").width(1000);
$("div.verxBrand2").width(1200);
$("div.fixListing").width(1200);
$("div.fixText").width(1200);
$("div.pageListing").width(900);
$(".searchItems").width(750);
//$("div#carousel li").width(282);
//$("div#carousel li a").width(282);
//$("div#carousel li img").width(282);

}
else if (allWidth < 1800 && allWidth > 1600) {
$("div.searchLine").width(750);
$("input.query").width(750);
$("div.top-logo").css("marginRight", "40px");
$("form.search-top").css("marginLeft", "40px");
$("form.search-top").css("marginRight", "40px");
$("div.tel-top").css("marginLeft", "40px");
$("div.tel-top").css("marginRight", "40px");
$("a#cart").css("marginLeft", "40px");
$("div.pod-slider a img").width(385);
$("div.index-photo").width(1200);
$("div.fix-lite").width(1200);
$("div.fix-middle").width(1200);
$("div.fix-bottom").width(1200);
$("div.lite1").width(270);
$("div.catalog-bottom").css("display", "inline-block");
$("img.alfaBank").css("display", "inline-block");
$("img.russianStandard").css("display", "inline-block");
$("#carousel").css("display", "block");
$("#carousel1").css("display", "none");
$("#carousel2").css("display", "none");
$("span.metallCalc").html("Калькулятор металлопроката");
$("span.kirpichCalc").html("Калькулятор кирпича");
$("span.gazobetonCalc").html("Калькулятор газобетона");
$("div.fixProducts").width(1200);
$("div.catProducts").width(900);
$("div#products").width(900);
$("section.product").width(1200);

$("div#preRecom li#preRecom1").css("margin-left", "150px");
$("div#preRecom li#preRecom2").css("margin-left", "200px");
$("div#preRecom li#preRecom3").css("margin-left", "300px");
$("div#preRecom li#preRecom4").css("margin-left", "400px");

$("div#preSame li#preSame1").css("margin-left", "150px");
$("div#preSame li#preSame2").css("margin-left", "200px");
$("div#preSame li#preSame3").css("margin-left", "300px");
$("div#preSame li#preSame4").css("margin-left", "400px");

$("div#preViewed li#preViewed1").css("margin-left", "150px");
$("div#preViewed li#preViewed2").css("margin-left", "200px");
$("div#preViewed li#preViewed3").css("margin-left", "300px");
$("div#preViewed li#preViewed4").css("margin-left", "400px");

$("div.previewList").width(1000);
$("div.verxBrand2").width(1200);
$("div.fixListing").width(1200);
$("div.fixText").width(1200);
$("div.pageListing").width(900);
$(".searchItems").width(670);
//$("div#carousel li").width(282);
//$("div#carousel li a").width(282);
//$("div#carousel li img").width(282);
}
else if (allWidth < 1600 && allWidth > 1500) {
$("div.searchLine").width(600);
$("input.query").width(600);
$("div.top-logo").css("marginRight", "40px");
$("form.search-top").css("marginLeft", "40px");
$("form.search-top").css("marginRight", "40px");
$("div.tel-top").css("marginLeft", "40px");
$("div.tel-top").css("marginRight", "40px");
$("a#cart").css("marginLeft", "40px");
$("div.pod-slider a img").width(385);
$("div.index-photo").width(1200);
$("div.fix-lite").width(1200);
$("div.fix-middle").width(1200);
$("div.fix-bottom").width(1200);
$("div.lite1").width(270);
$("div.catalog-bottom").css("display", "inline-block");
$("img.alfaBank").css("display", "inline-block");
$("img.russianStandard").css("display", "inline-block");
$("#carousel").css("display", "block");
$("#carousel1").css("display", "none");
$("#carousel2").css("display", "none");
$("span.metallCalc").html("Калькулятор металлопроката");
$("span.kirpichCalc").html("Калькулятор кирпича");
$("span.gazobetonCalc").html("Калькулятор газобетона");
$("div.fixProducts").width(1200);
$("div.catProducts").width(900);
$("div#products").width(900);
$("section.product").width(1200);

$("div#preRecom li#preRecom1").css("margin-left", "150px");
$("div#preRecom li#preRecom2").css("margin-left", "200px");
$("div#preRecom li#preRecom3").css("margin-left", "300px");
$("div#preRecom li#preRecom4").css("margin-left", "400px");

$("div#preSame li#preSame1").css("margin-left", "150px");
$("div#preSame li#preSame2").css("margin-left", "200px");
$("div#preSame li#preSame3").css("margin-left", "300px");
$("div#preSame li#preSame4").css("margin-left", "400px");

$("div#preViewed li#preViewed1").css("margin-left", "150px");
$("div#preViewed li#preViewed2").css("margin-left", "200px");
$("div#preViewed li#preViewed3").css("margin-left", "300px");
$("div#preViewed li#preViewed4").css("margin-left", "400px");

$("div.previewList").width(1000);
$("div.verxBrand2").width(1200);
$("div.fixListing").width(1200);
$("div.fixText").width(1200);
$("div.pageListing").width(900);
$(".searchItems").width(560);
//$("div#carousel li").width(282);
//$("div#carousel li a").width(282);
//$("div#carousel li img").width(282);
}
else if (allWidth < 1500 && allWidth > 1400) {
$("div.searchLine").width(550);
$("input.query").width(550);
$("div.top-logo").css("marginRight", "40px");
$("form.search-top").css("marginLeft", "40px");
$("form.search-top").css("marginRight", "40px");
$("div.tel-top").css("marginLeft", "40px");
$("div.tel-top").css("marginRight", "40px");
$("a#cart").css("marginLeft", "40px");
$("div.pod-slider a img").width(385);
$("div.index-photo").width(1200);
$("div.fix-lite").width(1200);
$("div.fix-middle").width(1200);
$("div.fix-bottom").width(1200);
$("div.lite1").width(270);
$("div.catalog-bottom").css("display", "inline-block");
$("img.alfaBank").css("display", "inline-block");
$("img.russianStandard").css("display", "inline-block");
$("#carousel").css("display", "block");
$("#carousel1").css("display", "none");
$("#carousel2").css("display", "none");
$("span.metallCalc").html("Калькулятор металлопроката");
$("span.kirpichCalc").html("Калькулятор кирпича");
$("span.gazobetonCalc").html("Калькулятор газобетона");
$("div.fixProducts").width(1200);
$("div.catProducts").width(900);
$("div#products").width(900);
$("section.product").width(1200);

$("div#preRecom li#preRecom1").css("margin-left", "150px");
$("div#preRecom li#preRecom2").css("margin-left", "200px");
$("div#preRecom li#preRecom3").css("margin-left", "300px");
$("div#preRecom li#preRecom4").css("margin-left", "400px");

$("div#preSame li#preSame1").css("margin-left", "150px");
$("div#preSame li#preSame2").css("margin-left", "200px");
$("div#preSame li#preSame3").css("margin-left", "300px");
$("div#preSame li#preSame4").css("margin-left", "400px");

$("div#preViewed li#preViewed1").css("margin-left", "150px");
$("div#preViewed li#preViewed2").css("margin-left", "200px");
$("div#preViewed li#preViewed3").css("margin-left", "300px");
$("div#preViewed li#preViewed4").css("margin-left", "400px");

$("div.previewList").width(1000);
$("div.verxBrand2").width(1200);
$("div.fixListing").width(1200);
$("div.fixText").width(1200);
$("div.pageListing").width(900);
$(".searchItems").width(520);
//$("div#carousel li").width(282);
//$("div#carousel li a").width(282);
//$("div#carousel li img").width(282);
}
else if (allWidth < 1400 && allWidth > 1300) {
$("div.searchLine").width(450);
$("input.query").width(450);
$("div.top-logo").css("marginRight", "40px");
$("form.search-top").css("marginLeft", "40px");
$("form.search-top").css("marginRight", "40px");
$("div.tel-top").css("marginLeft", "40px");
$("div.tel-top").css("marginRight", "40px");
$("a#cart").css("marginLeft", "40px");
$("div.pod-slider a img").width(385);
$("div.index-photo").width(1200);
$("div.fix-lite").width(1200);
$("div.fix-middle").width(1200);
$("div.fix-bottom").width(1200);
$("div.lite1").width(270);
$("div.catalog-bottom").css("display", "inline-block");
$("img.alfaBank").css("display", "inline-block");
$("img.russianStandard").css("display", "inline-block");
$("#carousel").css("display", "block");
$("#carousel1").css("display", "none");
$("#carousel2").css("display", "none");
$("span.metallCalc").html("Калькулятор металлопроката");
$("span.kirpichCalc").html("Калькулятор кирпича");
$("span.gazobetonCalc").html("Калькулятор газобетона");
$("div.fixProducts").width(1200);
$("div.catProducts").width(900);
$("div#products").width(900);
$("section.product").width(1200);

$("div#preRecom li#preRecom1").css("margin-left", "150px");
$("div#preRecom li#preRecom2").css("margin-left", "200px");
$("div#preRecom li#preRecom3").css("margin-left", "300px");
$("div#preRecom li#preRecom4").css("margin-left", "400px");

$("div#preSame li#preSame1").css("margin-left", "150px");
$("div#preSame li#preSame2").css("margin-left", "200px");
$("div#preSame li#preSame3").css("margin-left", "300px");
$("div#preSame li#preSame4").css("margin-left", "400px");

$("div#preViewed li#preViewed1").css("margin-left", "150px");
$("div#preViewed li#preViewed2").css("margin-left", "200px");
$("div#preViewed li#preViewed3").css("margin-left", "300px");
$("div#preViewed li#preViewed4").css("margin-left", "400px");

$("div.previewList").width(1000);
$("div.verxBrand2").width(1200);
$("div.fixListing").width(1200);
$("div.fixText").width(1200);
$("div.pageListing").width(900);
$(".searchItems").width(410);
//$("div#carousel li").width(282);
//$("div#carousel li a").width(282);
//$("div#carousel li img").width(282);
}
else if (allWidth < 1300 && allWidth > 1200) {
$("div.searchLine").width(350);
$("input.query").width(350);
$("div.top-logo").css("marginRight", "40px");
$("form.search-top").css("marginLeft", "40px");
$("form.search-top").css("marginRight", "40px");
$("div.tel-top").css("marginLeft", "40px");
$("div.tel-top").css("marginRight", "40px");
$("a#cart").css("marginLeft", "40px");
$("div.pod-slider a img").width(385);
$("div.index-photo").width(1200);
$("div.fix-lite").width(1100);
$("div.fix-middle").width(1100);
$("div.fix-bottom").width(1100);
$("div.lite1").width(230);
$("div.catalog-bottom").css("display", "inline-block");
$("img.alfaBank").css("display", "inline-block");
$("img.russianStandard").css("display", "inline-block");
$("#carousel").css("display", "none");
$("#carousel1").css("display", "block");
$("#carousel2").css("display", "none");
$("span.metallCalc").html("Калькулятор металлопроката");
$("span.kirpichCalc").html("Калькулятор кирпича");
$("span.gazobetonCalc").html("Калькулятор газобетона");
$("div.fixProducts").width(1100);
$("div.catProducts").width(700);
$("div#products").width(700);
$("section.product").width(1100);

$("div#preRecom li#preRecom1").css("margin-left", "50px");
$("div#preRecom li#preRecom2").css("margin-left", "150px");
$("div#preRecom li#preRecom3").css("margin-left", "250px");
$("div#preRecom li#preRecom4").css("margin-left", "350px");

$("div#preSame li#preSame1").css("margin-left", "50px");
$("div#preSame li#preSame2").css("margin-left", "150px");
$("div#preSame li#preSame3").css("margin-left", "250px");
$("div#preSame li#preSame4").css("margin-left", "350px");

$("div#preViewed li#preViewed1").css("margin-left", "50px");
$("div#preViewed li#preViewed2").css("margin-left", "150px");
$("div#preViewed li#preViewed3").css("margin-left", "250px");
$("div#preViewed li#preViewed4").css("margin-left", "350px");

$("div.previewList").width(900);
$("div.verxBrand2").width(1100);
$("div.fixListing").width(1100);
$("div.fixText").width(1100);
$("div.pageListing").width(800);
$(".searchItems").width(300);
//$("div#carousel li").width(260);
//$("div#carousel li a").width(260);
//$("div#carousel li img").width(260);
}
else if (allWidth < 1200 && allWidth >1050) {
$("div.searchLine").width(210);
$("input.query").width(210);
$("div.top-logo").css("marginRight", "40px");
$("form.search-top").css("marginLeft", "40px");
$("form.search-top").css("marginRight", "40px");
$("div.tel-top").css("marginLeft", "40px");
$("div.tel-top").css("marginRight", "40px");
$("a#cart").css("marginLeft", "40px");
$("div.pod-slider a img").width(250);
$("div.index-photo").width(1000);
$("div.fix-lite").width(1000);
$("div.fix-middle").width(1000);
$("div.fix-bottom").width(1000);
$("div.lite1").width(200);
$("div.catalog-bottom").css("display", "inline-block");
$("img.alfaBank").css("display", "inline-block");
$("img.russianStandard").css("display", "inline-block");
$("#carousel").css("display", "none");
$("#carousel1").css("display", "block");
$("#carousel2").css("display", "none");
$("span.metallCalc").html("Металлопрокат");
$("span.kirpichCalc").html("Кирпич");
$("span.gazobetonCalc").html("газобетон");
$("div.fixProducts").width(1000);
$("div.catProducts").width(600);
$("div#products").width(600);
$("section.product").width(1000);

$("div#preRecom li#preRecom1").css("margin-left", "0px");
$("div#preRecom li#preRecom2").css("margin-left", "90px");
$("div#preRecom li#preRecom3").css("margin-left", "200px");
$("div#preRecom li#preRecom4").css("margin-left", "300px");

$("div#preSame li#preSame1").css("margin-left", "0px");
$("div#preSame li#preSame2").css("margin-left", "90px");
$("div#preSame li#preSame3").css("margin-left", "200px");
$("div#preSame li#preSame4").css("margin-left", "300px");

$("div#preViewed li#preViewed1").css("margin-left", "0px");
$("div#preViewed li#preViewed2").css("margin-left", "90px");
$("div#preViewed li#preViewed3").css("margin-left", "200px");
$("div#preViewed li#preViewed4").css("margin-left", "300px");

$("div.previewList").width(800);
$("div.verxBrand2").width(1000);
$("div.fixListing").width(1000);
$("div.fixText").width(1000);
$("div.pageListing").width(700);
$(".searchItems").width(170);
//$("div#carousel li").width(200);
//$("div#carousel li a").width(200);
//$("div#carousel li img").width(200);
}
else if (allWidth < 1050 && allWidth >850) {
$("div.searchLine").width(80);
$("input.query").width(50);
$("div.top-logo").css("marginRight", "30px");
$("form.search-top").css("marginLeft", "30px");
$("form.search-top").css("marginRight", "30px");
$("div.tel-top").css("marginLeft", "30px");
$("div.tel-top").css("marginRight", "30px");
$("a#cart").css("marginLeft", "30px");
$("div.pod-slider a img").width(200);
$("div.index-photo").width(850);
$("div.fix-lite").width(850);
$("div.fix-middle").width(850);
$("div.fix-bottom").width(850);
$("div.lite1").width(170);
$("div.catalog-bottom").css("display", "none");
$("img.alfaBank").css("display", "none");
$("img.russianStandard").css("display", "none");
$("#carousel").css("display", "none");
$("#carousel1").css("display", "none");
$("#carousel2").css("display", "block");
$("span.metallCalc").html("Металлопрокат");
$("span.kirpichCalc").html("Кирпич");
$("span.gazobetonCalc").html("Газобетон");
$("div.fixProducts").width(800);
$("div.catProducts").width(400);
$("div#products").width(400);
$("section.product").width(850);

$("div#preRecom li#preRecom1").css("margin-left", "0px");
$("div#preRecom li#preRecom2").css("margin-left", "-20px");
$("div#preRecom li#preRecom3").css("margin-left", "100px");
$("div#preRecom li#preRecom4").css("margin-left", "200px");

$("div#preSame li#preSame1").css("margin-left", "0px");
$("div#preSame li#preSame2").css("margin-left", "-20px");
$("div#preSame li#preSame3").css("margin-left", "100px");
$("div#preSame li#preSame4").css("margin-left", "200px");

$("div#preViewed li#preViewed1").css("margin-left", "0px");
$("div#preViewed li#preViewed2").css("margin-left", "-20px");
$("div#preViewed li#preViewed3").css("margin-left", "100px");
$("div#preViewed li#preViewed4").css("margin-left", "200px");

$("div.previewList").width(600);
$("div.verxBrand2").width(850);
$("div.fixListing").width(850);
$("div.fixText").width(850);
$("div.pageListing").width(500);
$(".searchItems").width(320);
//$("div#carousel li").width(180);
//$("div#carousel li a").width(180);
//$("div#carousel li img").width(180);


}
  });
}
  
  
  function loadStart(){
   id=setInterval('funcScreen()',10);
}

loadStart();

		$(function() {

			$('#carousel ul').carouFredSel({
				prev: '#prev',
				next: '#next',
				pagination: "#pager",
				auto: true,
				scroll: 1000,
				pauseOnHover: true
			});

		});
		
				$(function() {

			$('#carousel1 ul').carouFredSel({
				prev: '.prev1',
				next: '.next1',
				pagination: ".pager1",
				auto: true,
				scroll: 1000,
				pauseOnHover: true
			});

		});
		
				$(function() {

			$('#carousel2 ul').carouFredSel({
				prev: '.prev2',
				next: '.next2',
				pagination: ".pager2",
				auto: true,
				scroll: 1000,
				pauseOnHover: true
			});

		});
		
/* init Call Service */
var CallSiteId = 'd45c15435c6854d629619adbc1c85ee3';
var CallBaseUrl = '//uptocall.com';
(function() {
    var lt = document.createElement('script');
    lt.type ='text/javascript';
    lt.charset = 'utf-8';
    lt.async = true;
    lt.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + CallBaseUrl + '/widget/client.js?rnd='+Math.floor(Math.random(0,1000)*1000);
    var sc = document.getElementsByTagName('script')[0];
    if (sc) sc.parentNode.insertBefore(lt, sc);
    else document.documentElement.firstChild.appendChild(lt);
})(); 
		

		
new Image().src = "//counter.yadro.ru/hit?r" + escape(document.referrer) + ((typeof(screen)=="undefined")?"" : ";s"+screen.width+"*"+screen.height+"*" + (screen.colorDepth?screen.colorDepth:screen.pixelDepth)) + ";u"+escape(document.URL) +  ";" +Math.random();	
		
		

