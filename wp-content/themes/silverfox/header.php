<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
    
        <!-- menu principal-->
    <header class="site-header">
        <nav class="site-menu">
            <div class="mobile-menu">
                    <a href="#" class="mobile"> Menu </a>
            </div>
            <div class="main-menu">   
                <div class="navigation-container">
                    <?php
                        $args = array(
                            'theme_location' => 'header-menu',
                            'container' => 'nav',
                            'after' => '<span class="separator"> / </span>',
                            'container_class' => 'main-menu'
                        );

                        wp_nav_menu( $args );

                    ?>    
                </div> 
            </div>
    
        <!-- redes social -->
        
            <div class="menu-networks">
                <div class="social-networks">
                    <?php
                        $args = array(
                            'theme_location' => 'social-menu',
                            'container' => 'nav',
                            'container_class' => 'menu-networks',
                            'after' => '<span class="separator"> / </span>',
                        );
                        
                        wp_nav_menu( $args );
            
                    ?>
                </div>
            </div>
        </nav>


        <div class="container">
            <div class="logo">
                <a href="<?php echo esc_url( home_url('/') ); ?> "> <!-- enlace a pag de inicio -->
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-sfx.jpg" alt="logo-sfx" class="image-logo">
                </a>
            </div>
        </div>
    </header>

    