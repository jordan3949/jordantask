<section class="block">
         <div class="row">
            <div class="grid-12 column">
               <h2><?php echo get_sub_field('block_title'); ?></h2>
            </div>

            <?php 

                $postnumber=0;

                $args = array(
                    'post_type'=> 'post'
                    );              

                    $the_query = new WP_Query( $args );
                    if($the_query->have_posts()) :
                        while ( $the_query->have_posts() ) :
                            $the_query->the_post();
                            $postnumber++; 
                            ?>
                            
                            <div class="grid-4 column">
                                <div class="journal-item postcount-<?php echo $postnumber; ?>">
                                    <h3><?php echo the_title(); ?></h3>
                                    <span class="date"><?php echo get_the_date('jS M Y'); ?></span>
                                </div>
                            </div>

                            <?php
                        endwhile;
                    endif;    
                    wp_reset_postdata();    
                ?>

         </div>
         <?php if(get_sub_field('block_call_to_action')['title']) : ?>
            <div class="spacer"></div>
            <div class="row">
                <div class="grid-12 column">
                <div class="cta-band-wrap">
                    <a href="<?php echo get_sub_field('block_call_to_action')['url']; ?>" class="button primary outline">
                        <?php echo get_sub_field('block_call_to_action')['title']; ?>
                    </a>
                </div>
                </div>
            </div>
        <?php endif; ?>
      </section>





