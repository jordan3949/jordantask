<?php

if( have_rows('flexible_content') ):
    while ( have_rows('flexible_content') ) : the_row();

        if ( get_row_layout() == 'hero_slider' ):      
                include(locate_template('template-parts/hero-slider.php'));
        elseif ( get_row_layout() == 'home_content_block' ):      
                include(locate_template('template-parts/home-content-block.php'));
        elseif ( get_row_layout() == 'full_width_image_strip' ):      
                include(locate_template('template-parts/full-width-image-strip.php'));
        elseif ( get_row_layout() == 'case_studies_slider' ):      
                include(locate_template('template-parts/case_studies_slider.php'));
        elseif ( get_row_layout() == 'testimonials_slider' ):   
                include(locate_template('template-parts/testimonials_slider.php'));
        elseif ( get_row_layout() == 'latest_posts' ):   
                include(locate_template('template-parts/latest-posts.php'));
        elseif ( get_row_layout() == 'promo_cta_band' ): 
                include(locate_template('template-parts/promo-cta-band.php'));
        endif;
        
    endwhile;

else :

endif;

?>