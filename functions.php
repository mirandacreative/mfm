<?php

/**********************************
 * Bootrap & Css & Icons *
 **********************************/


function mc_enqueue_my_scripts() {
    // jQuery is stated as a dependancy of bootstrap-js - it will be loaded by WordPress before the BS scripts 
    wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', array('jquery'), true); // all the bootstrap javascript goodness
   wp_enqueue_script( 'responsive-menyas', get_stylesheet_directory_uri() . '/js/responsive-menus.min.js'); // all 
   wp_enqueue_script( 'matchheight', get_stylesheet_directory_uri() . '/js/jquery.matchHeight.min.js'); // all   
   wp_enqueue_script( 'bootvalidate', get_stylesheet_directory_uri() . '/js/jqBootstrapValidation.min.js ');
   wp_enqueue_script( 'customjs', get_stylesheet_directory_uri() . '/js/custom.js ');    
}
add_action('wp_enqueue_scripts', 'mc_enqueue_my_scripts');


function mc_enqueue_mccode() {
  // tether is required for bootstrap 4
  wp_enqueue_script('tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js', array('jquery'), true);
     // jQuery is stated as a dependancy of bootstrap-js - it will be loaded by WordPress before the BS scripts  
     wp_enqueue_script( 'ekko-lightbox', 'https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js');   
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


// ACF Pro Options Page



if (function_exists('acf_add_options_page')) {



    acf_add_options_page(array(

        'page_title' => 'Theme General Settings',

        'menu_title' => 'Theme Settings',

        'menu_slug' => 'theme-general-settings',

        'capability' => 'edit_posts',

        'redirect' => false

    ));



}

/**
 * Hides the admin bar on a template page.
 */
function hide_admin_bar() {
    wp_add_inline_style('admin-bar', '<style> html { margin-top: 0 !important; } </style>');
    return false;
}
add_filter( 'show_admin_bar', 'hide_admin_bar' );

// this filter adds a dashboard button near the edit btn for easy dash access
add_filter( 'genesis_edit_post_link', function(){ 
edit_post_link( __( 'EDIT', 'textdomain' ), '', ' | <a href="/wp-admin/">Dashboard</a>' );
 });

// lets add us some menyahs(menus)
function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'temp-menu' => __( 'Temp Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );

 function atg_menu_classes($classes, $item, $args) {
  if($args->theme_location == 'main-menu') {
    $classes[] = 'list-inline-item';
  }
  return $classes;
}
add_filter('nav_menu_css_class','atg_menu_classes',1,3);
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
