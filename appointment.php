<?php

/**
 Template Name: Appointment
 */
get_header(); ?>


<div class="pt-5 " style="background-image: url('/wp-content/uploads/2023/06/elite-background-1.webp');">
    <div class="container text-center">
        <div class="mt-3 row">
            <h1 class="fw-bold display-5 pt-5 pb-5 text-white"><?php the_title(); ?></h1>
        </div>
    </div>
   
</div>
<div class="container-fluid bg-grey">
    <div class="container">
        <script src="https://app.tireconnect.ca/js/widget.js"></script>
        <div id="tireconnect"></div>
        <script>
            TCWidget.initServices({
                apikey: '1f3c69cd004a4c080f9b3a2bc8dbcdb3',
                container: 'tireconnect',
                locationSelector: 'auto'
            });
        </script>

    </div>
</div>


<?php the_field('right_body'); ?>




<?php get_footer(); ?>