$(document).ready(function(){
    $('.slide').bxSlider({
        auto:true,
        autoHover:true
    });
    
        var sliderPrev = $(this).find("#content-1");
        var sliderNext = $(this).find("#content-2");
        
        $(this).find(".category-content").bxSlider({
            auto: false,
            minSlides: 4,
            maxSlides: 4,
            moveSlides: 1,
            slideMargin: 3,
            
        });
        $(".insta-inner").bxSlider({
            auto: true,
            autoHover:true,
            slideWidth:800,
            slideHeight:10,
            minSlides: 6,
            maxSlides: 6,
            moveSlides: 1,
            slideMㄸargin: 3,
            pager:false
        });
    
        $('.flexnav').flexNav();

        try{Typekit.load();}catch(e){}
        
        $('.flexnav').flexNav({'animationSpeed':'fast'});
                    
        });