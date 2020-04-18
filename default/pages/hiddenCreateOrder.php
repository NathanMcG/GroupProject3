<?php

    if(isset($_POST['order'])){

    $orderItems = array();
    $total = 0;
    $productTable = new DatabaseTable('products',null);

    foreach($_SESSION['basket'] as $basketItem){

        $orderItem = array('product_id' => $basketItem['product_id'],
            'quantity' => $basketItem['quantity']);
        if($basketItem['gift']){
            $orderItem['gift'] = 1;
        }

        $orderItems[] = $orderItem;

        $total = $total + ($basketItem['quantity'] * ($productTable->find('product_id',$basketItem['product_id'])[0]['product_price']));

    }

    $orderTable = new DatabaseTable('orders',null);

    $orderDate = new DateTime();
    $orderDate = $orderDate->format('Y-m-d');
    $delivery_date = new DateTime();
    $delivery_date->add(new DateInterval('P10D'));
    $delivery_date = $delivery_date->format('Y-m-d');

    $order = array('order_total' => $total,
        'order_date' => $orderDate,
        'delivery_date' => $delivery_date,
        'user_id' => $_SESSION['id'],
        'order_address' => $_POST['order']['order_address'],
        'order_email' => $_POST['order']['order_email']);

    $orderTable->insert($order);

    $order = array_reverse($orderTable->find('user_id',$_SESSION['id']))[0];
    $orderItemTable = new DatabaseTable('order_item',null);

    foreach($orderItems as $orderItem){

        $orderItem['order_id'] = $order['order_id'];
        $orderItemTable->insert($orderItem);
        
    }

    unset($_SESSION['basket']);

    }

?>

<script>location.replace("?page=orders");</script>