<?php

    require '../isUser.php';

    $title = 'Your Orders';

    if(isset($_POST['review'])){
        $reviewsTable = new DatabaseTable('reviews','review_id');
        $reviewsTable->save($_POST['review']);
    }

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
            $listItem = array('order_id' => $orderItem['order_id'],
                'product_id' => $orderItem['product_id'],
                'brand' => $product['product_brand'],
                'product_name' => $product['product_name'],
                'product_price' => $product['product_price'],
                'quantity' => $orderItem['quantity'],
                'gift' => $orderItem['gift'],
                'order_date' => $order['order_date'],
                'delivery_date' => $order['delivery_date']);
            $list[] = $listItem;
        }
    }

    $variables = array('list' => $list,
        'review' => true);
    

    $content = loadTemplate('../templates/listOrderItems.html.php',$variables);