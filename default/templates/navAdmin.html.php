<div class="user-section">
<?php
    $variables = array();
    echo loadTemplate('../templates/navUser.html.php',$variables);
?>
 <div class="user-admin" >
    <h1 style="padding-left:20px; padding-bottom: 5px;"> Admin: </h1>
    <table cellspacing="0" style="width: 100%;">
            <tr class="border_right">
            <td style="width: 200px"><i class="fas fa-plus"></i> <a href="?page=productForm&type=add" class="user-options">Add Products</a></td>
            <td><i class="fas fa-newspaper"></i> <a href="?page=advertForm" class="user-options">Manage Adverts</a></td>
            </tr>
            <tr class="border_right">
            <td><i class="fas fa-percentage"></i> <a href="?page=manageOffers" class="user-options">Manage Offers</a></td>
            <td><i class="fas fa-wine-bottle"></i> <a href="?page=productForm" class="user-options">Manage Products</a></td>
            </tr>
            <tr class="border_right">
            <td><i class="fas fa-sitemap"></i> <a href="?page=typeForm" class="user-options" style="word-wrap: none;">Manage Drink Types</a></td>
            <td><i class="fas fa-box-open"></i> <a href="?page=manageOffers" class="user-options">Manage Orders</a></td>
            </tr>
            <tr class="border_right">
            <td><i class="fas fa-user"></i> <a href="?page=manageAdmins" class="user-options">Manage Admins</a></td>
            <td></td>
            </tr>
    </table>
    </div>
</div>