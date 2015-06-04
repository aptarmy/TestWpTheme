$(document).ready(function(){
	$(".menuLeft > ul > li").click(function(){
		$(".menuLeft > ul ul").not($(this).find("ul")).slideUp().end().find("a").click(function(e){e.stopPropagation();});
		$(this).find("ul").slideToggle();
		return false;
	});
	$(".sliderThumb").click(function(){$(".sliderImg").css({"background-image" : $(this).css("background-image")});});
});
