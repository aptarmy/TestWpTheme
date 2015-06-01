(function($){
	$("#accordian h3").click(function(){
		$("#accordian h3").siblings("ul").slideUp();
		$(this).siblings("ul").slideDown();
	});
})(jQuery);
