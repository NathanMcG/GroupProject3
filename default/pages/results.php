<?php
    require '../classes/SearchProducts.php';
    $title='Results';

    $variables = array();
    $productsTable = new DatabaseTable('products',null);

    if(isset($_GET['SRC'])){
        $search = new SearchProducts($productsTable->findAll());
        $variables['products'] = $search->search($_GET['SRC']);
    }
    else{
        $variables['products'] = $productsTable->findAll();
    }

    $content = loadTemplate('../templates/listProducts.html.php',$variables);