<div class="py-3 bg-grey">
    <div class="container">
        <div class="row ">
            <div class="blognav ">
                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'Resource Menu',
                    )
                );
                ?>
            </div>
        </div>
    </div>
</div>
<div class="py-5 bg-primary">
    <div class="container ">
        <div class="row">
        <h3 class="text-cta pb-3">Search Info Center</h3>
        </div>
        <div class="row">
            <div class="col-8 text-center">
                
            <form action="/" method="get">
                <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
                </form>
            </div>
            <div class="col-4 ">
                <select name="tag">
                    <?php
                    $tags = get_tags();
                    foreach ( $tags as $tag ) {
                        $selected = $tag->slug === $filterByTag ? 'selected' : '';
                                                        
                        echo '<option value="' . $tag->slug . '" ' . $selected . '>' . $tag->name . '</option>';
                      }
                    ?>
                </select>
                    </div>
        </div>
    </div>
</div>