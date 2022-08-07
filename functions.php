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


// Creating POST to add products on database

add_filter('upload_mimes', 'add_file_types_to_uploads');

add_action( 'admin_post_nopriv_add_product', 'process_add_product' );

add_action( 'admin_post_add_product', 'process_add_product' );

function process_add_product(){

    GLOBAL $wpdb;

    $params = $_POST;

    /*create table if not exists*/

    $table_name = $wpdb->prefix.'custom_add_product';

    $query = $wpdb->prepare( 'SHOW TABLES LIKE %s', $wpdb->esc_like( $table_name ) );

    if ( ! $wpdb->get_var( $query ) == $table_name ) {

        $sql = "CREATE TABLE {$table_name} (
        productId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        displayName VARCHAR(255) NOT NULL,
        apiKey VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if($wpdb->query($sql)){
        submitsForm($table_name,$params);
    }


}else{
    submitsForm($table_name,$params);
}

/*create table if not exists*/

die;

}

function submitsForm($table_name, $params){

    GLOBAL $wpdb;

    $curTime = date('Y-m-d H:i:s');

    $query = "INSERT INTO {$table_name}(displayName, apiKey,created_at) VALUES('{$params['displayName']}','{$params['apiKey']}','{$curTime}')"; 

    if($wpdb->query($query)){
        wp_redirect($params['base_page'].'?success=1'); 
    }else{
        wp_redirect($params['base_page'].'?error=1'); 
    }
}