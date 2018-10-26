<?php get_header(); ?>
    
    <?php while(have_posts()): the_post(); ?>
    
        <div class="hero" style="background-image:url(<? echo get_the_post_thumbnail_url(); ?>);">
            <div class="content-hero">
                <div>
                
                </div>
            </div>
        </div>
        
        <div class="about-us">
            <main class="text-center content-pages">
                <?php the_content(); ?>
            </main>
        </div>

        <div class="information-box container">
            <div class="box">
                <?php 
                $id_imagen = get_field('imagen_1');
                $imagen = wp_get_attachment_image_src($id_imagen, 'nosotros'); 
                ?>
                <img src="<?php echo $imagen[0] ?>" class="image-box">
                
                <div class="content-box">
                   <?php the_field('descripcion_1') ?>
                </div>
            </div>
            <div class="box">
                <?php 
                $id_imagen = get_field('imagen_2');
                $imagen = wp_get_attachment_image_src($id_imagen, 'nosotros'); 
                ?>
                <img src="<?php echo $imagen[0] ?>" class="image-box">
                
                <div class="content-box">
                   <?php the_field('descripcion_2') ?>
                </div>
            </div>
            <div class="box">
                <?php 
                $id_imagen = get_field('imagen_3');
                $imagen = wp_get_attachment_image_src($id_imagen, 'nosotros'); 
                ?>
                <img src="<?php echo $imagen[0] ?>" class="image-box">
                
                <div class="content-box">
                   <?php the_field('descripcion_3') ?>
                </div>
            </div>
            <div class="box">
                <?php 
                $id_imagen = get_field('imagen_4');
                $imagen = wp_get_attachment_image_src($id_imagen, 'nosotros'); 
                ?>
                <img src="<?php echo $imagen[0] ?>" class="image-box">
                
                <div class="content-box">
                   <?php the_field('descripcion_4') ?>
                </div>
            </div>
        </div>

    <?php endwhile; ?>

<?php get_footer(); ?>