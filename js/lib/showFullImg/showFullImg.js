// Localize script before using this plugin in Wordpress

(function($){
    $.fn.showFullImg = function() {
        var showFullImgElement = "<div class='showFullImgShadow'><div class='showFullImg'><img src=''></div><div class='closeFullImg'></div></div>";
        var linkStyle = "<link rel='stylesheet' href='"+ localized_data.theme_uri +"/js/lib/showFullImg/showFullImg.css'>";
        $("body").append(showFullImgElement).append(linkStyle);
        $("body").on("click", ".showFullImgShadow", function(){
            $(".showFullImgShadow").fadeOut(function(){
                $(".showFullImg").find("img").attr("src", "");
            });
        });
        return this.each(function() {
            $(this).click(function(){
                /* declare variable */
                var $showFullImg = $(".showFullImg");
                var $img = $showFullImg.find("img");
                var bgAttr = $(this).css("background-image");
                var bgUrl = bgAttr.slice(4,-1);
                function calFullImgPos(){
                    $img.css({"height":"", "width":""});
                    var showFullImgH = $showFullImg.height();
                    var imgH = $img.height();
                    if(imgH > showFullImgH){
                        $img.css({"height":"100%", "width":"auto"});
                    }
                    $(".closeFullImg").css({"left": $img.offset().left+$img.width()-20+"px", "top":$img.offset().top-$(window).scrollTop()-20+"px"});
                }
                /* statement */
                $img.css({"height":"", "width":""});
                $img.attr("src", bgUrl);
                $img.load(function(){
                    $(".showFullImgShadow").fadeIn();
                    calFullImgPos();
                    $(window).resize(function(){ calFullImgPos() });
                });
            });
			$(this).addClass("searchPointer");
        });
    };
})(jQuery);
