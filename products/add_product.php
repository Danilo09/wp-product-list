<section>
<h2 class="title-block">ADD MORE PRODUCTS? </h2>
    <div class="container">
        <div class="row mx-0 px-0">
            <?php if(isset($_GET['success'])): ?>
                <div class="alert alert-success">
                    <h5>Congrats! Your Product Submitted Successfully.</h5>
                </div>
            <?php endif; ?>

            <?php if(isset($_GET['error'])): ?>
                <div class="alert alert-danger">
                    <h5>Sorry! Unable to submit the product.</h5>
                </div>
            <?php endif; ?>

            <form name="add_product" method="POST" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" enctype="multipart/form-data" autocomplete="off" accept-charset="utf-8">
                <div class="form-add-product">
                    <div class="form-add-product__key">
                        <label>
                            API key
                            <input type="text" name="apiKey" id=apiKey" required="">
                        </label>
                    </div>
                    
                    <div class="form-add-product__name">
                        <label>
                            Display Name
                            <input type="text" name="displayName" id="displayName" required="">
                        </label>
                    </div>

                    <input type="hidden" name="action" value="add_product">

                    <input type="hidden" name="base_page" value="<?php echo home_url( $wp->request ); ?>">

                    <div class="mt-3">
                        <button type="submit" name="submitProduct" class="submitProduct">
                            Submit
                        </button>
                    </div>
                </div>

            </form>
            <!-- new registeration -->
        </div>
    </div>

</section>
