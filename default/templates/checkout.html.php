<div class="checkout">
<?php

    $list = array();
    $productTable = new DatabaseTable('products',null);
    $total = 0;

    foreach($_SESSION['basket'] as $basketItem){

    $product = $productTable->find('product_id',$basketItem['product_id'])[0];
    $listItem = array('product_id' => $basketItem['product_id'],
        'brand' => $product['product_brand'],
        'product_name' => $product['product_name'],
        'product_price' => $product['product_price'],
        'quantity' => $basketItem['quantity'],
        'gift' => $basketItem['gift']);
    $list[] = $listItem;

    $total = $total + ($product['product_price']*$basketItem['quantity']);

    } 

    $variables = array('list' => $list);
    echo loadTemplate('../templates/listOrderItems.html.php',$variables);

?>

</div>

<?php

    $variables = array('total' => $total);
    echo loadTemplate('../templates/checkoutPayment.html.php',$variables);

?>