<div class="user-home">
<div>
<h1> User: </h1>
<?php
    $variables = array();
    echo loadTemplate('../templates/userSection.html.php',$variables);
?>
</div>

<div>
<h1> Admin: </h1>

<div class="user-home">
    <div class="user-row">
        <div class="user-col"><section class="user-box"><i class="fas fa-user"></i> <a href="#" class="user-options">Add Product</a> </section></div>
        <div class="user-col"><section class="user-box"><i class="fas fa-user"></i> <a href="#" class="user-options">Make Admin</a> </section></div>
        
    </div>
    <div class="user-row">
        <div class="user-col"><section class="user-box"><i class="fas fa-box-open"></i> <a href="#" class="user-options">Edit Product</a> </section> </div>
    </div> 
</div>
</div>
</div>