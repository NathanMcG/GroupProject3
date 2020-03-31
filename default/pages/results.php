<?php
    $title='Results';
    $variables = array();

    $productsTable = new DatabaseTable('products',null);

    if(isset($_GET['SRC'])){

    }
    else{
        $variables['products'] = $productsTable->findAll();
    }

    $content = loadTemplate('../templates/listProducts.html.php',$variables);