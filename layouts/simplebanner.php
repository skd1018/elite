<?php if (get_sub_field('bannerback')) : ?>
    <div style="background-image: url('<?php the_sub_field('bannerback'); ?>');">
        
        <div class="container py-5">

            <div class="row">
                <div class="col-12 my-auto col-lg-6">
                
                    <h2 class="display-3"><?php the_sub_field('bannerhead'); ?></h2>
              
                    <p><?php the_sub_field('bannercontent'); ?></p>
                    
                    <a href="/about-us/" class="btn btn-lg mb-4 border-3 fw-bold btn-cta shadow">ABOUT US</a>
                
                </div>
                <div class="col-12 text-center my-auto col-lg-6">
                    <?php
                    $image = get_sub_field('bannerimage');
                    if (!empty($image)) : ?>
                        <img  class="shadow-lg" src=" <?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php else : ?>
        
        <div class="container py-3">
            <div class="row">
                <div class=" col-12 my-auto col-lg-6">
                    <h2 class="display-3 fw-bold"><?php the_sub_field('bannerhead'); ?></h2>
                    <p><?php the_sub_field('bannercontent'); ?></p>
                    <a href="" class="btn btn-lg mb-4 btn-outline-primary border-3 fw-bold btn-blue shadow">About Us</a>
                </div>
                <div class="col-12 my-auto col-lg-6">
                    <?php
                    $image = get_sub_field('bannerimage');
                    if (!empty($image)) : ?>
                        <img class="imageshadow" src=" <?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
        
    <?php endif ?>

    </div>
    </div>