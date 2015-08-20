(function($){ $("document").ready(function(){
    var fnSlidePage;
    /* backBtn slide page to right screen after click */
    (function(){
        fnSlidePage = function (){ $(".barRight").css({"position":"static"}); $(".container-fluid").animate({"left":"100%"}, 500, function(){ window.location.href=localized_data.site_url; }); }
        $(".backBtn").click(function(){ fnSlidePage(); });
    })();
    // stick .menuRight when scrolling
    $(".barRight").stick_in_parent();
    /* Show Full image */
    $(".post").showFullImg();
    // Collapse Button
    (function(){
        // calculate fixed position
        function calCatCallapseBtnPos(){
            if($(window).scrollTop() == 0){
                $(".cat-collapseBtn").css({"top":$(".post").offset().top+5+"px"});
            }else if($(".post").eq(0).offset().top > $(window).scrollTop()){
                $(".cat-collapseBtn").css({"top":$(".post").offset().top+5-$(window).scrollTop()+"px"});
            }else{
                $(".cat-collapseBtn").css({"top":"5px"});
            }
        }
        calCatCallapseBtnPos();
        $(window).scroll(function(){ calCatCallapseBtnPos() }).resize(function(){ calCatCallapseBtnPos() });

        // fire event
        $(".cat-collapseBtn").click(function(){
            $(".menuRight").css({"right":"0px"});
            $(".menuRightShadow").css({"display":"block"});
        });
        $(".menuRight").mouseleave(function(){
            $(this).css({"right":"-230px"});
            $(".menuRightShadow").css({"display":"none"});
        });
        $(".backBtnText").click(function(){
            $(".cat-collapseBtn").css({"display":"none"});
            $(".menuRight").css({"right":"-230px"});
            $(".menuRightShadow").css({"display":"none"});
            fnSlidePage();
        });
        $(".menuRightShadow").click(function(){
            $(".menuRight").css({"right":"-230px"});
            $(this).css({"display":"none"});
            return false;
        });
		$(".post a").click(function(e){ e.stopPropagation(); });
    })();
});})(jQuery);
