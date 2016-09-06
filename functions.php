<?php

// ==============================
// ŁADOWANIE STYLI I SKRYPTÓW
// ==============================

//	====================
//	Ustawienia wersji skryptów i styli

$DEV = TRUE;	// czy w fazie testów?

if($DEV){
	$version = date('d-m_H:i');
} else {
	$version = "1.0";
}

//	=====================

add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
add_action( 'admin_enqueue_scripts', 'enqueue_admin_styles' );

function enqueue_styles(){
	wp_enqueue_style( 'core', get_template_directory_uri() . '/css/style.css', false, $version );
}

function enqueue_admin_styles(){
    wp_enqueue_style( 'admin', get_template_directory_uri() . '/css/admin.css', false, $version );
}

function enqueue_scripts(){
	wp_enqueue_script( 'jquery-3.0.0', get_template_directory_uri() . '/js/jquery-3.0.0.min.js', false );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', false, $version );
}

// ==============================
// USTAWIENIA WORDPRESSA
// ==============================

//add_filter('show_admin_bar', '__return_false');				//	schowaj belkę admina

function remove_menus(){										// 	Usuwanie itemów z menu admina
	remove_menu_page('edit-comments.php');						//- komentarze
	//remove_menu_page('edit.php');								//- wpisy

	if(wp_get_current_user()->user_login != 'jakub.kuranda'){		// Schowaj elementy jeśli user to nie dualjack ( autor strony)
		remove_menu_page('pods');								//- Pods
		remove_menu_page('edit.php?post_type=acf');				//- ACF
	}
}

add_action('admin_menu', 'remove_menus',999);

function remove_admin_bar_links() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');          			// Remove the WordPress logo
    $wp_admin_bar->remove_menu('about');            			// Remove the about WordPress link
    $wp_admin_bar->remove_menu('wporg');           	 			// Remove the WordPress.org link
    $wp_admin_bar->remove_menu('documentation');    			// Remove the WordPress documentation link
    $wp_admin_bar->remove_menu('support-forums');   			// Remove the support forums link
    $wp_admin_bar->remove_menu('feedback');        				// Remove the feedback link
    //$wp_admin_bar->remove_menu('site-name');       			// Remove the site name menu
    //$wp_admin_bar->remove_menu('view-site');       			// Remove the view site link
    $wp_admin_bar->remove_menu('updates');         				// Remove the updates link
    $wp_admin_bar->remove_menu('customize');          			// Remove the customize link
    $wp_admin_bar->remove_menu('comments');         			// Remove the comments link
    $wp_admin_bar->remove_menu('new-content');      			// Remove the content link
    $wp_admin_bar->remove_menu('themes');      					// Remove the themes link
    //$wp_admin_bar->remove_menu('w3tc');             			// If you use w3 total cache remove the performance link
    //$wp_admin_bar->remove_menu('my-account');       			// Remove the user details tab
}

add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_links' );

// ==============================
// ROZMIARY OBRAZKÓW
// ==============================

//add_image_size('slider', 1600, 360, array( 'center', 'center' ));					//	obraz slajdu

// ==============================
// ADVANCED CUSTOM FIELDS
// ==============================

// ==============================
// PODS
// ==============================

// function remove_pods_shortcode_button () {	// Usuwanie przycisku shortcode w frontendzie
//     remove_action( 'media_buttons', array( PodsInit::$admin, 'media_button' ), 12 );
// }

// add_action( 'admin_init', 'remove_pods_shortcode_button', 14 );