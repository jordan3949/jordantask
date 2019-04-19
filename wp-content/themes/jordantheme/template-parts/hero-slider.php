<!-- Top Hero Section-->

<?php $bg_image = get_sub_field('background_image')[sizes][large]; ?>

<section class="hero" style="<?php if($bg_image){ echo "background-image:url(" .$bg_image. ")"; } ?>">
    <div class="row">
        <div class="column">
            <div class="hero-content-wrap">
                <div class="hero-content">

                    <?php if(get_sub_field('title')) : ?>
                        <h1><?php echo the_sub_field('title'); ?></h1>
                    <?php endif; ?>

                     <?php if(get_sub_field('content')) : ?>
                        <div class="hero-subtitle">
                            <?php echo the_sub_field('content'); ?>
                        </div>    
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>
