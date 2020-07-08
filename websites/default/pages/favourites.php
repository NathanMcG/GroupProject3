<?php

  function sortFavourites($a,$b){
    if ($a == $b) {
        return 0;
    }
    return ($a > $b) ? -1 : 1;
  }

  $orderItemsTable = new DatabaseTable('order_item',null);
  $orderItems = $orderItemsTable->findAll();
  $productsList = array();

  foreach($orderItems as $orderItem){
    if(!isset($productsList[$orderItem['product_id']])){
      $productsList[$orderItem['product_id']] = array('product_id' => $orderItem['product_id'],'quantity' => 1);
    }
    else{
      $productsList[$orderItem['product_id']]['quantity']++;
    }
  }

  usort($productsList,'sortFavourites');

  $productsTable = new DatabaseTable('products',null);
  foreach($productsList as $product){
    $products[] = $productsTable->find('product_id',$product['product_id'])[0];
  }


  $title = 'Favourites';
  $content = loadTemplate('../templates/offerGiftsFav.html.php',array('products' => $products,'title' => 'Favourites'));

?>
