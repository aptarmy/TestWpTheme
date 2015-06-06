$(document).ready(function(){

	/* leftMenu SlideUp-Down */
	$(".menuLeft > ul > li").click(function(){
		$(".menuLeft > ul ul").not($(this).find("ul")).slideUp().end().find("a").click(function(e){e.stopPropagation();});
		$(this).find("ul").slideToggle();
		return false;
	});

	/* slide show */
	$(".sliderThumb").click(function(){
		$(".sliderImg").css({"background-image" : $(this).css("background-image")});
		$(".sliderTitle a").text($(this).data("title"));
	});

	/* show post in category */
	$(".post").click(function(){
		$(this).toggleClass("expandPost");
	});

	/* collapse button */
	$(".collapseBtn").click(function(){$("header").find("nav").addClass("expand");});
	$("header").find("nav").mouseleave(function(){ $(this).removeClass("expand").removeClass("expand"); });

});
