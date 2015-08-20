(function($){
	$(document).ready(function(){
		// close post
		$(".logoCancel").click(function(){
			$(".postColRight").animate({"margin-left":"100%"},200, function(){
				window.location.href = localized_data.site_url;
			});
		});

		// set height of .cancel button equal to .logo
		$(".cancel").css({"height": $(".logo").height()+"px"});
	});
})(jQuery);