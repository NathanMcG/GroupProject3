<?php
    $title = 'Orders';

    $ordersTable = new DatabaseTable('orders','order_id');
    $orderItemsTable = new DatabaseTable('order_item','order_item_id');
    $orders = $ordersTable->findAll();


    foreach($orders as $key => $order){
        $orderItem = $orderItemsTable->find('order_id',$order['order_id'])[0];
        $orders[$key]['product_id'] = $orderItem['product_id'];
    }


    $variables['list'] = array_reverse($orders);

    $content = loadTemplate('../templates/listOrderItems.html.php',$variables);