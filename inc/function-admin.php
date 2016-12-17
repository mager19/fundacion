<?php
/*
	Pagina de administracion
*/

function theme_add_admin_page(){
	//add menu page
	add_menu_page('opciones-tema', 'Opciones Fundacion', 'manage_options', 'tema-fundacion','fundacion_crear_pagina', 'dashicons-welcome-view-site', 110);

	//submenu page
	add_submenu_page('tema-fundacion','opciones_fundacion1','Generales','manage_options','tema-fundacion','tema_configuracion_pagina' );
	 
	 
}add_action('admin_menu', 'theme_add_admin_page' );

function fundacion_crear_pagina(){

}

function tema_configuracion_pagina(){
	echo "hola";
}