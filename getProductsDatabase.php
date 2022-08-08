<?php 
    include_once('connection.php');
    $sql="SELECT * FROM wp_custom_add_product";
    $result=mysqli_query($conn, $sql);
?>
<section>
    <h2 class="title-block">CARDS CREATED BY GET DATABASE</h2>
    <div class="container">
        <div class="row">
        <?php 
            while ($rows=mysqli_fetch_assoc($result)) 
            {
        ?>
                <div class="<?php echo $rows['apiKey']; ?>  col-sm-12 col-md-6 col-lg-4 cards" id="<?php echo $rows['apiKey']; ?>"> 
                    <div class="w-100 d-flex">
                        <div class="image d-inline-block">
                            <img class="logo" src="<?php echo $image[0]; ?>">
                        </div>
                        <div class="title d-inline-block">
                            <?php echo $rows['apiKey']; ?>
                        </div>
                    </div>
                    <div>
                        <p class="description">
                        <?php echo $rows['displayName']; ?> 
                        </p>
                    </div>
                </div>                            
                <?php
                }
            ?>
        </div>
    </div>
</section>
