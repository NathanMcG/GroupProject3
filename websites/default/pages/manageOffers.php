<?php
    $title = 'Offers';
    $variables = array();

    //if form was user submitted
    if(isset($_POST['sub']) && $_POST['sub'] == 'sub'){

        $variables = $_POST['offer'];

        $productsTable = new DatabaseTable('products','product_id');

        //Collects affected products
        if($_POST['offer']['where'] == 'classification_id'){
            $typesTable = new DatabaseTable('types','type_id');
            $types = $typesTable->find('classification_id',$_POST['offer']['is']);
            foreach($types as $type){
                $tempProducts = $productsTable->find('type_id',$type['type_id']);
                foreach($tempProducts as $tempProduct){
                    $products[] = $tempProduct;
                }
            }
        }
        else{
            $products = $productsTable->find($_POST['offer']['where'],$_POST['offer']['is']);
        }

        //Performs change on products
        if($_POST['offer']['discount'] == 'remove'){

            foreach($products as $product){
                $product['product_discount'] = 0;
                $product = saveFormat($product);
                $productsTable->save($product);
                $variables['message'] = 'Discounts removed from Products';
            }

        }
        elseif($_POST['offer']['discount'] == '' || !is_numeric($_POST['offer']['discount'])){

            $variables['message'] = 'Invalid Discount';

        }
        else{

            foreach($products as $product){
                $product['product_discount'] = $_POST['offer']['discount'];
                $product = saveFormat($product);
                $productsTable->save($product);
                $variables['message'] = 'Discounts removed from Products';
            }

        }
    }


    $content = loadTemplate('../templates/pageManageOffers.html.php',$variables);

    function saveFormat($product){
        for($i=0;$i<11;$i++){
            unset($product[$i]);
        }
        return $product;
    }