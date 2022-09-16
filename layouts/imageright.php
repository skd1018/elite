<?php if (get_sub_field('background_1')) : ?>
    <div style="background-image: url('<?php the_sub_field('background_1'); ?>');">

        <div class="container">
            <div class="bodybox mt-4 rounded">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h2 class="display-2"><?php the_sub_field('heading_left'); ?></h2>
                        <p><?php the_sub_field('content_left'); ?></p>
                    </div>
                    <div class="col-12 col-lg-6">

                        <?php
                        $image = get_sub_field('image_right');
                        if (!empty($image)) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        <?php endif ?>
        </div>
    </div>