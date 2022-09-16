<?php
/*
*Template Name: Blog Post 
*Template Post Type: post
*/

 get_header();



?>

	<main id="primary" class="site-main">
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
<div class="container">
<div class="row">
	<div class="col-12 mt-5 ">
			<?php the_content();?>
	</div>
</div>
</div>
	</main><!-- #main -->

<?php

get_footer();