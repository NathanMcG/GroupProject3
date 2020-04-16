
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

    <?php
        if(isset($_POST['detailsConf'])){
            $orderDetails = $_POST['order_details'];
        }
    ?>

    <form action="?page=checkout" method="POST" style="max-width: 60%;">

        <div class="inner-form">
            <label for="address1">First Name: </label>
            <input type="text" name="orderDetails[first_name]" id="address1" required value="" />
        </div>

        <div class="inner-form">
            <label for="address1">Surname: </label>
            <input type="text" name="orderDetails[address1]" id="address1" required value="" />
        </div>

        <div class="inner-form">
            <label for="address1">Address: </label>
            <input type="text" name="orderDetails[address1]" id="address1" required value="" />
        </div>

        <div class="inner-form">
            <label for="address2"></label>
            <input type="text" name="orderDetails[address2]" id="address2" value="" />
        </div>

        <div class="inner-form">
            <label for="address1">Town/City: </label>
            <input type="text" name="orderDetails[address1]" id="address1" required value="" />
        </div>

        <div class="inner-form">
            <label for="address1">Postcode: </label>
            <input type="text" name="orderDetails[address1]" id="address1" required value="" />
        </div>

        <div class="inner-formBtn">
            <input type="submit" name="detailsConf" value="Confirm Order Details" />
        </div>

    </form>
            
        <?php
            $date = new DateTime();
            $currDate = $date->format('d/m/Y');
            $date->add(new DateInterval('P10D'));
            $deliverDate = $date->format('d/m/Y');
        ?>

    <div class="paypal">
        <h3 style="color: #ffff; padding: 10pt; max-width: 60%;"> Total: <?=$total?></h3>
        <h3 style="color: #ffff; padding: 10pt; padding-top: 0; max-width: 60%;"> Order Date: <?=$currDate?></h3>
        <h3 style="color: #ffff; padding: 10pt; padding-top: 0; max-width: 60%;"> Expected on or before: <?=$deliverDate?></h3>
        <p style="color: #ffff; padding-bottom: 10pt; max-width: 60%;"> By continuing with payment you confirm that you agree to our <a href="terms.html" target="_blank" style="color: #f2b662;">Terms and Conditions</a>.

        <?php
            $variables = array('total' => $total);
            if(isset($_POST['detailsConf']))
                echo loadTemplate('../templates/paypal.html.php',$variables);
        ?>
        </div>

    </div>