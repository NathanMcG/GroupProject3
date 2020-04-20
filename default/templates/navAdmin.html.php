<div class="user-section">
<?php
    $variables = array();
    echo loadTemplate('../templates/navUser.html.php',$variables);
?>

    <div class="user-admin" >
    <h1 style="padding-left:20px; padding-bottom: 5px;"> Admin: </h1>
    <table cellspacing="0" style="width: 100%;">
            <tr class="border_right">
            <td><a href="?page=productForm&type=add" class="user-options"><i class="fas fa-plus"></i>  Add Products</a></td>
            <td><a href="?page=advertForm" class="user-options"> <i class="fas fa-newspaper"></i> Manage Adverts</a></td>
            </tr>
            <tr class="border_right">
            <td><a href="#" class="user-options"> <i class="fas fa-percentage"></i> Manage Offers</a></td>
            <td><a href="?page=productForm" class="user-options"> <i class="fas fa-wine-bottle"></i> Manage Products</a></td>
            </tr>
            <tr class="border_right">
            <td><a href="?page=typeForm" class="user-options" style="word-wrap: none;"> <i class="fas fa-sitemap"></i> Manage Drink Types</a></td>
            <td><a href="#" class="user-options"> <i class="fas fa-box-open"></i> Manage Orders</a></td>
            </tr>
            <tr class="border_right">
            <td><a href="#" class="user-options"><i class="fas fa-user"></i>  Manage Admins</a></td>
            <td></td>
            </tr>
    </table>
    </div>
</div>
