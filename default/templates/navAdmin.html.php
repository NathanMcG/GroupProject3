<div class="user-home">
<div >
<h1> User: </h1>
<?php
    $variables = array();
    echo loadTemplate('../templates/navUser.html.php',$variables);
?>
</div>

<div>
<h1> Admin: </h1>

<div class="user-home" >
    <div class="user-row" >
        <div class="user-col"><section class="user-box"><i class="fas fa-plus"></i> <a href="?page=productForm&type=add" class="user-options">Add Products</a> </section></div>
        <div class="user-col"><section class="user-box"><i class="fas fa-newspaper"></i> <a href="?page=advertForm" class="user-options">Manage Adverts</a> </section></div>
        <div class="user-col"><section class="user-box"><i class="fas fa-percentage"></i> <a href="#" class="user-options">Manage Offers</a> </section></div>
        
    </div>
    <div class="user-row" style="width: auto;">
        <div class="user-col"><section class="user-box"><i class="fas fa-wine-bottle"></i> <a href="?page=productForm" class="user-options">Manage Products</a> </section></div>
        <div class="user-col"><section class="user-box"><i class="fas fa-sitemap"></i> <a href="#" class="user-options" style="word-wrap: none;">Manage Drink Types</a> </section> </div>
        <div class="user-col"><section class="user-box"><i class="fas fa-box-open"></i> <a href="#" class="user-options">Manage Orders</a> </section> </div>
        <div class="user-col"><section class="user-box"><i class="fas fa-user"></i> <a href="#" class="user-options">Manage Admins</a> </section> </div>
    </div> 
</div>
</div>
</div>