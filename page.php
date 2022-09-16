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

<main id="primary" class="site-main">
    <div class="">


        <div class="container-fluid mt-5">
            <div class="container p-3 p-sm-5 mb-3">
                <div class="row">
                    <div class="col-12 mb-1 text-black my-auto ">
                        <h1 class="display-2  "><?php the_title(); ?></h1>
						<?php the_content(); ?>
                   
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</main>

<?php

get_footer();
