<?php get_header(); ?>
    
    <?php while(have_posts()): the_post(); ?>
    <?php endwhile; ?>
    
        <div class="container-work">
            <main>
                <?php $args = array(
                    'post_per_page' => 8,
                    'post_type' => 'works'

                );
                $works = new WP_Query($args);
                while($works->have_post()): $works->the_post();
                ?>
                <div class="work">
                    <?php the_title(); ?>
                </div>

                <?php endwhile; wp_reset_posdata(); ?>
            </main>
        </div>
    

<?php get_footer(); ?>