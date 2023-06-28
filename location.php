<?php

/**
 Template Name: Location
 */
get_header(); ?>

<?php if (get_field('hero_image')) : ?>
    <div class="pt-5 " style="background-image: url('<?php the_field('hero_image'); ?>'); background-size: 100%">
        <div class="container text-center">
            <div class="mt-3 row">
                <h1 class="fw-bold display-5 pt-5 pb-5 text-white"><?php the_title(); ?></h1>
            </div>
        </div>
    <?php endif ?>
  
    </div>
    <div class="container-fluid bg-grey ">
        <div class="container rounded  p-3 p-sm-5">

            <div class="row">
                <div class="fade col-lg-6 col-12 mb-4 text-white">
                    <h2 class="text-cta headfw-bold"><?php the_field('left_header'); ?></h2>
                    <span class="text-primary"><?php the_field('form'); ?></span>
                    <a href="/appointment/" class="btn btn-lg  text-white fw-bold btn-cta">SCHEDULE NOW</a>
                    <?php
                    $link = get_field('number');
                    if ($link) : ?>
                        <a href="<?php echo esc_url($link); ?>" class="btn btn-lg text-white fw-bold btn-secondary"><?php the_field('phone_number'); ?></a>
                        <?php endif ?>
                </div>
                <div class="col-lg-6 col-12">

                    <?php
                    $image = get_field('leftimage');
                    if (!empty($image)) : ?>
                        <img class=" fade shadow-lg" src=" <?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php the_field('right_body'); ?>
    <?php get_footer(); ?>