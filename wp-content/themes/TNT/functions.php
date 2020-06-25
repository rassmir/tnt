<?php
//function tnt_setup() {
//   add_theme_support('post-thumbnails');
//}
//
//add_action('after_setup_theme','tnt_setup');

function tnt_menus() {
  register_nav_menus(array(
       'menu-principal1' => __('Menu Principal 1','TNTAgenciaDigital'),
       'menu-principal2' => __('Menu Principal 2','TNTAgenciaDigital_2')
  ));
}

add_action('init','tnt_menus');

add_filter( 'nav_menu_link_attributes', 'class_links', 10, 3 );

function class_links( $atts, $item, $args ) {
    $class = 'global__title global__menu-category-section animate-on-load hidden';
    $atts['class'] = $class;
    return $atts;
}

function active_menu($classes, $item){
    if( in_array('animate-on-load', $classes) ){
        $classes[] = 'current';
    }
    return $classes;
}
add_filter('nav_menu_css_class' , 'active_menu' , 10 , 2);

function tnt_scripts_styles() {
  wp_enqueue_style('custom-style', get_template_directory_uri().'/css/custom-style.css', array(),'1.0.0');
  wp_enqueue_style('style', get_stylesheet_uri(), array(),'1.0.0');
  wp_enqueue_style('modal-css', get_template_directory_uri().'/css/jquery.modal.min.css', array(),'1.0.0');

  wp_enqueue_script('jquery44a3', get_template_directory_uri().'/js/jquery44a3.js', array(),'1.12.4');
  wp_enqueue_script('modal', get_template_directory_uri().'/js/libs/jquery.modal.min.js', array(),'0.9.1');
  wp_enqueue_script('modernizr', get_template_directory_uri().'/js/modernizr.js', array(),'2.8.3');
  wp_enqueue_script('waypoints', get_template_directory_uri().'/js/libs/jquery.waypoints.min.js', array(),'4.0.0');
  wp_enqueue_script('easing', get_template_directory_uri().'/js/libs/jquery.easing.min.js', array(),'1.4.1');
  wp_enqueue_script('cookie', get_template_directory_uri().'/js/libs/js.cookie.min.js', array(),'2.2.1');
  wp_enqueue_script('barba', 'https://unpkg.com/@barba/core?ver=5.4.1.1590595645', array(),'5.4.1',true);
  wp_enqueue_script('slick', get_template_directory_uri().'/js/libs/slick.min.js', array(),'1.9.0',true);
  wp_enqueue_script('selectric', get_template_directory_uri().'/js/libs/jquery.selectric.min.js', array(),'1.9.0',true);
  wp_enqueue_script('main2d2e', get_template_directory_uri().'/js/main2d2e.js', array(),'1.0.0',true);
  wp_enqueue_script('fab', get_template_directory_uri().'/js/fab.js', array(),'2.8.3');

}

add_action('wp_enqueue_scripts','tnt_scripts_styles');

//Admistrar direccion footer
require get_template_directory().'/inc/opciones.php';
