<div class="checkout-area">
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
    <h2> Total: <?=$total?></h2>
    <div id="paypal-button"></div>
        <script src="https://www.paypalobjects.com/api/checkout.js"></script>
        <script>
            paypal.Button.render({
            // Configure environment
                env: 'sandbox',
                client: {
                    sandbox: 'AcJ43Pmu32jG__IfqMrBm9c7WJ-xYleTo7oeZ8LlIwOYB43ZFX_kKhD09orxi2dF5QfKpOTHoV9DsvLc',
                    production: 'EAbcRzbItJX5oRsAoag0M-svhucCSUQ_Y0rjiC55vGitojs09PZ2u44gSsxx1FSfThgsEXGj6XeY20V2'
                },
                // Customize button (optional)
                locale: 'en_US',
                style: {
                    size: 'small',
                    color: 'gold',
                    shape: 'pill',
                },

                // Enable Pay Now checkout flow (optional)
                commit: true,

                // Set up a payment
                payment: function(data, actions) {
                    return actions.payment.create({
                        transactions: [{
                            amount: {
                            total: '<?=$total?>',
                            currency: 'GBP'
                            },
                            payment_options: {
                                item_list: {
                                    items: [
                                        <?php
                                            foreach($_SESSION['basket'] as $basketItem){
                                                $product = $productTable->find('product_id',$basketItem['product_id'])[0];?>
                                            
                                            {
                                                name: '<?=$product['brand']?> <?=$product['product_name']?>',
                                                quantity: '<?=$basketItem['quantity']?>',
                                                price: '<?php echo ($product['product_price'] * $basketItem['quantity']) ?>',
                                                currency: 'GBP'
                                            },

                                            <?php } ?>
                                    ]
                                }
                            }
                        }]
                    });
                },
                // Execute the payment
                onAuthorize: function(data, actions) {
                    return actions.payment.execute().then(function() {
                    // Show a confirmation message to the buyer
                        window.alert('Thank you for your purchase!');
                        confirm();
                    });
                }
            }, '#paypal-button');



            function confirm() {
            // function below will run clear.php?h=michael
            $.ajax({
                type: "POST",
                url: "?page=orders" ,
                data: { authorized: "true" },
                success : function() { 

                    // here is the code that will run on client side after running clear.php on server

                    // function below reloads current page
                    //location.reload();

                }
            });
        }




        </script>

    </div>
</div>