<?php

/**
 Template Name: Login
 */

get_header(); ?>
<div class="pt-5 " style="background-image: url('/wp-content/uploads/2023/06/elite-background-1.webp');">
    <div class="container text-center">
        <div class="mt-3 row">
            <h1 class="fw-bold display-5 pt-5 pb-5 text-white"><?php the_title(); ?></h1>
        </div>
    </div>

</div>
<div class="bg-grey">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-sm-6 ">
                <?php the_content(); ?>
            </div>

            <div class="col-12 col-sm-6 my-auto">
                <h2 class="display-3 text-primary"><?php the_field('loginheader') ?></h2>
                <?php the_field('logincontent') ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>