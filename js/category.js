(function($){ $("document").ready(function(){
    var fnSlidePage;
    /* backBtn slide page to right screen after click */
    (function(){
        fnSlidePage = function (){ $(".container-fluid").animate({"left":"100%"}, 500, function(){ window.location.href="index.html" }); }
        $(".backBtn").click(function(){ fnSlidePage(); });
    })();
    /* Fix rightBar position */
    (function(){
        fixedMenuRight();
        setHeightMenuRight();
        /* use margin-top to make .barRight acts as if it is fixed instead of position:fixed */
        function fixedMenuRight(){
            var $barRight = $(".barRight"), barRightH = $barRight.height(), barRightT = $barRight.offset().top;
            var $col = $barRight.closest(".col-md-2"), colH = $col.height(), colT = $col.offset().top;
            var $footer = $("footer"), footerT = $footer.offset().top;
            var winT = $(window).scrollTop(), winH = $(window).height();
            if((winT+barRightH) <= (footerT-6)){ // minus 6 = space-top 3px + space-bottom 3px
                $barRight.css({"top": winT+"px"});
            }else{
                $barRight.css({"top": winT - ((winT+winH) - colH)+ 3 + "px"});
            }
        }
        /* define menuRight HEIGHT */
        function setHeightMenuRight(){
            var $barRight = $(".barRight"), barRightH = $barRight.height(), barRightT = $barRight.offset().top;
            var $col = $barRight.closest(".col-md-2"), colH = $col.height(), colT = $col.offset().top;
            var $footer = $("footer"), footerT = $footer.offset().top;
            var $menuRight = $(".menuRight");
            var menuRightTop = $menuRight.offset().top;
            var winH = $(window).height();
            var winT = $(window).scrollTop();
            if((winT+barRightH) <= (footerT-6)){
                $menuRight.css({"height" : ((winH+winT) - menuRightTop - 3)+"px"});
            } else {
                 $menuRight.css({"height" : ((winH+winT) - menuRightTop - ((winT+winH)-(footerT)) - 3)+"px"});
            }
        }
        /* browser's window even */
        $(window).scroll(function(){fixedMenuRight()}).resize(function(){fixedMenuRight();setHeightMenuRight()});
    })();
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
    })();
});})(jQuery);
