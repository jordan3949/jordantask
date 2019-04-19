$(document).ready(function() {    
             
    $('.open-mobile-menu').click(function(){
        $('.header-right').toggleClass('mobile-menu-opened');
        $('.nav-overlay').fadeToggle();
    });

    $('.close-mobile-menu, .nav-overlay').click(function(){
        $('.header-right').removeClass('mobile-menu-opened');
        $('.nav-overlay').fadeOut();
    });

     $('.testimonial').owlCarousel({
     loop:true,
     margin:10,
     autoplay:true,
     autoplayTimeout:5000,
     autoplayHoverPause:true,
     nav:true,
     responsive:{
         0:{
             items:1
         },
         600:{
             items:3
         },
         1000:{
             items:3
         }
     }
 });

 $('.latestnews').owlCarousel({
     loop:true,
     margin:10,
     nav:true,
     autoplay:true,
     autoplayTimeout:5000,
     autoplayHoverPause:true,
     responsive:{
         0:{
             items:1
         },
         600:{
             items:1
         },
         1000:{
             items:1
         }
     }
 });
 });