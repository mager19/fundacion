<?php
/*
	Tema fundacion mis años bellos
	Creado mager19
	functions
*/

// Register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');

//Enqueue Styles

    function fundacion_styles(){
    	wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '1.0.1', 'all');
    	wp_enqueue_style('bootstrap'); 

    	wp_enqueue_script('jquery');
		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), false, 'all' );
    }

    add_action('wp_enqueue_scripts', 'fundacion_styles' );

//Menu
	function registrar_menu(){
		register_nav_menus(array(

			'menu_principal' => 'Menú Principal'

		));

	}
	add_action('init', 'registrar_menu');

