<?php if (get_sub_field('background_2')) : ?>
    <div style="background-image: url('<?php the_sub_field('background_2'); ?>');">
        <div class="container-fluid">
            <div class="container py-3">
                <div class="bodybox">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <?php
                            $image = get_sub_field('image_left');
                            if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="col-12 my-auto col-lg-6">
                            <h2 class="display-3"><?php the_sub_field('heading_right'); ?></h2>
                            <p><?php the_sub_field('content_right'); ?></p>
                            <a href="" class="btn btn-cta">Call To Action</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php else : ?>
        <div class="container-fluid">
            <div class="container ">
                <div class="bodybox mt-n3">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <?php
                            $image = get_sub_field('image_left');
                            if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="col-12 my-auto col-lg-6">
                            <h2 class="display-3"><?php the_sub_field('heading_right'); ?></h2>
                            <p><?php the_sub_field('content_right'); ?></p>
                            <a href="" class="btn btn-cta">Call To Action</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    </div>