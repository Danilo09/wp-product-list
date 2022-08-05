<?php
/**
* Proper way to enqueue scripts and styles
*/

/**
* lotto functions and definitions
*
* @package lotto
* @since lotto 1.0
*/

function lotto_scripts() {
    wp_enqueue_style( 'lotto_style',  get_template_directory_uri() .'/assets/css/style.css', array(), null, 'all' );

}

add_action('wp_enqueue_scripts', 'lotto_scripts');

/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );

