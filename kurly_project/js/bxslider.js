$(document).ready(function(){
    $('.slide').bxSlider({
        auto:true,
        autoHover:true
    });
    
    //   $('.product-list-inner').bxSlider();
    //   $('#content-1').bxSlider();
    
    // $('.product-list-inner').each(function() {
        var sliderPrev = $(this).find("#content-1");
        var sliderNext = $(this).find("#content-2");
        
        $(this).find(".category-content").bxSlider({
            auto: false,
            minSlides: 4,
            maxSlides: 4,
            moveSlides: 1,
            slideMargin: 3,
            // prevSelector: sliderPrev,
            // prevSelector: sliderNext
            
        });
        // category dropdown
			// $(".all_category, .all_category2, .nav_bg").mouseenter(function(){
				// 	$(".gnb2 ul .sub-menu").stop().slideDown("fast");
				// });
				// $(".gnb2 > ul > li, .nav_bg").mouseleave(function(){
					// 	$(".gnb2 ul .sub-menu").stop().slideUp("fast");
					// });
					
					// var sliderPrev = $(this).find(".insta-box");			
					// var sliderNext = $(this).find(".insta-box");	
					
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