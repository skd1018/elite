<?php

/**
 Template Name: Location
 */
get_header(); ?>

<main id="primary" class="site-main">
    <div class="">
        <div class="container-fluid mb-5 mt-5">
            <div class="container rounded  p-3 p-sm-5  mb-3">
                <div class="row">
                    <div class="col-lg-6 col-12 mb-1text-black my-auto ">
                        <h1 class="display-2  "><?php the_title(); ?></h1>
                        <p><?php the_field('content'); ?></p>
                        <a href="/schedule-an-appointment/" class="btn  btn-cta">SCHEDULE NOW</a>
                        <button class="btn btn-cta">888-888-8888</button>
                    </div>
                    <div class="col-lg-6 col-12 mt-3">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<?php get_footer(); ?>