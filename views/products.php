<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Products</h3>
            </div>
            <div class="panel-body">
                <?php foreach($products as $product) : ?>
                    <a href="<?php echo BASE_URL.'/products/'.str_replace(' ', '_', (strtolower($product))) ?>"><?php echo $product; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
        <?php if(isset($selected_product)) : ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $get_product; ?></h3>
                </div>
                <div class="panel-body">
                    <?php foreach($selected_product as $product_content) : ?>
                        <?php echo $product_content; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>