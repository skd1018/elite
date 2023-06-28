<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ADMHouseTheme
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="pt-5 " style="background-image: url('/wp-content/uploads/2023/06/elite-background-1.webp');">
		<div class="container">
			<div class="mt-3 text-center text-white row">
				<h1 class="page-title py-5">
					<?php
					/* translators: %s: search query. */
					printf(esc_html__('Search Results for: %s', 'admhousetheme'), '<span>' . get_search_query() . '</span>');
					?>
				</h1>
			</div>
		</div>
	</div>

	<?php if (have_posts()) : ?>
		<div class="container">
		<?php
		/* Start the Loop */
		while (have_posts()) :
			the_post();
			get_template_part('template-parts/content', 'search');
		endwhile;
		the_posts_navigation();
	else :
		get_template_part('template-parts/content', 'none');
	endif;
		?>
		</div>
</main><!-- #main -->
<?php

get_footer();
