<?php

/**********************************
 * Bootrap & Css & Icons *
 **********************************/


function mc_enqueue_my_scripts() {
    // jQuery is stated as a dependancy of bootstrap-js - it will be loaded by WordPress before the BS scripts 
    wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', array('jquery'), true); // all the bootstrap javascript goodness

}
add_action('wp_enqueue_scripts', 'mc_enqueue_my_scripts');


function mc_enqueue_mccode() {
  // tether is required for bootstrap 4
  wp_enqueue_script('tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js', array('jquery'), true);
     // jQuery is stated as a dependancy of bootstrap-js - it will be loaded by WordPress before the BS scripts  
     wp_enqueue_script( 'ekko-lightbox', 'https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js');   

}
add_action('wp_enqueue_scripts', 'mc_enqueue_mccode');


function mc_enqueue_my_styles() {

    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css' );   
    wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css' );  
    wp_enqueue_style( 'google-material', 'https://fonts.googleapis.com/icon?family=Material+Icons' );   
    wp_enqueue_style( 'custom-css', get_stylesheet_directory_uri() . '/css/custom.css' );         
    wp_enqueue_style( 'ekkolightbox-css', 'https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css' ); 
}

// remove title on homepage MCcoder
add_action('wp_enqueue_scripts', 'mc_enqueue_my_styles');

 function google_fonts() {
  $query_args = array(
    'family' => 'family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i',
    'subset' => 'latin,latin-ext'
  );
  wp_register_style( 'google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
            }
            
add_action('wp_enqueue_scripts', 'google_fonts');