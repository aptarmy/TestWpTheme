(function($){
	$(document).ready(function(){
		// close post
		$(".logoCancel").click(function(){
			$(".postColRight").animate({"margin-left":"100%"},200, function(){
				window.location.href = localized_data.site_url;
			});
		});
		// stick widget
		$(".adsWidget").stick_in_parent();
	});
})(jQuery);