<?php
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

function bootstrap_nav()
{
	wp_nav_menu( array(
            'theme_location'    => 'top-menu',
            'depth'             => 2,
            'container'         => 'false',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
    );
}

// The CSS files for your theme
function theme_styles() {
    wp_enqueue_style('bootstrap-css', get_template_directory_uri . '/css/bootstrap.min.css', array(), '', 'all');
    // wp_enqueue_style('bootstrap-theme', get_template_directory_uri . '/css/bootstrap-theme.min.css', array('bootstrap-css'), '', 'all');
}

// The JavaScript files for your theme
function theme_js() {
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri . '/js/bootstrap.min.js', array('jquery'), '', true );
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );
add_action( 'wp_enqueue_scripts', 'theme_js' );


function register_my_menus(){
	register_nav_menus(
		array(
			'top-menu'=>__('Menu superior'),
			'bottom-menu'=>__('Menu del footer')
		)
	);
}
add_action('init','register_my_menus');

