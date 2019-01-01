
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
}
else if (allWidth < 1050 && allWidth >800) {
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
		
(function() { 
			var s = document.createElement('script');
			s.type = 'text/javascript'; 
			s.async = true; 
			s.charset = 'utf-8';	
			s.src = '//cleversite.ru/cleversite/widget_new.php?supercode=1&referer_main='+encodeURIComponent(document.referrer)+'&clid=20067SQzKs&siteNew=26871'; 
			var ss = document.getElementsByTagName('script')[0]; 
			ss.parentNode.insertBefore(s, ss); 
		})(); 
		

		
new Image().src = "//counter.yadro.ru/hit?r" + escape(document.referrer) + ((typeof(screen)=="undefined")?"" : ";s"+screen.width+"*"+screen.height+"*" + (screen.colorDepth?screen.colorDepth:screen.pixelDepth)) + ";u"+escape(document.URL) +  ";" +Math.random();	
		
		

