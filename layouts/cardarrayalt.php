<div class="container-fluid py-5 bg-grey">
    <div class="container">
        <?php if (get_sub_field('card_image_head')) : ?>
            <img src="<?php the_sub_field('card_image_head'); ?>" />
        <?php endif; ?>
        <div class="text-center">
            <h2 class="text-primary mb-3 fw-bold display-4"><?php the_sub_field('cardarrayheaderalt'); ?></h2>
        </div>
        <div class="mt-5 row row-cols-2 row-cols-lg-4 ">
            <?php if (have_rows('content_cards_alt')) : ?>
                <?php while (have_rows('content_cards_alt')) : the_row(); ?>
                    <div class="col   d-flex pb-4 justify-content-center ">
                        <div class="text-center align-baseline">
                            <?php
                            $image = get_sub_field('card_image_alt');
                            if (!empty($image)) : ?>
                                <img class="mb-3" src=" <?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            <h3 class="text-cta fw-bold">
                                <?php the_sub_field('card_head'); ?>
                            </h3>
                            <?php
                            $link = get_sub_field('page_link');
                            if ($link) : ?>
                                <a class="btn btn-cta mt-3" href="<?php echo esc_url( $link ); ?>"><?php the_sub_field('text_alt') ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>