// toggle hamburger & off-canvas nav
        
jQuery(document).ready(function($){
    var hamburgerSelector = ".mobile-menu-btn";
    var $hamburger = $(hamburgerSelector);
    var menuSelector = $hamburger.attr("data-target");

    $(hamburgerSelector).on("click", function() {
        $hamburger = $(hamburgerSelector);
        $hamburger.toggleClass("collapsed");

        if(menuSelector != undefined){
            if($hamburger.hasClass("collapsed") == true){
                $(menuSelector).css("display", "none");
                $("#headerImage header#header").removeClass("menu-open");
            }
            else{
                $(menuSelector).css("display", "inline-flex");
                $("#headerImage header#header").addClass("menu-open");
            }
            
        }
    });

    $(window).resize(function(){
        const MOBILE_MAX_WIDTH = 1434;
        $hamburger = $(hamburgerSelector);
        
        if(window.innerWidth <= MOBILE_MAX_WIDTH && $hamburger.hasClass("collapsed")){
            $(menuSelector).hide();
        }
        else{
            $(menuSelector).show();
        }

    });
});