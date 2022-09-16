<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ADMHouseTheme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header ">

		<div class="row mt-4">
			<div class="col-12 col-sm-4"><?php admhousetheme_post_thumbnail(); ?></div>

			<div class="col-12 col-sm-8">
				<div class="row"> <?php
									if (is_singular()) :
										the_title('<h1 class="entry-title">', '</h1>');
									else :
										the_title('<h2 class="display-5"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');

									endif;

									if ('post' === get_post_type()) :
									?>
						<div class="entry-meta">
							<?php
										admhousetheme_posted_on();
										admhousetheme_posted_by();
							?>
						</div>
				</div>
				<div class="row">
					<?php
										the_excerpt(
											sprintf(
												wp_kses(
													/* translators: %s: Name of current post. Only visible to screen readers */
													__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'admhousetheme'),
													array(
														'span' => array(
															'class' => array(),
														),
													)
												),
												wp_kses_post(get_the_title())
											)
										);

										wp_link_pages(
											array(
												'before' => '<div class="page-links">' . esc_html__('Pages:', 'admhousetheme'),
												'after'  => '</div>',
											)
										);
					?>
					<div class="col-sm-12">
					<?php echo '<a class="btn btn-cta" href="' . esc_url(get_permalink()) . '" rel="bookmark">Read More</a>'?>
				</div>

			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->




	<footer class="entry-footer">
		<?php admhousetheme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->