
<div class="alchol-prod-section">
    <section class="alcohol-card">
        <div class="alcohol-image">
            <img src="images/products/<?php
            if(!file_exists('images/products/' . $product_id . '.png'))
                echo 'bottle';
            else
                 echo $product_id;
            ?>.png" alt="product image" class="img-product" width="172px" height="240px">
        </div>
        <div class="alcohol-reviews">
            <h3>Reviewed:</h3>
                <?php $variables = array('product_id' => $product_id);
                echo loadTemplate('../templates/stars.html.php',$variables); ?>
        </div>
    </section>





    <section class="alcohol-info">
        <h3><u><?=$product_brand . " - " . $product_name .", ". $product_volume . $product_volume_unit?></u></h3>
        <ul style="padding: 10pt;">
            <p><?=$product_description?></p>
        </ul>
        <table class="table">
            <tr><th>Package Dimensions</th></tr>
            <tr><td><?=$product_dimensions?></td></tr>
            <tr><th>Volume</th></tr>
            <tr><td><?php echo 0 + $product_volume?></td></tr>
            <tr><th>Alcohol Content</th></tr>
            <tr><td><?php echo 0 + $product_alcohol_content?>% Vol</td></tr>
            <tr><th>Brand</th></tr>
            <tr><td><?=$product_brand?></td></tr>
            <tr><th>Offer</th></tr>
            <tr><td><?php echo 0 + $product_discount?>% OFF</td></tr>
        </table>
    </section>





    <section class="add-to-order">
        <div class="add-outer">
            <h2><u>Add to Order</u></h2>
            <div class="add-inner">
                <li>Price: £<?=$product_price?></li>
                <li>Get it in 5 - 10 days free delivery.</li>
                <li>Or next day delivery</li>
            </div>
            <div class="add-form">
                <form action="?page=product&PID=<?=$_GET['PID']?>" method="POST">
                    <ul>
                        <li>
                            <label>Quantity</label>
                            <input type="text" name="quantity" class="basket-no"  value="1">
                        </li>
                        <li>
                            <label>Add Gift Options</label>
                            <input type="checkbox"  name="gift" class="check-box">
                        </li>
                        <li>
                            <input type="submit" name="add_to_basket" value="Add to Basket" class="btn-add" />
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </section>
 </div>