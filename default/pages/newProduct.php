<?php
    require '../fileUpload.php';
    $title = "New Product";
    $variables = array();
    $content = loadTemplate('../templates/addProducts.html.php',$variables);

    if(isset($_POST['product'])){

        $_POST['product']['volume'] = $_POST['volume'] . $_POST['unit'];

        if(isset($_GET['PID'])){
            $productsTable = new DatabaseTable('products',$_GET['PID']);
        }
        else{
            $productsTable = new DatabaseTable('products',null)
        }

        $productsTable->save($_POST['products']);

        if(isset($_GET['PID'])){
            uploadImage('products',$_GET['PID']);
        }
        else{
            $products = $productsTable->findAll();
            uploadImage('products',$products[0]['product_id']);
            $productsTable = new DatabaseTable('products',null)
        }
        

        var_dump($_POST);
    }
    