<li style="width: 100%; align-self: flex-start;" >
    <div style="width:100px;height:100px">
    <img src="/images/products/<?php
    if(!file_exists('images/products/' . $product_id . '.png'))
        echo 'bottle';
    else
        echo $product_id;
    ?>.png" alt="product image" class="img-product" style="max-width:100px;max-height:100px;">
    </div>

    <h2 style="width: 2%;margin:5px;"><?=$order_id?></h2>

    <h2 style="width: 40%;margin:5px;"><?php if(isset($brand)){echo $brand . ' ' . $product_name;}else echo $order_email;?></h2>

    <article>
        <?php
            if(isset($order_total)){?>
                <label><strong>Total Price:</strong> £<?=$order_total?></label>
                <label><strong>Delivery Address:</strong> <?=str_replace(',','<br>',$order_address)?></label> <?php
            }
            else{?>
                <label><strong>Individual Price:</strong> £<?=$product_price?></label>
                <label><strong>Total Price:</strong> £<?php echo number_format(($product_price * $quantity),2)?></label>
                <label><strong>Quantity:</strong> <?=$quantity?></label>
                <?php if($gift) echo '<label><strong>Gift:</strong>&#x2714</label>';
            }

            if(isset($order_date)&&isset($delivery_date)){ ?>
                <label><strong>Order Date:</strong> <?=$order_date?></label>
                <label><strong>Delivery Date:</strong> <?=$delivery_date?></label>
            <?php } ?>
        
    </article>

    <?php if(isset($order_total)){?>

        <article style="width: 15%;height: 150px;margin-left: 20px;position: absolute;right: 10px;">

            <button onCLick="window.location.href='mailto:<?=$order_email?>?Subject=Order%20place%20on%20<?=$order_date?>';" style="width: 100%;height: 40%;margin-top: 3px;margin-bottom: 3px;color: #fff;border: 1px solid #f2b662;background-color: #c93d67;"> Send Email </button>

        </article>
    
    <?php } ?>


</li>