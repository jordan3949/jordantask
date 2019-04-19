<section class="block">
    <div class="row">
        <?php if(get_sub_field('block_heading')) : ?>
            <div class="grid-12 column">
                <h2><?php echo the_sub_field('block_heading'); ?></h2>
            </div>
        <?php endif; ?>
        <div class="grid-6 column no-padding-mob image">
            <?php if(get_sub_field('main_image')) : ?>
                <img alt="<?php echo strip_tags(get_sub_field('title')); ?>" src="<?php echo get_sub_field('main_image')['sizes']['large']; ?>">
                <?php if(get_sub_field('small_image')) : ?>
                    <div class="overlay-image <?php echo get_sub_field('small_overlay_image_position'); ?>">
                        <img alt="Find your vision" src="<?php echo get_sub_field('small_image')['sizes']['medium']; ?>">
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        <div class="grid-6 column">
            <div class="padded-textbox">
                <?php if(get_sub_field('subheading')) : ?>
                    <p class="content-small-heading"><?php echo the_sub_field('subheading'); ?></p>
                <?php endif; ?>    
                <?php if(get_sub_field('title')) : ?>
                    <h3><?php echo the_sub_field('title'); ?></h3>
                <?php endif; ?>  
                <?php echo the_sub_field('content'); ?>
            </div>
        </div>
    </div>
    <?php if(get_sub_field('block_cta')['title']) : ?>
        <div class="spacer large"></div>
            <div class="row">
                <div class="grid-12 column">
                    <div class="cta-band-wrap">
                        <a href="<?php echo get_sub_field('block_cta')['url']; ?>" class="button primary outline">
                            <?php echo get_sub_field('block_cta')['title']; ?>
                        </a>
                </div>
            </div>
        </div>
    <?php endif; ?>
</section>