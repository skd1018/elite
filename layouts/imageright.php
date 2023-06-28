<?php if (get_sub_field('background_1')) : ?>
    <div style="background-image: url('<?php the_sub_field('background_1'); ?>');">
        <div class="container py-5">
            <div class="py-3">
                <div class="row ">
                    <div class="col-12 pt-5   col-lg-6 fadeups m-auto">
                        <h2 class=" text-md-start text-cta display-4 fw-bold"><?php the_sub_field('heading_left'); ?></h2>
                        <?php the_sub_field('content_left'); ?>
                        <div class=" mb-4 text-md-start">
                            <a href="/schedule-my-appointment/" class="btn btn-outline-cta border-3 fw-bold">Get In Touch</a>
                        </div>
                    </div>
                    <div class="col-12 fadeup my-auto col-lg-6 d-flex justify-content-center order-first order-sm-last">

                        <?php
                        $image = get_sub_field('image_right');
                        if (!empty($image)) : ?>
                            <img class="shadowbox" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php else : ?>
    </div>

    <div class="container bg-white ">

        <div class="row mx-auto ">
            <div class="col-12 my-auto col-lg-6">
                <h2 class="display-4  text-center text-sm-start"><?php the_sub_field('heading_left'); ?></h2>
                <p><?php the_sub_field('content_left'); ?></p>
                <div class="">
                   
                    <a href="" class="mt-2 w-bold  btn btn-lg btn-outline-cta fw-bold shadow-sm border-3">Learn More</a>
                </div>
            </div>
            <div class="col-12 my-auto pt-3 col-lg-6">

                <?php
                $image = get_sub_field('image_right');
                if (!empty($image)) : ?>
                    <img class="shadowbox" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
        </div>

    </div>

<?php endif ?>
