<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ADMHouseTheme
 */
get_header();
?>

<?php if (get_field('background')) : ?>

    <div class=" bg-grey">
        <div class="pt-lg-5 " style="background-image: url('<?php the_field('background'); ?>');  background-repeat: no-repeat; height: 100%; width: 100%; background-size: 100% auto;">
            <div class="container ">
                <div class=" row">
                    <h1 class="fw-bold display-5 pt-lg-5 pb-lg-5 text-white mp"><?php the_title(); ?></h1>
                </div>
            </div>
            <div class="d-none d-lg-block custom-shape-divider-bottom-1673907041" style="transform: rotate(180deg);">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" fill="#F6F6F6" viewBox="0 0 1200 90" preserveAspectRatio="none">
                    <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
                </svg>
            </div>

        </div>


        <?php
        while (the_flexible_field('page_builder')) {
            get_template_part('page-layouts/' . get_row_layout());
        }
        ?>

    <?php endif ?>


    </div>
    <?php get_template_part('template-parts/locationstemp'); ?>
    <?php

    get_footer();
    ?>