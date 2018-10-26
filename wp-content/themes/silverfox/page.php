

<?php get_header(); ?>
    
    <?php while(have_posts()): the_post(); ?>
    
        <div class="hero" style="background-image:url(<? echo get_the_post_thumbnail_url(); ?>);">
            <div class="content-hero">
                <div class="text-hero">
                    <?php the_title('<h1>', '</h1>'); ?>
                </div>
            </div>
        </div>
        
        <div class="about-us">
            <main class="text-center content-pages">
            </main>
        </div>
    <?php endwhile; ?>

<?php get_footer(); ?>