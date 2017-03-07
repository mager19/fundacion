<?php
/*
	Tema fundacion mis años bellos
	Creado mager19
	functions
*/
	
//Soporte de imagenes

add_theme_support( 'post-thumbnails' ); 
add_image_size( 'aliados', 300, 30, true );
add_image_size( 'imagen-post', 600, 400, true );



// Register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');

// Require funcion admin
	require get_template_directory() . '/inc/function-admin.php';    

//Enqueue Styles

    function fundacion_styles(){
    	wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '1.0.1', 'all');
    	wp_enqueue_style('bootstrap'); 

    	wp_enqueue_style( 'style', get_stylesheet_uri());
    	
    	wp_register_style('normalize', get_template_directory_uri().'/css/normalize.css', array(), '1.0.1', 'all');
    	wp_enqueue_style('normalize');

    	wp_register_style('stick', get_template_directory_uri().'/css/slick.css', array(), '1.0.1', 'all');
    	wp_enqueue_style('stick');

    	wp_register_style('fonticon', get_template_directory_uri().'/css/fonticon.css', array(), '1.0.1', 'all');
    	wp_enqueue_style('fonticon');
    	
    	wp_enqueue_script('jquery');
    	
		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), false, 'all' );
		wp_enqueue_script( 'jquery2', get_template_directory_uri() . '/js/jquery.min.js', array(), false, 'all' );
		wp_enqueue_script( 'funciones', get_template_directory_uri() . '/js/funciones.js', array(), false, 'all' );
		wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/js/slick.min.js', array(), false, 'all' );	
		wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array(), false, 'all' );	
		wp_enqueue_script( 'counterup', get_template_directory_uri() . '/js/jquery.counterup.min.js', array(), false, 'all' );	

		wp_register_style('fontsgoogle', 'https://fonts.googleapis.com/css?family=Athiti|Hind', false );
		wp_enqueue_style('fontsgoogle');
    }
    add_action('wp_enqueue_scripts', 'fundacion_styles' );

//Menu
	function registrar_menu(){
		register_nav_menus(array(

			'menu_principal' => 'Menú Principal'

		));

	}
	add_action('init', 'registrar_menu');

// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Slides', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Slide', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Slides', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Agregar Slide', 'text_domain' ),
		'new_item'              => __( 'Nuevo Slide', 'text_domain' ),
		'edit_item'             => __( 'Editar Slide', 'text_domain' ),
		'update_item'           => __( 'Actualizar Slide', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Slide', 'text_domain' ),
		'description'           => __( 'Tipo de post para slides', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', ),
		'taxonomies'            => array( 'slides' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-images-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'slides_post_type', $args );

		$labels = array(
		'name'                  => _x( 'aliados', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Aliado', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Aliados', 'text_domain' ),
		'name_admin_bar'        => __( 'Aliados', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Nuevo Aliado', 'text_domain' ),
		'add_new'               => __( 'Adicionar Nuevo Aliado', 'text_domain' ),
		'new_item'              => __( 'Nuevo Aliado', 'text_domain' ),
		'edit_item'             => __( 'Editar Aliado', 'text_domain' ),
		'update_item'           => __( 'Actualizar Aliado', 'text_domain' ),
		'view_item'             => __( 'Ver Aliado', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Aliado', 'text_domain' ),
		'description'           => __( 'Post Type para los aliados', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 21,
		'menu_icon'             => 'dashicons-image-flip-horizontal',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'aliados_post_type', $args );

}
add_action( 'init', 'custom_post_type', 0 );


