<?php
/*
Plugin Name: PDF Force
Plugin URI: http://localhost
Description: Forcing those PDF's, beause clicking a link is just too much
Version:     1
Author: Eric L. Michalsen
Author URI:
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}





add_action( 'wp_enqueue_scripts', 'force_assets' );



// Search Assests (js/css)
function force_assets() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('force',  plugins_url() . "/pdf_force/assets/js/pdf_force.js", '', '1.0', true);
}