<div style="width: 100%;">
    <ul class="orders-list" style="width: 70%;margin: 30px; height: auto;">
        <?php
            foreach($list as $item){
                echo loadTemplate('../templates/itemAdvert.html.php',$item);
            }
        ?>
    </ul>
</div>