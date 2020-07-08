<?php $link = '/' . $link . '/?PID=' . $product_id; ?>


<div class="large-card">
    <table cellspacing="0" style="width: 100%;">
        <tr class="border_right">
            <td style="text-align: center; vertical-align: middle;"> <!--REFERENCE: https://stackoverflow.com/a/8603927-->
                <a href="<?=$link?>"><img src="/images/products/<?php
    
                    if(!file_exists('images/products/' . $product_id . '.png'))
                        echo 'bottle';
                    else
                        echo $product_id;

                ?>.png" alt="product image"  style="max-width:150px;max-height:200px;"></a>
            </td>   
            <td>
                <article>
                    <li><label><strong>Name: </strong><a href="<?=$link?>" style="color:#ffff;"><?=$product_name?></a></label></li>
                    <li><label><strong>Price: </strong>£<?=$product_price?></label></li>
                    <li><label><strong>Brand: </strong><?=$product_brand?></label></li>
                    <li><label><strong>Discount: </strong><?=$product_discount?>%</label></li>
                    <li><label><strong>Rating:</strong><?=loadTemplate('../templates/stars.html.php',array('product_id' => $product_id))?></label></li>
                </article>
            </td>
        </tr>
    </table>
</div>