<footer class="block site-footer">
         <div class="row">
            <div class="grid-3 large-grid-2 column">
            <?php if(get_field('footer-logo', 'option')) : ?>
               <img alt="Company footer logo" class="footer-logo" src="<?php the_field('footer-logo', 'option'); ?>">
            <?php endif; ?>
            </div>
            <div class="grid-4 large-grid-6 column">

            <?php
            if( have_rows('contact_details','option') ):
                ?>
                <?php
                    while ( have_rows('contact_details', 'option') ) : the_row();
                        ?>
                        <ul>
                            <li class="title"><?php echo the_sub_field('title', 'option'); ?>&nbsp;</li>
                            <li class="name"><?php echo the_sub_field('name', 'option'); ?></li>
                            <li><span>t:</span> <a href="tel:<?php echo the_sub_field('telephone_number', 'option'); ?>"><?php echo the_sub_field('telephone_number', 'option'); ?></a></li>
                            <li><span>e:</span> <a href="@mailto:<?php echo the_sub_field('email_address', 'option'); ?>"><?php echo the_sub_field('email_address', 'option'); ?></a></li>
                        </ul>
                        <?php
                    endwhile;
            endif;
            ?>
            </div>
            <div class="grid-5 large-grid-4 column">
                <div class="newsletter-wrap">
                    <form class="newsletter">
                        <input type="text" placeholder="Email" >
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
               <ul class="social-links">
               <?php
                  if( have_rows('social_icons','option') ):
                    while ( have_rows('social_icons', 'option') ) : the_row();
                        ?>
                         <li><img src="<?php echo the_sub_field('icon'); ?>"></li>
                <?php
                    endwhile;
                endif;
                ?> 
               </ul>
            </div>
         </div>
         <div class="row">
            <div class="grid-12 column">
               <p class="copyright">
                    <?php echo the_field('copyright', 'option'); ?>
               </p>
            </div>
         </div>
      </footer>


      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
