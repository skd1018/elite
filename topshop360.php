<?php

/**
 Template Name: Top Shop Profile
 */

get_header() ?>

<div class="pt-5 " style="background-image: url('/wp-content/uploads/2023/06/elite-background-1.webp');">
    <div class="container">
        <div class="mt-3 text-center row">
            <h1 class="fw-bold display-5 pt-5 pb-5 text-white"><?php the_title(); ?></h1>
        </div>
    </div>
    <div class=" bg-white">
        <div class="container pb-5">
            <div class="row">
                <div class="col-12 col-sm-4">
                    <div class="card  rounded-0 text-center pb-4 shadow-sm mt-n5" style="max-width: 22rem; "height: auto;"">
                        <div class=" mx-auto">
                            <img class="profpic" src="https://picsum.photos/200/300">
                        </div>
                        <div class="card-body ">
                            <div class="py-auto">
                                <h5 class="fw-bold   card-title">
                                    <?php global $current_user;
                                    wp_get_current_user(); ?>
                                    <?php
                                    if (is_user_logged_in()) {
                                        echo $current_user->user_login . "\n";
                                    } else {
                                        null;
                                    }
                                    ?></h5>
                                <p class="card-text">Top Shop 360</p>
                                <a href="#" class="btn btn-primary">Resources</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6">

                </div>
            </div>
        </div>
    </div>






    <?php get_footer() ?>