
    <div class="checkout">
        <?php

            $list = array();
            $productTable = new DatabaseTable('products',null);
            $total = 0;

            foreach($_SESSION['basket'] as $basketItem){

                $product = $productTable->find('product_id',$basketItem['product_id'])[0];
                $listItem = array('product_id' => $basketItem['product_id'],
                    'brand' => $product['brand'],
                    'product_name' => $product['product_name'],
                    'product_price' => $product['product_price'],
                    'quantity' => $basketItem['quantity'],
                    'gift' => $basketItem['gift'],);
                $list[] = $listItem;

                $total = $total + ($product['product_price']*$basketItem['quantity']);

            }

            $variables = array('list' => $list);
            echo loadTemplate('../templates/listOrderItems.html.php',$variables);
        ?>
    </div>
    <div class="checkout">
    <h3 style="color: #ffff; padding: 10pt;"> Total: <?=$total?></h3>
    <h3 style="color: #ffff; padding: 10pt; padding-top: 0;"> Order Date: </h3>
    <h3 style="color: #ffff; padding: 10pt; padding-top: 0;"> Expected on or before:</h3>
    <p style="color: #ffff; padding-bottom: 10pt; max-width: 60%;"> By continuing with payment you confirm that you agree to our <a href="terms.html" target="_blank" style="color: #f2b662;">Terms and Conditions</a>.

        <?php
            $variables = array('total' => $total);
            echo loadTemplate('../templates/paypal.html.php',$variables);
        ?>

    </div>