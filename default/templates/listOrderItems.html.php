<div class="user-order-details">
    <ul class="orders-list">
        <?php
            foreach($list as $item){
                if(isset($review))
                    echo '<div style="width:45%;">';
                echo loadTemplate('../templates/orderItem.html.php',$item);
                if(isset($review)){
                    echo '</div>';
                    echo '<div style="width:50%;margin-top: 4px;">';
                    echo loadTemplate('../templates/formReview.html.php',$item);
                    
                    echo '</div>';
                }
            }
            
        ?>
    </ul>
</div>