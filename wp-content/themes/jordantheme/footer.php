<footer class="block site-footer">
         <div class="row">
            <div class="grid-3 large-grid-2 column">
               <img alt="Company footer logo" class="footer-logo" src="<?php echo get_template_directory_uri();?>/assets/footer-logo.png">
            </div>
            <div class="grid-4 large-grid-6 column">
               <ul>
                  <li class="title">Contact us directly</li>
                  <li class="name">Andy</li>
                  <li><span>t:</span> <a href="tel:07880 700900">07880 700900</a></li>
                  <li><span>e:</span> <a href="@mailto:andy@fourmime.co.uk">andy@fourmime.co.uk</a></li>
               </ul>
               <ul>
                  <li class="title">&nbsp;</li>
                  <li class="name">Ian</li>
                  <li><span>t:</span> <a href="tel:07712 323868">07712 323868</a></li>
                  <li><span>e:</span> <a href="@mailto:ian@fourmime.co.uk">ian@fourmime.co.uk</a></li>
               </ul>
            </div>
            <div class="grid-5 large-grid-4 column">
                <div class="newsletter-wrap">
                    <form class="newsletter">
                        <input type="text" placeholder="Email" >
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
               <ul class="social-links">
                  <li><img alt="linkedin profile" src="<?php echo get_template_directory_uri();?>/assets/linkedin.png"></li>
                  <li><img alt="facebook" src="<?php echo get_template_directory_uri();?>/assets/facebook.png"></li>
                  <li><img alt="twitter" src="<?php echo get_template_directory_uri();?>/assets/twitter.png"></li>
               </ul>
            </div>
         </div>
         <div class="row">
            <div class="grid-12 column">
               <p class="copyright">
                  Copyright 2017 Four Mime Ltd 2017. Web Design & Development by Fifteen.
               </p>
            </div>
         </div>
      </footer>


      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

      <!-- Owl Stylesheets -->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/owl.theme.default.min.css">
      <!-- javascript -->
      <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
      <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>

      <script>

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
         
      </script>