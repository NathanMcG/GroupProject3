<?php
    require '../fileUpload.php';
    $title = "New Product";
    $variables = array();
    $content = loadTemplate('../templates/addProducts.html.php',$variables);

    if(isset($_POST['product'])){
        uploadImage('adverts','01');
    }
    