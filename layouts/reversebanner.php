<?php if (get_sub_field('bannerbackreversed')) : ?>
    <div style="background-image: url('<?php the_sub_field('bannerbackreversed'); ?>');">

        <div class="container py-3">
            <div class="row">
                <div class="col-12 mx-auto col-lg-6">
                    <?php
                    $image = get_sub_field('bannerimagereversed');
                    if (!empty($image)) : ?>
                        <img class="from-left" src=" <?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <div class="col-12 my-auto col-lg-6">
                    <h2 class="display-3 text-blue fw-bold"><?php the_sub_field('bannerheadreversed'); ?></h2>
                    <p><?php the_sub_field('bannercontentreversed'); ?></p>
                    <a href="" class="btn btn-lg btn-cta">Call To Action</a>
                </div>
            </div>
        </div>
    </div>
<?php else : ?>

    <div>


        <div class="bg-grey">
            <div class="container py-3">
                <div class="row">
                    <div class="col-12 pb-5 my-auto mx-auto col-lg-6">
                        <?php
                        $image = get_sub_field('bannerimagereversed');
                        if (!empty($image)) : ?>

                            <img class="from-left" src=" <?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="col-12 my-auto  col-lg-6">
                        <div class="text-center">
                            <h2 class="display-3 fw-bold text-blue"><?php the_sub_field('bannerheadreversed'); ?></h2>
                        </div>
                        <p><?php the_sub_field('bannercontentreversed'); ?></p>
                        <div class="text-center pb-4">
                            <a href="/about-us/" class="btn btn-lg btn-blue shadow text-white fw-bold shadow">Call To Action</a>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-6 col-md-3">
                        <?php
                        $image = get_sub_field('icon_1');
                        if (!empty($image)) : ?>

                            <img src=" <?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                        <p class="text-blue"><?php the_sub_field('icon_label_1'); ?></p>
                    </div>
                    <div class="col-6 col-md-3">
                        <?php
                        $image = get_sub_field('icon_2');
                        if (!empty($image)) : ?>

                            <img src=" <?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                        <p class="text-blue"><?php the_sub_field('icon_label_2'); ?></p>
                    </div>

                    <div class="col-6 col-md-3">
                        <?php
                        $image = get_sub_field('icon_3');
                        if (!empty($image)) : ?>

                            <img src=" <?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                        <p class="text-blue"><?php the_sub_field('icon_label_3'); ?></p>
                    </div>

                    <div class="col-6 col-md-3">
                        <?php
                        $image = get_sub_field('icon_4');
                        if (!empty($image)) : ?>

                            <img src=" <?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                        <p class="text-blue"><?php the_sub_field('icon_label_4'); ?></p>
                    </div>

                </div>
            </div>
        <?php endif ?>

        </div>
    </div>