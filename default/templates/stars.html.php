<?php
    for($i=1;$i<6;$i++){
        if($i<=$stars){ ?>
            <img src="images/star.png" alt="star review" class="review-star" width="20px" height="20px">
        <?php }
        else{ ?>
            <img src="images/emptystar.png" alt="star review" class="review-star"  width="20px" height="20px">
        <?php }
    }