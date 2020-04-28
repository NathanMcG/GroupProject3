<div style="width: 100%;">
    <div class="slideshow">
<?php
    $variables = array();
    echo loadTemplate('../templates/imageSlider.html.php',$variables);
?>
</div>
<div>
    <h1> Recently added products: </h1>
    <p></p>
    <div class="list-products"><ul class="all-products">
        <?php
            $productsTable = new DatabaseTable('products',null);
            $products = $productsTable->findAll();
            array_reverse($products);
            for($i=0;$i<5;$i++){
                if(isset($products[$i])){
                    $products[$i]['link'] = 'product';
                    echo loadTemplate('../templates/productMini.html.php',$products[$i]);
                }
            }
        ?>
    </ul></div>
</div>
</div>