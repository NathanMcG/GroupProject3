<?php
    $productsTable = new DatabaseTable('products',null);
    $product = $productsTable->find('product_id',$_GET['PID']);

    $title = $product[0]['product_name'];
    $variables = array('product'=>$product[0]);
    $content = loadTemplate('../templates/product.html.php',$variables);

    if(isset($_POST['add_to_basket'])){
        $newBasketItem = array('product_id' => $_GET['PID'],
                                'quantity' => $_POST['quantity']);

        $_SESSION['basket'][] = $newBasketItem;
    }