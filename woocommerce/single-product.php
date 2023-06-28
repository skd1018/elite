<?php

/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */


if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

get_header('shop'); ?>
<div class="py-5 " style="background-image: url('/wp-content/uploads/2023/06/elite-background-1.webp');">
			<div class="container ">
				<div class="mt-3 row">
					<h1 class="fw-bold display-5 pt-5 pb-5 text-white"><?php single_post_title(); ?></h1>
				</div>
			</div>
		
		</div>
    <div class="container pt-5">
        <div class="row">
            <?php

            do_action('woocommerce_before_main_content');
            ?>

            <?php while (have_posts()) : ?>
                <?php the_post(); ?>

                <?php wc_get_template_part('content', 'single-product'); ?>

            <?php endwhile; // end of the loop. 
            ?>

            <?php
            /**
             * woocommerce_after_main_content hook.
             *
             * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
             */
            do_action('woocommerce_after_main_content');
            ?>
        </div>
    </div>

<?php
get_footer('shop');

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */