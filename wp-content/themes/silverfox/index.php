<?php get_header(); ?>
    
    <?php 
    $page_blog = get_option('page_for_posts');
    $image = get_post_thumbnail_id($page_blog);
    $image = wp_get_attachment_image_src($image, 'full');
    ?>

    
        <div class="hero" style="background-image:url(<?php echo $image[0]; ?>);">
            <div class="content-hero">
                   <h1> <?php echo get_the_title($page_blog) ?> </h1>
            </div>
        </div>
        
        <div class="about-us">
            <div class="container-grid">
            <main class="columnas1-4 content-pages">
                <?php while(have_posts()): the_post(); ?>
                    <article class="blog-entry">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('blog') ?>
                        </a>
                        <header class="entrance-information clear">
                            
                            <div class="title-entry">
                                <?php the_title('<h2>', '</h2>'); ?>
<div class="date">
                                <time>
                                    <?php echo the_time('d'); ?>
                                    <span><?php the_time('M'); ?></span>
                                </time>
                            </div>
                                <p class="author">
                                    <i ><?php the_author(); ?> </i>
                                </p>
                            </div>
                        </header>
    
                    </article>

                <?php endwhile; ?>
            </main>

                <?php get_sidebar(); ?>
            </div>
        </div>

<?php get_footer(); ?>
