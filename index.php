<?php
    get_header();
?>
<section class="px-2">
    <div class="container">
        <div class="row">
            <?php
                $arr = array("6aus49", "eurojackpot", "spiel77", "freiheitplus");
                foreach ($arr as $apikey) {
                    $response = wp_remote_get( 'https://api.lotto24.de/drawinfo/'. $apikey .'/jackpot' );
                    $body = wp_remote_retrieve_body( $response );
                    $data = json_decode($body);
                    echo '<div class="'.$apikey.' col-sm-12 col-md-6 col-lg-4 cards" id="'.$apikey.' "> 
                                <div class="w-100 d-flex">
                                    <div class="image d-inline-block">
                                        <img class="logo">
                                    </div>
                                    <div class="title d-inline-block">
                                        '. $data->lottery .'
                                    </div>
                                </div>
                                <div>
                                    <p class="description">
                                        '. $data->jackpots->WC_1.' </br>
                                        '. $data->jackpots->WC_2.' </br>
                                    </p>
                                </div>
                        </div>';
                };
            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>