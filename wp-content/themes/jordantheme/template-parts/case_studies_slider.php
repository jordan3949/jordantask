<section class="block block-grey">
         <div class="row">
            <div class="grid-12 column">
                <?php if(get_sub_field('block_title')) : ?>
                    <h2><?php echo the_sub_field('block_title'); ?></h2>
                <?php endif; ?>   
            </div>
            <div class="grid-12 column">
                 <div class="owl-carousel owl-theme latestnews">

                 <?php 

                $posts = get_sub_field('case_studies_select');

                if( $posts ): ?>
                    <?php foreach( $posts as $post): ?>
                        <?php setup_postdata($post); ?>

                        <div class="latest-news-item">
                                <div class="news-left">
                                    <?php $bg_image = get_field('case_study_image')['sizes']['large']; ?>
                                    <div class="main-story" style="<?php if($bg_image){ echo "background-image:url(" .$bg_image. ")"; } ?>">
                                    </div>
                                </div>
                                <div class="news-right">
                                    <div class="top-tile-right">
                                        <h3><?php echo get_field('cs_preview_box_1')['heading']; ?></h3>
                                        <?php echo get_field('cs_preview_box_1')['content']; ?>
                                    </div>
                                    <div class="bottom-tile-left">
                                        <span class="large-heading"><?php echo get_field('cs_preview_box_2')['heading']; ?></span>
                                        <?php echo get_field('cs_preview_box_2')['content']; ?>
                                    </div>
                                    <div class="bottom-tile-right">
                                        <span class="large-heading"><?php echo get_field('cs_preview_box_3')['heading']; ?></span>
                                        <?php echo get_field('cs_preview_box_3')['content']; ?>
                                    </div>
                                </div>
                           </div>

                           <?php endforeach; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php endif; ?>

                 </div>
            </div>
         </div>
         <?php if(get_sub_field('block_call_to_action')) : ?>
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