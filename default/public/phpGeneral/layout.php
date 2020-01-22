<!DOCTYPE html>
<html>
	<head>
		<title>Last Orders</title>
		 <meta charset="UTF-8" />
		<link rel="stylesheet" href="styles.css" />
	</head>

	<body>
		<header>
            <div class="logo">
                <img src="images/lastOrderLogo.jpg" alt="last orders" width="105px" height="85px">
            </div>
            
            <form action="#">
                <div class="searchbar">
                    <input type="text" name="search" placeholder="Search..." />
                    <input type="image" name="submit" src="images/searchbar.png" />
                </div>
            </form>
            <div class="top-nav">
            <ul>
                <li><a href="#">LOG IN</a></li>
                <span class="pipe">|</span>
                <li><a href="#">REGISTER</a></li>
            </ul>
        </div>
        </header>
        <nav>
			<ul>
				<li><a href="#">Alcohol</a></li>
				<li><a href="#">Mixer</a></li>
				<li><a href="#">Gift Ideas</a></li>
				<li><a href="#">Favourites</a></li>
				<li><a href="#">Offers</a></li>
			</ul>
        </nav>
        <main>

        <?php
            echo $pageContent;
        ?>

        </main>
        <footer> &copy; Last Orders </footer>
    </body>
</html>