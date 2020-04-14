<li>
    <img src="images/products/<?php
    if(!file_exists('images/products/' . $product_id . '.png'))
        echo 'bottle';
    else
        echo $product_id;
    ?>.png" alt="product image" class="img-product" width="100px" height="100px">

    <h2><?=$brand?> <?=$product_name?></h2>

    <article>
        
        <label><strong>Price:</strong> £<?=$product_price?></label>
        <label><strong>Quantity:</strong> <?=$quantity?></label>
        <?php if($gift) echo '<label><strong>Gift:</strong>&#x2714</label>';?>
        <?php if(isset($order_date)&&isset($delivery_date)){ ?>
            <label><strong>Order Date:</strong> <?=$order_date?></label>
            <label><strong>Delivery Date:</strong> <?=$delivery_date?></label>
        <?php } ?>
    </article>
</li>