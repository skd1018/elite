<?php if (get_sub_field('background_2')) : ?>
    <div style="background-image: url('<?php the_sub_field('background_2'); ?>');">
        <div class="container py-5">
                    <div class="row">
                        <div class="col-12 my-auto  fadeup col-lg-6 ">
                            <?php
                            $image = get_sub_field('image_left');
                            if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="col-12 pt-sm-0 pt-5 my-auto fadeups col-lg-6  ">
                            <h2 class="display-3 fw-bold text-cta"><?php the_sub_field('heading_right'); ?></h2>
                            <div><?php the_sub_field('content_right'); ?></div>
                            <div ><a href="/about-us/" class="btn btn-cta fw-bold text-primary"><?php the_sub_field('button_text') ?></a></div>
                        </div>
                    </div>
        </div>
    <?php else : ?>
        <div class="container-fluid  bg-grey">
            <div class="container pb-4">
                <div class="row  my-auto ">
                    <div class="col-12 my-auto  col-lg-6 my-auto order-2 order-lg-1">
                        <?php
                        $image = get_sub_field('image_left');
                        if (!empty($image)) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="col-12 my-auto col-lg-6  order-1 order-lg-2">
                        <div class="text-center text-sm-start">
                        <h2 class="display-3"><?php the_sub_field('heading_right'); ?></h2>
                        </div>
                        <p><?php the_sub_field('content_right'); ?></p>
                        <div class="text-center text-sm-start">
                        <a href="/about-us/" class="btn btn-lg border-3 mb-2 btn-outline-primary fw-bold "><?php the_sub_field('button_text') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    </div>