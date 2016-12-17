<?php
/*
	Tema fundacion mis años bellos
	Creado mager19
	functions
*/
	
//Soporte de imagenes

add_theme_support( 'post-thumbnails' ); 
// add_image_size( 'imagen-slide', 1280, 450, true );



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
    	
    	wp_enqueue_script('jquery');
    	
		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), false, 'all' );
		wp_enqueue_script( 'jquery2', get_template_directory_uri() . '/js/jquery.min.js', array(), false, 'all' );
		wp_enqueue_script( 'funciones', get_template_directory_uri() . '/js/funciones.js', array(), false, 'all' );
		wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/js/slick.min.js', array(), false, 'all' );	

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

