function carouselReview(){
    /*  event-bx one function by = owl.carousel.js */
    jQuery('.event-bx').owlCarousel({
        loop:true,
        margin:30,
        nav:true,
        center:true,
        autoplaySpeed: 3000,
        navSpeed: 3000,
        paginationSpeed: 3000,
        slideSpeed: 3000,
        smartSpeed: 3000,
        autoplay: false,
        navText: ['<i class="fa fa-caret-left" aria-hidden="true"></i>', '<i class="fa fa-caret-right" aria-hidden="true"></i>'],
        dots:true,
        responsive:{
            0:{
                items:1
            },
            720:{
                items:2
            },
            
            1150:{
                items:3
            },			
            
            1200:{
                items:2
            },
            1749:{
                items:3
            }
        }
    })			
}
jQuery(window).on('load',function(){
    setTimeout(function(){
        carouselReview();
    }, 1000); 
});