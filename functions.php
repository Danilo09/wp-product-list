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


// Enable thumbnail in posts 
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 45, 45, true ); // miniaturas normais para a homepage

// Enable SVG in posts
function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
}

add_filter('upload_mimes', 'add_file_types_to_uploads');

// function get_send_data() {
//     $args = array(
//         'post_type' => 'post',
//         'posts_per_page' => 10,
//     );
    
//     $query = new WP_Query($args);

//     $datasend = [];
    
//     if($query -> have_posts()) {
//         while ( $query -> have_posts()) {
//             $query->the_post();
    
//             $array = [
//                 'apiKey' => get_the_title(),
//                 'displayName' => get_the_content(),
//                 'productId' => 1
//             ];
    
//             array_push($datasend, $array);
            
//         }
//     }
    
//     var_dump(json_encode($datasend));
// }
