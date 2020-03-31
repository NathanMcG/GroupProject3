
<li>
    <a href="?page=product&PID=<?=$product_id?>"><img src="images/bottle.png" alt="product image" class="img-product" width="100px" height="100px"></a>
        <article>
            <label><strong>Name: </strong><a href="?page=product&PID=<?=$product_id?>"><?=$product_name?></a></label>
            <label><strong>Price: </strong> <?=$product_price?></label>
            <label><strong>Rating:</strong>
            <?php $variables = array('stars' => $stars);
            echo loadTemplate('../templates/stars.html.php',$variables);?>
            </label>
        </article>
</li>