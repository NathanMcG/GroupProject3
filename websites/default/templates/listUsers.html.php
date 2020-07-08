<div class="list-products">
    <ul class="all-products" style="width:100%;">
        <?php foreach($users as $user){
            echo loadTemplate('../templates/itemUser.html.php',$user);
        } ?>
    </ul>
</div>