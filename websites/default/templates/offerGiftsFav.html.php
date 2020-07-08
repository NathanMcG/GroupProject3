
<div class="ofg-section">

    <h1 style="margin:auto;margin-bottom:20px;margin-top:30px;color:#f2b662;"><?=$title?></h1>

    <?php $i = 1;
    foreach($products as $product){
        $product['link'] = 'product';
        if($i % 7 == 1){ ?>
            <div class="top-section">
                <?=loadTemplate('../templates/productMedium.html.php',$product)?>
        <?php }
        if($i % 7 == 2){ ?>
                <?=loadTemplate('../templates/productMedium.html.php',$product)?>
            </div>
        <?php }
        if($i % 7 == 3){ ?>
            <div class="bottom-section" style="width:100%;">
                <div class="list-products"><ul class="all-products">
                    <?=loadTemplate('../templates/productMini.html.php',$product)?>
        <?php }
        if($i % 7 >= 4 && $i % 7 <= 6){
            echo loadTemplate('../templates/productMini.html.php',$product);
        }
        if($i % 7 == 0){ ?>
                    <?=loadTemplate('../templates/productMini.html.php',$product)?>
                </div></ul>
            </div>
        <?php }
        $i++;
    }?>
     

</div>