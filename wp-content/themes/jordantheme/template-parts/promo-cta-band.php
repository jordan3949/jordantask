
<?php $bg_image = get_sub_field('background')['sizes']['large']; ?>

<section class="block promo-cta-band" style="<?php if($bg_image){ echo "background-image:url(" .$bg_image. ")"; } ?>">
    <div class="row">
        <div class="grid-6 column">
            <h4 class="promo-title"><?php echo get_sub_field('title'); ?></h4>
        </div>
        <div class="grid-6 column">
            <a href="<?php echo get_sub_field('button_link')['url']; ?>" class="button primary outline inverted"><?php echo get_sub_field('button_link')['title']; ?></a>
        </div>
    </div>
</section>