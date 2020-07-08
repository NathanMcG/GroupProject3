<?php

    function sortOffers($a,$b){
        $a = $a['product_discount'];
        $b = $b['product_discount'];

        if ($a == $b) {
            return 0;
        }
        return ($a > $b) ? -1 : 1;
    }

    $productsTable = new DatabaseTable('products',null);
    $products = $productsTable->findAll();

    foreach($products as $key => $product){
        if($product['product_discount'] == 0){
            unset($products[$key]);
        }
    }

    usort($products,'sortOffers');

    $title = 'Offers';;
    $content = loadTemplate('../templates/offerGiftsFav.html.php',array('products' => $products,'title' => 'Biggest Discounts'));