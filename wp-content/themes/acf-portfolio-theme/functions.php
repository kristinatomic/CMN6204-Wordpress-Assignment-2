<?php
function custom_title(){
	$name = get_bloginfo('name');
	$description = get_bloginfo('description');
	$page_title = wp_title();
	$title = $page_title . ' | ' . $name . ' ~ ' . $description;
	return $title;
};
add_action('init', 'register_menus');
function register_menus() {
	register_nav_menus([
		'main-menu' => 'Main Menu top of the page'
	]);
};

add_action('wp_enqueue_scripts','custom_scripts');

function custom_scripts(){
   wp_register_style('bootstrap','/wp-content/themes/acf-portfolio-theme/vendor/bootstrap/css/bootstrap.min.css',[],1.1,false);
   wp_register_style('modern-css','/wp-content/themes/acf-portfolio-theme/css/modern-business.css',['bootstrap'],1.1,false);

   wp_enqueue_style('bootstrap');
   wp_enqueue_style('modern-css');

};
?>