<?php 
/**
 Template Name: Cart
 */
get_header();?>
<div class="pt-5 " style="background-image: url('/wp-content/uploads/2023/06/elite-background-1.webp');">
    <div class="container">
        <div class="mt-3 row">
            <h1 class="fw-bold display-5 pt-5 pb-5 text-white"><?php the_title(); ?></h1>
        </div>
    </div>
   
</div>
<div class="container pt-5">
    <div class="row">
        <?php the_content();?>
    </div>
</div>

<?php get_footer();?>