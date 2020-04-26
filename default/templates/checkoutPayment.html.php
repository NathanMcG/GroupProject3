<div class="checkout">

<?php
        if(isset($_POST['detailsConf'])){
            $order_details = $_POST['order_details'];
        }
        else{
            $usersTable = new DatabaseTable('users',null);
            $user = $usersTable->find('user_id',$_SESSION['id'])[0];
            $order_details = array('email' => $user['user_email'],
                'firstname' => $user['user_firstname'],
                'surname' => $user['user_lastname'],
                'address1' => $user['user_address_line_1'],
                'address2' => $user['user_address_line_2'],
                'postcode' => $user['user_postcode']);
        }
    ?>

    <form action="/hiddenCreateOrder" method="POST" id="order">
        <input type="hidden" name="order[order_address]" value="<?=$order_details['firstname']?> <?=$order_details['surname']?>,<?=$order_details['address1']?>,<?=$order_details['address2']?>,<?=$order_details['postcode']?>" />
        <input type="hidden" name="order[order_email]" value="<?=$order_details['email']?>" />
    </form>

    <form action="/checkout" method="POST" style="max-width: 60%;">

        <div class="inner-form">
            <label for="email">Email: </label>
            <input type="text" name="order_details[email]" id="email" required value="<?=$order_details['email']?>" />
        </div>

        <div class="inner-form">
            <label for="firstname">First Name: </label>
            <input type="text" name="order_details[firstname]" id="firstname" required value="<?=$order_details['firstname']?>" />
        </div>

        <div class="inner-form">
            <label for="surname">Surname: </label>
            <input type="text" name="order_details[surname]" id="surname" required value="<?=$order_details['surname']?>" />
        </div>

        <div class="inner-form">
            <label for="address1">Address: </label>
            <input type="text" name="order_details[address1]" id="address1" required value="<?=$order_details['address1']?>" />
        </div>

        <div class="inner-form">
            <label for="address2"></label>
            <input type="text" name="order_details[address2]" id="address2" value="<?=$order_details['address2']?>" />
        </div>

        <div class="inner-form">
            <label for="postcode">Postcode: </label>
            <input type="text" name="order_details[postcode]" id="postcode" required value="<?=$order_details['postcode']?>" />
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
        <h3 style="color: #ffff; padding: 10pt; max-width: 60%;"> Total: £<?=$total?></h3>
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