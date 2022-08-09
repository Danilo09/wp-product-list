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