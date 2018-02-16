<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_separate', trailingslashit( get_stylesheet_directory_uri() ) . 'ctc-style.css', array( 'alchem-bootstrap','alchem-font-awesome','alchem-animate','alchem-prettyPhoto','owl.carousel','alchem-custom','alchem-customize','alchem-shortcode','alchem-woocommerce','alchem-style','alchem-bigvideo' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css' );

// END ENQUEUE PARENT ACTION
