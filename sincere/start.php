<?php 

// Enqueue CSS and JS in this function
function sincere_script_enqueue(){

	wp_enqueue_style('sincere', get_template_directory_uri() . '/sincere/assets/css/sincere.min.css');

	wp_enqueue_style('main', get_stylesheet_uri());

	wp_enqueue_script('jquery', true);
 	
 	wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/sincere/assets/js/custom.js', array(), '1.0
 	.0',
	    true);

}

add_action('wp_enqueue_scripts', 'sincere_script_enqueue');


function sincere_theme_setup(){

	// Adds theme support for menus on the back-end
	add_theme_support('menus');

	register_nav_menu('primary', 'Primary Navigation Menu');
	register_nav_menu('footer', 'Footer Links');


}
// Function will be executed after theme setup
add_action('init', 'sincere_theme_setup');

add_theme_support('custom-background');

add_theme_support('custom-header');

add_theme_support('post-thumbnails');

add_theme_support('post-formats', array('gallery', 'audio', 'video'));

add_theme_support('html5', array('search-form'));


// Sidebar setup
function sincere_widget_setup(){

	register_sidebar(array(
			'name'			=>		'Sidebar',
			'id'			=>		'primary-sidebar',
			'class'			=>		'',	
			'description'	=>		'Standard Sidebar',
			'before_widget'	=>		'<aside id="%1$s" class="sidebar-widget %2$s"',
			'after_widget'	=>		'</aside>',
			'before_title'	=>		'<h4 class="widget-title">',
			'after_title'	=>		'</h4>',
		)
	);
}
add_action('widgets_init', 'sincere_widget_setup');


// Header function that removes WordPress version
function sincere_remove_version(){
	return '';
}
add_filter('the_generator', 'sincere_remove_version');