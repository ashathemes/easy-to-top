<?php
/**
* plugin name: Easy To Top
* Plugin URI: https://ashathemes.com/
* Description: This plugin will enable custom easy to top button in your wordpress site.
* Author: ashathemes
* Author URI: http://profiles.wordpress.org/ashathemes
* Version: 1.0.1
* License: GPL2
* Text Domain: easy-top
* Domain Path: /languages
*/
/*
Donot call the file directly
*/
if (! defined( 'ABSPATH' )) exit;

/*
Enqueue latest jQuery & required css files
*/
function asha_scroll_to_top_files(){
wp_enqueue_style('scrollup',plugins_url('/assets/css/scrollup.css',__FILE__), array(), '1.0.0', 'all');
wp_enqueue_script('jquery');
wp_enqueue_script('scrollup',plugins_url('/assets/js/jquery.scrollUp.min.js',__FILE__), array('jquery'), '2.4.1',false);	
wp_enqueue_script('main-js',plugins_url('/assets/js/main.js',__FILE__), array('jquery'), '2.4.1',false);	
}
add_action('wp_enqueue_scripts' , 'asha_scroll_to_top_files');	


add_action( 'init', 'asha_scroll_to_top_textdomain' );
/**
 * Load plugin textdomain.
 */
function asha_scroll_to_top_textdomain() {
  load_plugin_textdomain( 'easy-top', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); 
}