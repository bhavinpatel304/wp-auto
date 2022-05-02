<?php
/*
Plugin Name: Author List
Plugin URI: http://www.advancedcustomfields.com/
Description: show author listing in post
Version: 1.0
Author: Bhavin Patel
*/

// define - plugin location 
define( 'AUTHORS_DIR', dirname(__FILE__) );

//bootstrap css
function add_css() {
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), null);
 }
add_action( 'wp_enqueue_scripts', 'add_css' );

// for front-end use
include AUTHORS_DIR . '/front-end.php';

// for back-end use
include AUTHORS_DIR . '/back-end.php';

?>