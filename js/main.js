$(".widgetMenuSlide > ul > li").click(function(){
	$(".widgetMenuSlide > ul ul").not($(this).find("ul")).slideUp().end().find("a").click(function(e){e.stopPropagation();});
	$(this).find("ul").slideToggle();
});
