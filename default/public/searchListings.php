<?php

    if(!isset($_GET['search'])){
        header('location: index.php');
    }

	require '../templates/loadTemplate.php';
	require '../templates/functions.php';
    $title = 'Product';
    $content = '';

    $products=findAll(pdo(),'products');
    $productList;
    
    foreach($products as $product){
        if($product['product_name'] == $_GET['search']){
            $productList[] = $product;
        }
    }

    foreach($products as $product){
        if(strpos($product['product_name'], $_GET['search']) !==false){
            $add = true;
            if(isset($productList)){
            foreach($productList as $item){
                if($item['product_id'] == $product['product_id']){
                    $add = false;
                }
            }}
            if($add == true){
                $productList[] = $product;
            }
        }

    }

    foreach($products as $product){
        if(strpos($product['product_description'], $_GET['search']) !==false){
            $add = true;
            if(isset($productList)){
            foreach($productList as $item){
                if($item['product_id'] == $product['product_id']){
                    $add = false;
                }
            }}
            if($add == true){
                $productList[] = $product;
            }
        }

    }

    foreach($products as $product){
        if(strpos($_GET['search'], $product['product_type']) !==false){
            $add = true;
            if(isset($productList)){
            foreach($productList as $item){
                if($item['product_id'] == $product['product_id']){
                    $add = false;
                }
            }}
            if($add == true){
                $productList[] = $product;
            }
        }

    }

    foreach($products as $product){
        if(strpos($_GET['search'], $product['brand']) !==false){
            $add = true;
            if(isset($productList)){
            foreach($productList as $item){
                if($item['product_id'] == $product['product_id']){
                    $add = false;
                }
            }}
            if($add == true){
                $productList[] = $product;
            }
        }

    }


    foreach($productList as $product){
        $content.= $product['product_name'];
    }
	require '../templates/layout.html.php';