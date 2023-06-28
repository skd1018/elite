<div class="row mt-5 mb-4 shadow bg-blue p-3 p-sm-5 rounded-3">
    <div class="col-12 col-sm-6  my-auto my-auto text-white ">
        <?php the_sub_field('ctacontent'); ?>
        <div class="text-center">
            <a href="/schedule-my-appointment/" class="btn btn-lg btn-cta mb-4 fw-bold text-grey">Appointments</a>
        </div>
    </div>
    <div class="col-12 my-auto col-sm-6 text-center">
    <?php $image = get_sub_field('image_cta');
        if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
    </div>
</div>