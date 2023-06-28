<?php

/**
 Template Name: Tires
 */
get_header(); ?>


<div class="pt-5 " style="background-image: url('/wp-content/uploads/2022/12/Black-Steel-Texture-Background-2880w.webp');">
    <div class="container text-center">
        <div class="mt-3 row">
            <h1 class="fw-bold display-5 pt-5 pb-5 text-white"><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="custom-shape-divider-top-1664857565">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" style="transform: rotate(180deg); height: 80px; width:100%;" fill="#E6E7E8" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M1200 0L0 0 598.97 114.72 1200 0z" class="shape-fill"></path>
        </svg>
        </svg>
    </div>
</div>
<div class="container-fluid bg-grey">
    <div class="container">
        <script src="https://app.tireconnect.ca/js/widget.js"></script>
        <div id="tireconnect"></div>
        <script>
            TCWidget.init({
                apikey: '1f3c69cd004a4c080f9b3a2bc8dbcdb3',
                container: 'tireconnect'
            });
        </script>
    </div>
</div>


<?php the_field('right_body'); ?>




<?php get_footer(); ?>