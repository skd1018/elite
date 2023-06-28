<?php

/** 
 Template Name: Specials
 */
get_header(); ?>
<script>
    const borst_getCouponExpirationDate = function(cycleStartDate = new Date(2019, 8, 9), cycleDays = 14) {
        const rightNow = new Date();
        const today = new Date(rightNow.getFullYear(), rightNow.getMonth(), rightNow.getDate());
        const yearStart = new Date(today.getFullYear(), 0, 0);
        const today_nthDayOfYear = Math.floor((today.getTime() - yearStart.getTime()) / 86400000); // 86,400,000 = 1000 * 60 * 60 * 24
        const cycleOffsetDays = (Math.floor((cycleStartDate.getTime() - yearStart.getTime()) / (1000 * 60 * 60 * 24))) % cycleDays;
        const cycleEndDate = new Date(rightNow.getFullYear(), 0, cycleOffsetDays + (cycleDays * (1 + Math.floor(today_nthDayOfYear / cycleDays))));
        return (cycleEndDate.getMonth() + 1) + '/' + cycleEndDate.getDate() + '/' + cycleEndDate.getFullYear();
    };

    jQuery(function() {
        jQuery('.js-cycle-expiration-date').html(borst_getCouponExpirationDate())
    })
</script>

<?php if (get_field('hero_image')) : ?>
    <div class="pt-5 " style="background-image: url('<?php the_field('hero_image'); ?>');">
        <div class="container text-center">
            <div class="mt-3 row">
                <h1 class="fw-bold display-5 pt-5 pb-5 text-white"><?php the_title(); ?></h1>
            </div>
        </div>
    <?php endif ?>
    <div class="custom-shape-divider-top-1664857565">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" style="transform: rotate(180deg); height: 80px; width:100%;" fill="#ffffff" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V6c0,21.6,291,111.46,741,110.26,445.39,3.6,459-110.3,659-110.26V0Z" class="shape-fill"></path>
        </svg>
    </div>
    </div>
    <div class="container mb-4">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="fade card  rounded-3 shadow">

                    <div class="card-body">
                        <div class="text-center">
                            <h2 class="card-title fw-bold text-blue"><?php the_field('special_head_1'); ?></h2>
                            <p class="js-cycle-expiration-date card-text"></p>
                            <!-- Button trigger modal -->

                            <button type="button" class="btn-lg btn-blue" data-bs-toggle="modal" data-bs-target="#modal1">
                                Details
                            </button>
                        </div>
                        <!-- Modal -->
                        <div class="modal " id="modal1" tabindex="-1" aria-labelledby="modal1" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div id="acservice">
                                        <div class="modal-header bg-grey">
                                            <img src="/wp-content/uploads/2018/12/cropped-Logo-Borst-FC-e1663092551370.png">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h5 class="modal-title text-blue fw-bold" id="modal1"><?php the_field('header_1'); ?></h5>
                                            <?php the_field('modal_1'); ?>
                                        </div>
                                    </div>
                                    <div class="modal-footer bg-grey">
                                        <button type="button" class="btn btn-lg btn-blue" data-bs-dismiss="modal">Close</button>
                                        <button onclick="jQuery('#acservice').printThis();" type="button" class="btn text-white btn-lg btn-cta">Print</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="fade card rounded-3 shadow">

                    <div class="card-body">
                        <div class="text-center">
                            <h2 class="card-title fw-bold text-blue"><?php the_field('special_head_2'); ?></h2>
                            <p class=" js-cycle-expiration-date card-text"></p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn-lg btn-blue" data-bs-toggle="modal" data-bs-target="#modal2">
                                Details
                            </button>
                        </div>
                        <!-- Modal -->
                        <div class="modal " id="modal2" tabindex="-1" aria-labelledby="modal2" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div id="brakeinspection">
                                        <div class="modal-header bg-grey">
                                            <img src="/wp-content/uploads/2018/12/cropped-Logo-Borst-FC-e1663092551370.png">

                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h5 class="modal-title text-blue justify-center fw-bold" id="modal2"><?php the_field('header_2'); ?></h5>
                                            <?php the_field('modal_2'); ?>
                                        </div>
                                    </div>
                                    <div class="modal-footer bg-grey">
                                        <button type="button" class="btn-lg btn-blue" data-bs-dismiss="modal">Close</button>
                                        <button onclick="jQuery('#brakeinspection').printThis();" type="button" class="btn-lg text-white  btn-cta">Print</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="fade card rounded-3 shadow">

                    <div class="card-body">
                        <div class="text-center">
                            <h2 class="card-title fw-bold text-blue"><?php the_field('special_head_3'); ?></h2>
                            <p class=" js-cycle-expiration-date card-text"></p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn-lg btn-blue" data-bs-toggle="modal" data-bs-target="#modal3">
                                Details
                            </button>
                        </div>
                        <!-- Modal -->
                        <div class="modal " id="modal3" tabindex="-1" aria-labelledby="modal3" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div id="2075">
                                        <div class="modal-header bg-grey">
                                            <img src="/wp-content/uploads/2018/12/cropped-Logo-Borst-FC-e1663092551370.png">

                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h5 class="modal-title text-blue fw-bold" id="modal3"><?php the_field('header_3'); ?></h5>
                                            <?php the_field('modal_3'); ?>
                                        </div>
                                    </div>
                                    <div class="modal-footer bg-grey">
                                        <button type="button" class="btn btn-lg  btn-blue " data-bs-dismiss="modal">Close</button>
                                        <button onclick="jQuery('#2075').printThis();" type="button" class="btn btn-lg btn-cta text-white">Print</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="fade card rounded-3 shadow">

                    <div class="card-body">
                        <div class="text-center">
                            <h2 class="card-title fw-bold text-blue"><?php the_field('special_head_4'); ?></h2>
                            <p class="js-cycle-expiration-date card-text"></p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn-lg btn-blue" data-bs-toggle="modal" data-bs-target="#modal4">
                                Details
                            </button>
                        </div>
                        <!-- Modal -->
                        <div class="modal " id="modal4" tabindex="-1" aria-labelledby="modal4" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div id="picksave">
                                        <div class="modal-header bg-grey">
                                            <img src="/wp-content/uploads/2018/12/cropped-Logo-Borst-FC-e1663092551370.png">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h5 class="modal-title text-blue fw-bold" id="modal4"><?php the_field('header_4'); ?></h5>
                                            <?php the_field('modal_4'); ?>
                                        </div>
                                    </div>
                                    <div class="modal-footer bg-grey">
                                        <button type="button" class="btn btn-lg btn-blue" data-bs-dismiss="modal">Close</button>
                                        <button onclick="jQuery('#picksave').printThis();" type="button" class="btn btn-lg btn-cta text-white">Print</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="fade card rounded-3 shadow">

                    <div class="card-body">
                        <div class=" text-center">
                            <h2 class="card-title fw-bold text-blue"><?php the_field('special_head_5'); ?></h2>
                            <p class=" js-cycle-expiration-date card-text"></p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn-lg btn-blue" data-bs-toggle="modal" data-bs-target="#modal5">
                                Details
                            </button>
                        </div>
                        <!-- Modal -->
                        <div class="modal " id="modal5" tabindex="-1" aria-labelledby="modal5" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div id="10off">
                                        <div class="modal-header bg-grey">
                                        <img src="/wp-content/uploads/2018/12/cropped-Logo-Borst-FC-e1663092551370.png">

                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h5 class="modal-title text-blue fw-bold" id="modal5"><?php the_field('header_5'); ?></h5>
                                            <?php the_field('modal_5'); ?>
                                        </div>
                                    </div>
                                    <div class="modal-footer bg-grey">
                                        <button type="button" class="btn btn-lg btn-blue" data-bs-dismiss="modal">Close</button>
                                        <button onclick="jQuery('#10off').printThis();" type="button" class="btn btn-lg btn-cta text-white">Print</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="fade card rounded-3 shadow">

                    <div class="card-body">
                        <div class="text-center">
                            <h2 class="card-title fw-bold text-blue"><?php the_field('special_head_6'); ?></h2>
                            <p class="js-cycle-expiration-date card-text"></p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn-lg btn-blue" data-bs-toggle="modal" data-bs-target="#modal6">
                                Details
                            </button>
                        </div>
                        <!-- Modal -->
                        <div class="modal " id="modal6" tabindex="-1" aria-labelledby="modal6" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div id="25off">
                                        <div class="modal-header bg-grey">
                                        <img src="/wp-content/uploads/2018/12/cropped-Logo-Borst-FC-e1663092551370.png">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <h5 class="modal-title text-blue fw-bold" id="modal6"><?php the_field('header_6'); ?></h5>
                                            <?php the_field('modal_6'); ?>
                                        </div>
                                    </div>
                                    <div class="modal-footer bg-grey">
                                        <button type="button" class="btn btn-lg btn-blue" data-bs-dismiss="modal">Close</button>
                                        <button onclick="jQuery('#25off').printThis();" type="button" class="btn btn-lg btn-cta text-white">Print</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <?php get_footer(); ?>