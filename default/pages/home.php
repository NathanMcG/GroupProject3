<?php
    $title = 'Home';
    $variables = array();
    $content = loadTemplate('../templates/imageSlider.html.php',$variables);
    $content.= '<div class="list-products"><ul class="all-products">';

    $productsTable = new DatabaseTable('products',null);
    $products = $productsTable->findAll();
    for($i=0;$i<6;$i++){
        if(isset($products[0]))
        $content.= loadTemplate('../templates/miniProduct.html.php',$products[0]);
    }
    $content.='</ul></div>';