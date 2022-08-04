<?php
    get_header();
?>


<?php

$response = wp_remote_get( 'https://api.lotto24.de/drawinfo/6aus49/jackpot' );
$body = wp_remote_retrieve_body( $response );

$data = json_decode($body);
var_dump($data);

echo $data->lottery

?>

<?php get_footer(); ?>