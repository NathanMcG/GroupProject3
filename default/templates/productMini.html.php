<?php
    if($link == 'productForm'){
        $link = '';
    }
    else{
        $link = '?page=' . $link . '&PID=' . $product_id;
    }
?>



<li>
    <a href="<?=$link?>"><img src="images/products/<?php
    
    if(!file_exists('images/products/' . $product_id . '.png'))
        echo 'bottle';
    else
        echo $product_id;

    ?>.png" alt="product image" class="img-product" max-width="100px" height="100px"></a>
        <article>
            <label><strong>Name: </strong><a href="<?=$link?>"><?=$product_name?></a></label>
            <label><strong>Price: </strong> <?=$product_price?></label>
            <label><strong>Rating:</strong>
            <?php $variables = array('product_id' => $product_id);
            echo loadTemplate('../templates/stars.html.php',$variables);?>
            </label>
        </article>
        <?php
            if($link == ''){?>
            <div>
                <form action="?page=productForm&PID=<?=$product_id?>" method="POST">
                    <input type="submit" name="edit" value="Edit" style="width: 100%; margin-bottom: 5pt;" />
                    <input type="submit" name="delete" value="Delete" style="width: 100%; margin-bottom: 5pt;" />
                </form>
            </div>
            <?php } ?>

</li>