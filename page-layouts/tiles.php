


<div class="container">
    <div class="row ">
        <div class="col d-flex justify-content-center">
            <h2 class="display-5 fw-bold pb-2 text-white"><?php the_sub_field('arrayheader'); ?></h2>
        </div>
    </div>

    <div class="  row d-flex justify-content-center row-cols-2 row-cols-lg-6 ">
        <?php if (have_rows('content_tiles')) : ?>
            <?php while (have_rows('content_tiles')) : the_row(); ?>
                <div class="col  d-flex pb-4 justify-content-center">
                    <div style="max-width: 18rem;" class="wrap p-3 card h-100 rounded-3  shadow-lg ">
                        <?php
                        $image = get_sub_field('icon');
                        if (!empty($image)) : ?>
                            <img class="card-img-top" src=" <?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                        <div class="card-body text-center">
                            <?php
                            $link = get_sub_field('link');
                            if ($link) : ?>
                                <a href="<?php echo esc_url($link); ?>" style="text-decoration:none;" class="stretched-link fs-6 fw-bold"><?php the_sub_field('label'); ?></a>
                                <?php else : ?>
                                    <p  style="text-decoration:none;" class="stretched-link fs-6 fw-bold"><?php the_sub_field('label'); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>