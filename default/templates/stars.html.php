<?php

    $stars = 0;
    $reviewsTable = new DatabaseTable('reviews',null);
    $reviews = $reviewsTable->find('product_id',$product_id);

    $i=0;

    foreach($reviews as $review){
        $stars = $stars + $review['stars'];
        $i++;
    }

    if($i>0)
        $stars = floor($stars/$i);


    for($i=1;$i<6;$i++){
        if($i<=$stars){ ?>
            <img src="images/star.png" alt="star review" class="review-star" width="20px" height="20px">
        <?php }
        else{ ?>
            <img src="images/emptystar.png" alt="star review" class="review-star"  width="20px" height="20px">
        <?php }
    }