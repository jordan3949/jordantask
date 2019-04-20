
<?php $bg_image = get_sub_field('background_image')['sizes']['large']; ?>

<div class="testimonials-wrap">
         <section class="block testimonials" style="<?php if($bg_image){ echo "background-image:url(" .$bg_image. ")"; } ?>">
            <div class="row">
               <div class="grid-12 column">
                  <h2><?php echo the_sub_field('block_title'); ?></h2>
               </div>
               <div class="grid-12 column">
                  <div class="owl-carousel owl-theme testimonial">
                  <?php 

                    $posts = get_sub_field('testimonials_select');

                    if( $posts ): ?>
                        <?php foreach( $posts as $post): ?>
                            <?php setup_postdata($post); ?>

                            <div class="testimonial-item">
                                <h3><?php echo the_title(); ?></h3>
                                 <?php the_content(); ?>
                            </div>

                        <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php endif; ?>        

                  </div>
               </div>
            </div>
         </section>
      </div>



