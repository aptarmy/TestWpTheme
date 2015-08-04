(function($){
    $(document).ready(function(){
        // Slider page on top menu
        (function(){
            var currentPage = "home";
            $("header nav").find("a").click(function(){
                var href = $(this).attr("href").replace("#","");
                var $specificPage = $(".pageSlide").find("a[href='"+href+"']").closest(".page");
                var $allPages = $(".pageSlide").find(".page");
                if(currentPage === href){ return false; }
                $allPages.slideDown();
                $(".mainArea").prev(".page").remove();
                if (href != "home"){
                    $(".runningText").slideUp();
                    $(".mainArea").slideUp();
                    $specificPage.slideUp().clone().css({"display":"none"}).insertBefore(".mainArea");
                    $(".mainArea").prev(".page").slideDown();
                } else {
                    $(".runningText").slideDown();
                    $(".mainArea").slideDown();
                }
                currentPage = href;
                $("header nav li").find("a").removeClass("highlight");
                $("header nav").removeClass("expand");
                $(".collapseShadow").removeClass("show");
                $(this).addClass("highlight");
            });
        })();

        // Show Full Image
        $(".sliderImg").showFullImg();

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

        (function(){
        	/* collapse button */
        	$(".collapseBtn").click(function(){$("header").find("nav").addClass("expand"); $(".collapseShadow").addClass("show");});
        	$("header").find("nav").mouseleave(function(){ $(this).removeClass("expand").removeClass("expand"); $(".collapseShadow").removeClass("show"); });
        	$(".collapseShadow").click(function(){ $("header nav").removeClass("expand").removeClass("expand"); $(this).removeClass("show");return false; });
        })();
    });
})(jQuery);
