<?php

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
    $order = array('order_total' => $total,
        'order_date' = new DateTime()->format('Y-m-d'),
        'delivery_date' = new DateTime()->add(new DateInterval('P10D')->format('Y-m-d'),
        'user_id' = $_SESSION['id'],
        'order_address' = $_POST['address']
        'order_email' = $_POST['email']);

    $orderTable->insert($order);