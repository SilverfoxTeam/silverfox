<?php 
/*
* Template Name: Portfolio
*/
get_header(); ?>

    <div class="our-jobs ">
        <div class="container-grid">
            <?php
                $args = array(
                    'post_type' => 'works',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'ASC',
                    'category_name' => 'portafolio'
                );
                $portafolio = new WP_Query($args);
                while($portafolio->have_posts()): $portafolio->the_post();
                ?>
            
                <div class="columnas1-4">
                    <?php the_post_thumbnail('portfolio'); ?>
                </div>

                <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
<?php get_footer(); ?>