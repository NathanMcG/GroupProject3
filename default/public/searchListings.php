<?php
    require 'functions.php';
    $title = 'RESULTS';

    $products = pdo()->query('SELECT * FROM products WHERE product_name LIKE "%' . $_GET['SRCH'] . '%"');

    foreach($products as $product){
        echo $product['product_name'];
    }

    $content = $_GET['SRCH'];
    require "../templates/layout.html.php";
?>