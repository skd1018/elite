
<div class="container">
    <div class="row mt-5 pb-5">
        <div class="col-12 my-auto  col-xl-6">
            <h2 class="display-5 text-blue"><?php the_sub_field('heading_left'); ?></h2>
            <p><?php the_sub_field('content_left'); ?></p>
<div class="text-center">
            <a href="/appointment/" class="btn mb-5 mb-sm-1 btn-lg btn-cta fw-bold text-grey">REQUEST APPOINTMENT</a>
</div>
        </div>
        <div class="col-12 d-flex justify-content-center mx-auto col-xl-6">
            <?php $image = get_sub_field('image_right');
            if (!empty($image)) : ?>
                <img class="shadowbox" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>

        </div>
    </div>
</div>