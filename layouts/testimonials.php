    <div class="container">
        <div class="row py-5">
            <div class="col-12 my-auto col-lg-6 text-center">
                <h2 class="display-2"><?php the_sub_field('reviewhead'); ?></h2>
                <p><?php the_sub_field('reviewcontent'); ?></p>
                <a href="" class="btn btn-cta">Call To Action</a>
            </div>
            <div class="col-12 col-lg-6">
                <div id="reviews" class="carousel carousel-dark slide my-auto" data-bs-ride="carousel">
                    <div class="carousel-inner text-center">
                        <div class="carousel-item active pt-5 pb-5 px-lg-5">
                        <img class="mb-5" src="/wp-content/uploads/2022/09/stars-e1663005501286.png">
                            <div class="col mt-4 fw-bold px-5">
                                <p>  <?php the_sub_field('review_1'); ?></p>
                                <br>
                                <p class="display-5">-Russell</p>
                            </div>
                        </div>
                        <div class="carousel-item pt-5 pb-5 px-lg-5">
                        <img class="mb-5" src="/wp-content/uploads/2022/09/stars-e1663005501286.png">
                            <div class="col mt-4  fw-bold px-5">
                                <p>"I manage a company fleet locally. When our in-house shop is unable to get to a repair in a timely manner, this is the ONLY shop I will use."</p>
                                <br>
                                <p class="display-5">-Ace</p>
                            </div>
                        </div>
                        <div class="carousel-item pt-5 pb-5 px-lg-5">
                        <img class="mb-5" src="/wp-content/uploads/2022/09/stars-e1663005501286.png">
                            <div class="col fw-bold mt-4  px-5">
                                <p>"These guys have been indispensable to the continued usage of my vehicles"</p>
                                <br>
                                <p class="display-5">-Frank</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#reviews" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#reviews" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>