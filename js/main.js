var emSize = parseFloat($("html").css("font-size"));

//cover image
$(".thumb img").fillBox();

//scroll fix
/*
var lastScroll = 0;
$(window).scroll(function(event){
	var st = $(this).scrollTop();
	if(Math.abs(lastScroll - st) <= 5)
		return;
	if (st < lastScroll) {
		$(".main-header").addClass("sticky");
	} else {
		$(".main-header").removeClass("sticky");
	}
	lastScroll = st;
});
*/
$(window).scroll(function() {    
	var scroll = $(window).scrollTop();
	var h = $(".banner-area").outerHeight()/2;
	if (scroll >= h) {
		$(".main-header").addClass("sticky");
	} else {
		$(".main-header").removeClass("sticky");
	}
});

//modal
$(".modal").on("shown.bs.modal", function() {
	if($("body").hasClass("modal-open")){
		$(this).find(".container").append("<div class='backdrop'></div>");
	}
	
	$(".backdrop").click(function(){
		$(this).parents(".modal").modal("hide");
		$(".backdrop").remove();
	});
});

//onload
$(window).on("load",function() {
	"use strict";
	setTimeout(loader, 200);
	function loader(){
		$("body").addClass("load");
	}
});

//mobile menu
$(".toggle-menu-wrapper").click(function(){
	$("body").toggleClass("active-menu");
	if($("body").hasClass("active-menu")){
		//$(".main-header").append("<div class='backdrop'></div>");
        $("body").css("overflow","hidden");
	} else {
        $("body").css("overflow","visible");
		//$(".main-header").find(".backdrop").remove();
	}
	
	//$(".backdrop").css("height",""+fullHeight+"px");
	//$(".backdrop").click(function(){
	//	$("body").removeClass("active-menu");
	//	$(this).remove();
	//});
});

//scrollbar
// if ($(window).width() > 991) {
//    jQuery.scrollSpeed(60, 600);
// } else {
//     $("body").css("overflow","visible");
// }