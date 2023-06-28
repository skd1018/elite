<div class="py-5 container-fluid">
    <div class="container">
        <div class="row row-cols-2 row-cols-lg-4">
            <div class="col">
                <?php if (get_sub_field('badge_1')) : ?>
                    <img src="<?php the_sub_field('badge_1'); ?>" />
                <?php endif; ?>
            </div>
            <div class="col">
                <?php if (get_sub_field('badge_2')) : ?>
                    <img src="<?php the_sub_field('badge_2'); ?>" />
                <?php endif; ?>
            </div>
            <div class="col">
                <?php if (get_sub_field('badge_3')) : ?>
                    <img src="<?php the_sub_field('badge_3'); ?>" />
                <?php endif; ?>
            </div>
            <div class="col">
                <?php if (get_sub_field('badge_4')) : ?>
                    <img src="<?php the_sub_field('badge_4'); ?>" />
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>