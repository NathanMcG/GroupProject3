<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width-device-width, initial-scale-1">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    </head>
    <body>
        <header id="header">
            <img src="images/lastOrderLogo.jpg" alt="last orders" class="logo" width="105px" height="85px">
            <form action="#" method="#" class="searching">
                <input type="text" name="search" placeholder="Search..." class="searchText" />
                <input type="image" name="submit" src="images/searchbar.png" class="searchBtn" width="50px" height="50px"/>
            </form>
            <ul class="topNav">
                <a href="#">LOG IN</a>
                <span class="pipe">|</span>
                <a href="#">REGISTER</a>
            </ul>
            <div class="space"></div>
        </header>
        <nav id="nav">
            <ul>
                <li class="main-nav nav-drop"><a href="#" >Alcohol</a>
                    <ul class="sub-nav">
                        <ul>
                            <h5>Wine</h5>
                            <li><a href="#">- Red</a></li>
                            <li><a href="#">- White</a></li>
                            <li><a href="#">- Ros&eacute;</a></li>
                            <h5>Beer</h5>
                            <li><a href="#">- Ale</a></li>
                            <li><a href="#">Larger</a></li>
                            <li><a href="#">Cider</a></li> 
                        </ul>
                        <ul>
                            <li><a href="#">Liquors</a></li>                            
                            <h5>Sprits</h5>
                            <li><a href="#">- Vodka</a></li>
                            <li><a href="#">- Gin</a></li>
                            <li><a href="#">- Rum</a></li>
                            <li><a href="#">- Brandy</a></li>
                            <li><a href="#">Champagne</a></li>
                        </ul>
                    </ul>
                </li>
                <li class="main-nav"><a href="#">Mixers</a></li>
                <li class="main-nav"><a href="#">Gift Ideas</a></li>
                <li class="main-nav"><a href="#">Favourites</a></li>
                <li class="main-nav"><a href="#">Offers</a></li>
            </ul>
        </nav>
        <main><?=$content?></main>
        <footter id="footer">&#169; Last Orders</footter>
    </body>
</html>