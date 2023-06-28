<div class="hideoverflow mt-n4">
    <div class="row g-0  ">
        <div class="col-12 my-auto col-sm-6">
            <?php if (get_sub_field('imagewide')) : ?>
                <img class="position-relative" src="<?php the_sub_field('imagewide'); ?>" />
            <?php endif; ?>
        </div>
        <div class="col-12 col-sm-6 my-auto ">
            <div class="row  bg-secondary py-4">
                <div class="col-12 col-sm-2">
            </div>
            <div class="col-12 text-center text-sm-start col-sm-10">
                <h2 class="display-2 fw-bold text-cta"><?php the_sub_field('resource_header');?></h2>
                <?php the_sub_field('resource_body');?>

                <a href="" class="btn btn-outline-cta">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>