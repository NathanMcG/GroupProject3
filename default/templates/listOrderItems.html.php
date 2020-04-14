<div class="user-order-details">
    <ul class="orders-list">
        <?php
            foreach($list as $item){
                echo loadTemplate('../templates/orderItem.html.php',$item);
            }
        ?>
    </ul>
</div>