<?php

//Habilitar imagenes destacadas
function silverfox_setup() {
    add_theme_support('post-thumbnails');
   
	add_image_size('nosotros', 125, 100, true);
	
	add_image_size('portfolio', 290, 400, true);

	add_image_size('blog', 290, 290, true);

}
add_action('after_setup_theme', 'silverfox_setup');

function silverfox_styles(){
    
    //Registra estilos
    wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.0');
    wp_register_style('google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800', array(), '1.0.0');
    wp_register_style('fontawesome', get_template_directory_uri() . 'assets/fonts//fontawesome-free-5.2.0-web/css/fontawesome.min', array('normalize'), '5.2.0');
    wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0');
    

    //Llama estilos
    wp_enqueue_style('normalize');
    wp_enqueue_style('fontawesome');
    wp_enqueue_style('style');

    //Registrar JS
    wp_register_script('scripts', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('scripts');
}

add_action('wp_enqueue_scripts', 'silverfox_styles');

//Creación de menus
function silverfox_menus(){
    register_nav_menus(array(
        'header-menu' => __('Header Menu', 'silverfox'),
        'social-menu' => __('Social Menu', 'silverfox'),
        'footer-menu' => __('Footer Menu', 'silverfox')
    ));
}
add_action('init', 'silverfox_menus');

add_action( 'init', 'silverfox_works' );
function silverfox_works() {
	$labels = array(
		'name'               => _x( 'Portafolio', 'silverfox' ),
		'singular_name'      => _x( 'Portafolio', 'post type singular name', 'silverfox' ),
		'menu_name'          => _x( 'Portafolio', 'admin menu', 'silverfox' ),
		'name_admin_bar'     => _x( 'Portafolio', 'add new on admin bar', 'silverfox' ),
		'add_new'            => _x( 'Add New', 'book', 'silverfox' ),
		'add_new_item'       => __( 'Add New Portafolio', 'silverfox' ),
		'new_item'           => __( 'New Portafolio', 'silverfox' ),
		'edit_item'          => __( 'Edit Portafolio', 'silverfox' ),
		'view_item'          => __( 'View Portafolio', 'silverfox' ),
		'all_items'          => __( 'All Portafolio', 'silverfox' ),
		'search_items'       => __( 'Search Portafolio', 'silverfox' ),
		'parent_item_colon'  => __( 'Parent Portafolio:', 'silverfox' ),
		'not_found'          => __( 'No Portfolio found.', 'silverfox' ),
		'not_found_in_trash' => __( 'No Portfolio found in Trash.', 'silverfox' )
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'Description.', 'silverfox' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'works' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'          => array( 'category' ),
	);

	register_post_type( 'works', $args );
}

/* Widgets */

function silverfox_widgets(){
	register_sidebar( array(
		'name'	=> 'Blog Sidebar',
		'id'	=> 'blog_sidebar',
		'before_widget'	=> '<div class="widget">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=>	'</h3>'
	));
}
add_action('widgets_init', 'silverfox_widgets');