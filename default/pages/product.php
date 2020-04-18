<?php
    $productsTable = new DatabaseTable('products',null);
    $product = $productsTable->find('product_id',$_GET['PID']);

    $title = $product[0]['product_name'];

    if(isset($_POST['add_to_basket'])){
        $newBasketItem = array('product_id' => $_GET['PID'],
                                'quantity' => $_POST['quantity']);

        if(isset($_POST['gift'])){
            $newBasketItem['gift'] = true;
        }
        else{
            $newBasketItem['gift'] = false;
        }

        $_SESSION['basket'][] = $newBasketItem;
    }

    
    $content = loadTemplate('../templates/productLarge.html.php',$product[0]);