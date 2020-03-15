<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?=$title?></title>
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width-device-width, initial-scale-1">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    </head>
    <body>
        <header id="header">
            <a href="?"><img src="images/lastOrderLogo.jpg" alt="last orders" class="logo" width="105px" height="85px"></a>
            <form action="searchListings.php" method="GET" class="searching">
                <input type="text" name="search" placeholder="Search..." class="searchText" />
                <input type="image" name="submit" src="images/searchbar.png" class="searchBtn" width="50px" height="50px"/>
            </form>
            <ul class="topNav">
                <?php
                    if(isset($_SESSION['id'])){
                        $users = new DatabaseTable('users',null);
                        $currentUser = $users->find('user_id',$_SESSION['id'])[0];
                        echo '<a href="#">' . $currentUser['user_firstname'] . ' ' . $currentUser['user_lastname'] . '</a>
                        <span class="pipe">|</span>
                        <a href="?page=logout">LOG OUT</a>';
                    }
                    else{
                        echo '<a href="?page=login">LOG IN</a>';
                    }
                ?>
                <span class="pipe">|</span>
                <a href="?page=register">REGISTER</a>
            </ul>
        </header>
        <div id="nav-icon"><i class="fas fa-bars"></i></div>
        <nav id="nav">
            <ul>
                <li class="main-nav">
                    <a href="#" class="drop-down" >Alcohol
                        <span><i class="fas fa-angle-down"></i></span>
                    </a>
                        <ul class="sub-nav">
                            <li class="sub-head">Wine</li>
                            <li><a href="#">- Red</a></li>
                            <li><a href="#">- White</a></li>
                            <li><a href="#">- Ros&eacute;</a></li>
                            <li class="sub-head">Beer</li>
                            <li><a href="#">- Ale</a></li>
                            <li><a href="#">Larger</a></li>
                            <li><a href="#">Cider</a></li> 
                            <li><a href="#">Liquors</a></li>                            
                            <li class="sub-head">Sprits</li>
                            <li><a href="#">- Vodka</a></li>
                            <li><a href="#">- Gin</a></li>
                            <li><a href="#">- Rum</a></li>
                            <li><a href="#">- Brandy</a></li>
                            <li><a href="#">Champagne</a></li>
                        </ul> 
                </li>
                <li class="main-nav"><a href="#">Mixers</a></li>
                <li class="main-nav"><a href="#">Gift Ideas</a></li>
                <li class="main-nav"><a href="#">Favourites</a></li>
                <li class="main-nav"><a href="#">Offers</a></li>
            </ul>
        </nav>
        <main><?=$content?></main>
        <footer class="footer">&#169; Last Orders</footer>
        <script src="lastOrder.js"></script>
    </body>
</html>