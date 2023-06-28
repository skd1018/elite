<?php

/**
Template Name: Services
 */
get_header(); ?>

<?php if (get_field('header')) : ?>
    <div class="bg-grey ">
        <div class="pt-5 " style="background-image: url('<?php the_field('header'); ?>');">
            <div class="container ">
                <div class="mt-3 row">
                    <h1 class="fw-bold display-5 py-5 text-white"><?php the_title(); ?></h1>
                </div>
            </div>
           
        </div>
    <?php endif; ?>
    <div class="container">
        <div class="row ">
            <h2 class="display-5  text-cta fw-bold mt-4 pb-2 "><?php the_field('service_header'); ?></h2>
            <div class="col-12 col-sm-6 d-flex justify-content-center">

                <p><?php the_field('service_body'); ?></p>
            </div>
            <div class="col-12 col-sm-6 text-center">
                <a href="https://appointment.protractor.com/1.0/Appointment/86215674547a4733b6e8e5e07001461e-9806d244bdb049feab83296c0f4594ed/Create" class="btn fw-bold btn-lg btn-secondary">SCHEDULE APPOINTMENT</a>
            </div>
        </div>
        <div class="row text-center mb-3">
            <h2 class="display-5 fw-bold pb-2 text-blue"><?php the_field('service_header_2'); ?></h2>
        </div>
        <div class=" row d-flex justify-content-center row-cols-2 row-cols-lg-4 ">

            <?php if (have_rows('content_tiles')) : ?>
                <?php while (have_rows('content_tiles')) : the_row(); ?>
                    <div class="col  d-flex pb-4 justify-content-center">
                        <div style="max-width: 18rem;" class=" card h-100 rounded-3  shadow-lg ">
                            <?php
                            $image = get_sub_field('icon');
                            if (!empty($image)) : ?>
                                <img class=" rounded-3  card-img-top" src=" <?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            <div class="card-body text-center">
                                <?php
                                $link = get_sub_field('link');
                                if ($link) : ?>
                                    <a href="<?php echo esc_url($link); ?>" style="text-decoration:none;" class="stretched-link fs-6 fw-bold"><?php the_sub_field('label'); ?></a>
                                <?php else : ?>
                                    <p style="text-decoration:none;" class="stretched-link fs-6 fw-bold"><?php the_sub_field('label'); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="row mt-4 text-center">
            <h2 class="display-5 text-blue fw-bold"><?php the_field('col_header_1'); ?></h2>
        </div>
        <div class="row mt-4">
            <div class="col-3">
                <?php the_field('col_1'); ?>
            </div>
            <div class="col-3">
                <?php the_field('col_2'); ?>
            </div>
            <div class="col-3">
                <?php the_field('col_3'); ?>
            </div>
            <div class="col-3">
                <?php the_field('col_4'); ?>
            </div>
        </div>
        <div class="row">
            <div class="row mt-4 text-center">
                <h2 class="display-5 text-blue fw-bold"><?php the_field('col_header_2'); ?></h2>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-3">
                <?php the_field('col_5'); ?>
            </div>
            <div class="col-3">
                <?php the_field('col_6'); ?>
            </div>
            <div class="col-3">
                <?php the_field('col_7'); ?>
            </div>
            <div class="col-3">
                <?php the_field('col_8'); ?>
            </div>
        </div>
        <div class=" row d-flex justify-content-center row-cols-2 row-cols-lg-6 ">
            <?php if (have_rows('brand_tiles')) : ?>
                <?php while (have_rows('brand_tiles')) : the_row(); ?>
                    <div class="col  d-flex pb-4 justify-content-center">
                        <div>
                            <?php
                            $image = get_sub_field('image');
                            if (!empty($image)) : ?>
                                <img class="card-img-top" src=" <?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>

                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

    </div>
    <?php get_template_part('template-parts/locationstemp'); ?>
    <?php get_footer(); ?>