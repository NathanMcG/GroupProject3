<?php

    require '../isUser.php';

    $title = 'Your Orders';

    $ordersTable = new DatabaseTable('orders','order_id');
    $order_itemTable = new DatabaseTable('order_item',null);
    $productsTable = new DatabaseTable('products',null);
    $list = array();

    $orders = $ordersTable->find('user_id',$_SESSION['id']);
    foreach($orders as $order){
        $orderItems = $order_itemTable->find('order_id',$order['order_id']);
        foreach($orderItems as $orderItem)
        {
            $product = $productsTable->find('product_id',$orderItem['product_id'])[0];
            $listItem = array('product_id' => $orderItem['product_id'],
                'brand' => $product['product_brand'],
                'product_name' => $product['product_name'],
                'product_price' => $product['product_price'],
                'quantity' => $orderItem['quantity'],
                'gift' => $orderItem['gift']);
            $list[] = $listItem;
        }
    }

    $variables = array('list' => $list,
        'review' => true);
    

    $content = loadTemplate('../templates/listOrderItems.html.php',$variables);