<?php

/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ADMHouseTheme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row py-3">
		<div class="col-12 col-sm-4">
			<?php admhousetheme_post_thumbnail(); ?>


		</div>
		<div class="col-12 col-sm-6 my-auto">
		
			<header class="entry-header">
				<?php the_title(sprintf('<h2 ><a href="%s" rel="bookmark" class="bloghead">', esc_url(get_permalink())), '</a></h2>'); ?>

				<?php if ('post' === get_post_type()) : ?>
					<div class="entry-meta">
						<?php
						admhousetheme_posted_on();
						admhousetheme_posted_by();
						?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->


			<footer class="entry-footer">
				<?php admhousetheme_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->