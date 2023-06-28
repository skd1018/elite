<div class="bg-primary">
    <div class="container">
        <div class="row ">
            <div class="col-12 col-lg-6  text-center">
                <?php $image = get_sub_field('image_left');
                if (!empty($image)) : ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="col-12 my-auto text-white col-lg-6">
                <h2 class="display-5"><?php the_sub_field('heading_right'); ?></h2>
                <p><?php the_sub_field('content_right'); ?></p>
            </div>
        </div>
    </div>
</div>