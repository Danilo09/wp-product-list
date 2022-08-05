<?php
    get_header();
?>

<div class="container">
    <div class="row">
        teste
 

<?php
$arr = array("6aus49", "eurojackpot", "spiel77", "freiheitplus");

foreach ($arr as $apikey) {
    $response = wp_remote_get( 'https://api.lotto24.de/drawinfo/'. $apikey .'/jackpot' );
    $body = wp_remote_retrieve_body( $response );
    $data = json_decode($body);

    echo $data->lottery . '<br>';
};


// $response = wp_remote_get( 'https://api.lotto24.de/drawinfo/6aus49/jackpot' );
// $body = wp_remote_retrieve_body( $response );
// $data = json_decode($body);
// echo $data->lottery
?>

<?php get_footer(); ?>