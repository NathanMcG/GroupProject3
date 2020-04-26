<?php
    require '../classes/SearchProducts.php';
    $title='Results';

    $variables = array();
    $productsTable = new DatabaseTable('products',null);

    if(isset($_GET['SRC'])){
        $search = new SearchProducts($productsTable->findAll());
        $variables['products'] = $search->searchTerm($_GET['SRC']);
    }
    elseif(isset($_GET['CID'])){
        $search = new SearchProducts($productsTable->findAll());
        $variables['products'] = $search->searchClassification($_GET['CID']);
    }
    elseif(isset($_GET['TID'])){
        $variables['products'] = $productsTable->find('type_id',$_GET['TID']);
    }
    else{
        $variables['products'] = $productsTable->findAll();
    }

    if(isset($_POST['filter'])){

        $listProducts = array();

        foreach($variables['products'] as $key => $product){
            $score = 0;

            $type = (new DatabaseTable('types',null))->find('type_id',$product['type_id'])[0];
            if(isset($_POST['filter']['classification']) && in_array($type['classification_id'],$_POST['filter']['classification'])){
                $score++;
            }
            elseif(isset($_POST['filter']['type']) && in_array($product['type_id'],$_POST['filter']['type'])){
                $score++;
            }
            elseif(!(isset($_POST['filter']['classification']) || isset($_POST['filter']['type']))){
                $score++;
            }

            if(isset($_POST['filter']['price'])){
                foreach($_POST['filter']['price'] as $price){
                    $price = explode(',',$price);
                    if($product['product_price'] >= $price[0] && $product['product_price'] <= $price[1]){
                        $score++;
                    }
                }
            }
            else{
                $score++;
            }

            if(isset($_POST['filter']['brand'])){
                foreach($_POST['filter']['brand'] as $brand){
                    if($brand == $product['product_brand']){
                        $score++;
                    }
                }
            }
            else{
                $score++;
            }

            if(isset($_POST['filter']['volume'])){
                foreach($_POST['filter']['volume'] as $volume){
                    $volume = explode(',',$volume);
                    if($product['product_volume_unit'] == 'L'){
                        $volume[0] = $volume[0]/1000;
                        $volume[1] = $volume[1]/1000;
                    }
                    if($product['product_volume'] >= $volume[0] && $product['product_volume'] <= $volume[1]){
                        $score++;
                    }
                }
            }
            else{
                $score++;
            }

            if($score == 4){
                $listProducts[] = $variables['products'][$key];
            }
        }

        $variables['products'] = $listProducts;

    }

    $variables['link'] = 'product';
    $content = loadTemplate('../templates/listProducts.html.php',$variables);