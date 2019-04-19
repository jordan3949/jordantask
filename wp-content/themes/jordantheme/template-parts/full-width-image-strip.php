
<?php $bg_image = get_sub_field('image')[sizes][large]; ?>

<section class="block quote-slice" style="<?php if($bg_image){ echo "background-image:url(" .$bg_image. ")"; } ?>">
    <div class="row">
        <div class="grid-12 column">
            <?php if(get_sub_field('small_text')) : ?>
                <p class="small-quote"><?php echo get_sub_field('small_text'); ?></p>
            <?php endif; ?>
            <?php if(get_sub_field('large_text')) : ?>
                <p class="large-quote"><?php echo get_sub_field('large_text'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>