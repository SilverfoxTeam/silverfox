<footer>
        <nav class="extended-menu">
            <div class="menu-more">
                <div class="coco-bombas">
                    <?php
                        $args = array(
                            'theme_location' => 'footer-menu',
                            'container' => 'nav',
                            'container_class' => 'menu-more',
                            'after' => '<span class="separator"> / </span>'
                        );
                        
                        wp_nav_menu( $args );
            
                    ?>
                </div>
            </div>
        </nav>
    </footer>   
        <?php wp_footer(); ?>
    
    </body>
</html>
