<?php

/**
 Template Name: Standard Template
 */
get_header(); ?>
<?php if (get_field('hero_image')) : ?>
    <div class="pb-5 site-margin" style="background-image: url('<?php the_field('hero_image'); ?>');">
        <div class="container-fluid  pb-5">
            <div class="container">
                <div class="row ">
                    <div class="col-12">
                        <h1 class="display-2 text-white mt-5 "><?php the_title(); ?></h1>
                      
                    </div>
                </div>
            </div>
        </div>
        </div>
    <?php endif; ?>
    <main id="primary" class="site-main">
            <div class="container-fluid mt-4">
                <div class="container rounded  p-3 p-sm-5  mb-3">
                    <div class="row">
                        <div class="col-lg-6 col-12 mb-1text-black my-auto ">

                            <h2 class="font-weight-bold display-5 text-secondary "> <?php the_field('header_1'); ?> </h2>
                            <p><?php the_field('content'); ?></p>
                            
                        </div>
                        <div class="col-lg-6 col-12 mt-3">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <?php get_footer(); ?>