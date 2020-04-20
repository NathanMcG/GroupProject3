
<div class="ofg-section">
    <div class="top-section">
        <?php 
        for($i=0;$i<2;$i++){ ?>
        <div class="large-card">
            <table cellspacing="0" style="width: 100%;">
                <tr class="border_right">
                <td style="text-align: center; vertical-align: middle;"> <!--REFERENCE: https://stackoverflow.com/a/8603927-->
                    <a href="#"><img src="images/products/bottle.png" alt="product image"  width="150px" height="200px"></a>
                </td>   
                <td>
                <article>
                    <li><label><strong>Name: </strong><a href="">Alcohol</a></label></li>
                    <li><label><strong>Price: </strong> 16.00</label></li>
                    <li><label><strong>Brand: </strong> AAAAAAA</label></li>
                    <li><label><strong>Rating:</strong>
                    <?php ?>
                    </label></li>
                </article>
                </td>
                </tr>
            </table>
        </div>
        <?php }?>
    </div>
    <div class="bottom-section">
    <div class="list-products"><ul class="all-products">
        <?php
            $productsTable = new DatabaseTable('products',null);
            $products = $productsTable->findAll();
            array_reverse($products);
            for($i=0;$i<6;$i++){
                if(isset($products[$i])){
                    $products[$i]['link'] = 'product';
                    echo loadTemplate('../templates/productMini.html.php',$products[$i]);
                }
            }
        ?>
    </ul></div>
    </div>   

</div>