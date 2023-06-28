<?php

/**
 Template Name: All Locations 
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
    <div class="container rounded  p-3 p-sm-5">

        <div class="row my-4">
            <div class="col-12 my-auto col-sm-6 ">
                <img src="/wp-content/uploads/2022/12/whitehouse.webp">
            </div>
            <div class="col-12 m-auto col-sm-6 gap-2 vstack">
            <h2 class="text-primary fw-bold">B&L Whitehouse</h2>
            <a href="/appointment/" class="btn btn-lg btn-secondary">REQUESTION APPOINTMENT</a>
            <a href="https://www.google.com/maps/dir//B+%26+L+Auto+Service,+Logan+Street,+Whitehouse,+OH/@41.5200037,-83.8369963,13z/data=!4m9!4m8!1m0!1m5!1m1!1s0x883c6e7c33b9cb69:0x7fe0cd9f3dc4896f!2m2!1d-83.8019769!2d41.520009!3e0" target="_blank" class="btn btn-lg border-3 fw-bold btn-outline-secondary">GET DIRECTIONS</a>
            <a href="tel:(419)877-5530" class="btn btn-lg btn-secondary">419.877.5330</a>
            <a href="/contact-us/" class="btn btn-lg border-3 fw-bold btn-outline-secondary">CONTACT US</a>
           
            </div>
        </div>
        <div class="row my-4">
        <div class="col-12 my-auto col-sm-6">
                <img src="/wp-content/uploads/2022/12/heathersdown.webp">
            </div>
            <div class="col-12 m-auto col-sm-6  gap-2 vstack">
                
            <h2 class="text-primary fw-bold">Heatherdowns BLVD</h2>
            <a href="/appointment/" class="btn btn-lg btn-secondary">REQUESTION APPOINTMENT</a>
            <a href="https://www.google.com/maps/dir//Toledo+Auto+Care,+Heatherdowns+Boulevard,+Toledo,+OH/@41.5943408,-83.7032315,13z/data=!4m9!4m8!1m0!1m5!1m1!1s0x883c79fb1ebd61ef:0x270d391b6b44234a!2m2!1d-83.6682121!2d41.5943461!3e0" target="_blank" class="btn btn-lg border-3 fw-bold btn-outline-secondary">GET DIRECTIONS</a>
            <a href="tel:(419)865-5584" class="btn btn-lg btn-secondary">419.865.5584</a>
            <a href="/contact-us/" class="btn btn-lg border-3 fw-bold btn-outline-secondary">CONTACT US</a>
            <a></a>
               
            </div>
           
        </div>
        <div class="row my-4">
            <div class="col-12  my-auto col-sm-6">
                <img src="/wp-content/uploads/2022/12/monroe.webp">    
            </div>
            <div class="col-12 m-auto col-sm-6 gap-2 vstack">
            <h2 class="text-primary fw-bold">Monroe St</h2>
            <a href="/appointment/" class="btn btn-lg btn-secondary">REQUESTION APPOINTMENT</a>
            <a href="https://www.google.com/maps/dir//Toledo+Auto+Care,+4544+Monroe+St,+Toledo,+OH+43613/@41.6890596,-83.6231053,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x883c7f11252813e1:0xf49443ab83b00455!2m2!1d-83.6209166!2d41.6890596!3e0" target="_blank" class="btn btn-lg border-3 fw-bold btn-outline-secondary">GET DIRECTIONS</a>
            <a href="tel:(419)479-7350"class="btn btn-lg btn-secondary">419.479.7350</a>
            <a href="/contact-us/" class="btn btn-lg border-3 fw-bold btn-outline-secondary">CONTACT US</a>
            </div>
        </div>
    </div>
</div>


<?php the_field('right_body'); ?>




<?php get_footer(); ?>