<?php
    get_header();
?>
<section class="px-2">
    <h2 class="title-block">CARDS CREATED BY GET URL</h2>
    <div class="container">
        <div class="row">
            <?php
                $arr = array("6aus49", "eurojackpot", "freiheitplus", "traumhauslotterie");
                foreach ($arr as $apikey) {
                    $response = wp_remote_get( 'https://api.lotto24.de/drawinfo/'. $apikey );
                    $body = wp_remote_retrieve_body( $response );
                    $data = json_decode($body);
                    echo '<div class="'.$apikey.' col-sm-12 col-md-6 col-lg-4 cards" id="'.$apikey.' "> 
                                <div class="w-100 d-flex">
                                    <div class="image d-inline-block">
                                        <div class="logo"></div>
                                    </div>
                                    <div class="title d-inline-block">
                                        '. $data->lottery .'
                                    </div>
                                </div>
                                <div>
                                    <p class="description">
                                        '. $data->currency.' </br>
                                        '. $data->quotas->WC_1.' </br>
                                    </p>
                                </div>
                        </div>';
                };
            ?>
        </div>
    </div>
</section>
<section>
    <h2 class="title-block">CARDS CREATED BY POST WORDPRESS </h2>
    <div class="container">
        <div class="row">
        <?php 
            if (have_posts()) :
                while ( have_posts() ) : the_post();
                    if (has_post_thumbnail( $post->ID )):
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'image-size');
                    endif; 
        ?>
                <div class="<?php the_title(); ?> col-sm-12 col-md-6 col-lg-4 cards" id="<?php the_title(); ?>"> 
                    <div class="w-100 d-flex">
                        <div class="image d-inline-block">
                            <img class="logo" src="<?php echo $image[0]; ?>">
                        </div>
                        <div class="title d-inline-block">
                            <?php the_title(); ?>
                        </div>
                    </div>
                    <div>
                        <p class="description">
                            <?php echo (get_the_excerpt()); ?>
                        </p>
                    </div>
                </div>                            
                
        <?php     
                endwhile;
            endif;
        ?>
        </div>
    </div>
</section>
           

			<?php 
                $productName = sanitize_text_field( $_POST["rt-productName"] );
                $productDescription = sanitize_text_field( $_POST["rt-productDescription"] );

                if ( isset( $_POST['rt-submitted'] ) ) {  
                    $response = wp_remote_post( $url, array(
                        'method' => 'POST',
                        'timeout' => 45,
                        'redirection' => 5,
                        'httpversion' => '1.0',
                        'blocking' => true,
                        'headers' => array(),
                        'body' => array( 'productName' => $productName, 'productDescription' => $productDescription ),
                        'cookies' => array()
                        )
                    );
                    
                    if ( is_wp_error( $response ) ) {
                       $error_message = $response->get_error_message();
                       echo "Something went wrong: $error_message";
                    } else {
                       echo 'Response:<pre>';
                       print_r( $response );
                       echo '</pre>';
                    }
                }
                
            ?>


<?php get_footer(); ?>