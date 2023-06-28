<div>
    <div class="container">
        <div class="row py-5">

            <div class="col-12  my-auto col-lg-6">
                <div id="reviews" class="carousel carousel-dark slide shadow bg-primary my-auto" data-bs-ride="carousel">
                <div class="row">
                        <div class="col-12  ps-5 pt-4 ">
                           <img src="/wp-content/uploads/2023/06/quotes.webp">
                        </div>
                    </div>
                    <div class="carousel-inner py-5 text-white">
                        <div class="carousel-item active px-3">


                            <p> <?php the_sub_field('review_1'); ?></p>



                            <div class="row ">
                                <div class="col-3  ">
                                    <img src="/wp-content/uploads/2023/06/bill-thumbnail.webp">
                                </div>
                                <div class="col-9 my-auto">
                                    <p class="fw-bold  text-cta"><?php the_sub_field('auth_1'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item  px-3">


                            <p><?php the_sub_field('review_2'); ?></p>



                            <div class="row ">
                                <div class="col-3  ">
                                    <img src="/wp-content/uploads/2023/06/bill-thumbnail.webp">
                                </div>
                                <div class="col-9">
                                    <p class="text-cta fw-bold  "><?php the_sub_field('auth_2'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item  px-3">


                            <p><?php the_sub_field('review_3'); ?></p>



                            <div class="row ">
                                <div class="col-3  ">
                                    <img src="/wp-content/uploads/2023/06/bill-thumbnail.webp">
                                </div>
                                <div class="col-9">
                                    <p class="text-cta fw-bold  "><?php the_sub_field('auth_2'); ?></p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end">
                            <button class="bg-cta me-2" type="button" data-bs-target="#reviews" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="bg-cta" type="button" data-bs-target="#reviews" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 my-auto col-lg-6 py-5 ">
                <h2 class="fw-bold text-primary display-6"><?php the_sub_field('reviewhead'); ?></h2>
                <p><?php the_sub_field('reviewcontent'); ?></p>
                <a href="/reviews/" class="btn btn-lg btn-cta border-3 fw-bold  shadow">Read More Reviews</a>
            </div>
        </div>
    </div>
</div>