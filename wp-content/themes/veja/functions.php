<?php 

function enqueue_theme_scripts(){
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', true);
	wp_enqueue_script('bootstrap', get_stylesheet_directory_uri().'/assets/javascripts/bootstrap.js', true);
	wp_enqueue_script('veja', get_stylesheet_directory_uri().'/assets/javascripts/veja.js', true);
}

add_action( 'wp_footer', 'enqueue_theme_scripts' );

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}