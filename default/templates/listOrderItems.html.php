<div class="user-order-details">
    <ul class="orders-list">
        <?php
            foreach($list as $item){
                if(isset($review))
                    echo '<div style="width:50%; display: flex; justify-content: flex-end;">';
                echo loadTemplate('../templates/orderItem.html.php',$item);
                echo '</div>';
                if(isset($review)){
                    echo '<div style="width:50%; display: flex; justify-content: flex-start;">';
                    echo loadTemplate('../templates/formReview.html.php',$item);
                    
                    echo '</div>';
                }
            }
            
        ?>
    </ul>
</div>