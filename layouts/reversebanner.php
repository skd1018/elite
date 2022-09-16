<?php if (get_sub_field('bannerbackreversed')) : ?>
    <div style="background-image: url('<?php the_sub_field('bannerbackreversed'); ?>');">
        <div class="container py-3">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <?php
                    $image = get_sub_field('bannerimagereversed');
                    if (!empty($image)) : ?>
                        <img class="card-img-top" src=" <?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    </div>
                    <div class="col-12 my-auto col-lg-6">
                        <h2 class="display-3 fw-bold"><?php the_sub_field('bannerheadreversed'); ?></h2>
                        <p><?php the_sub_field('bannercontentreversed'); ?></p>
                        <a href="" class="btn btn-cta">Call To Action</a>
                    </div>
                </div>
            </div>
        </div>
    <?php else : ?>
        <div class="container py-3">
            <div class="row">
                <div class="col-12 my-auto col-lg-6">
                    <?php
                    $image = get_sub_field('bannerimagereversed');
                    if (!empty($image)) : ?>

                        <img class="card-img-top" src=" <?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <div class="col-12 col-lg-6">
                    <h2 class="display-3 fw-bold"><?php the_sub_field('bannerheadreversed'); ?></h2>
                    <p><?php the_sub_field('bannercontentreversed'); ?></p>
                    <a href="" class="btn btn-cta">Call To Action</a>

                </div>
            </div>
        </div>
    <?php endif ?>
    </div>
    </div>