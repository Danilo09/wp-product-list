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


}

/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );