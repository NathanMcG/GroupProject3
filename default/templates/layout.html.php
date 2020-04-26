<!DOCTYPE html>
<html>
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->

        <meta charset="utf-8">
        <title><?=$title?></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
        <link rel="stylesheet" href="/style.css">
        <meta name="viewport" content="width-device-width, initial-scale-1">
        <script src="lastOrder.js"></script>
    </head>

    <body>
        <header id="header">
            <a href="/"><img src="/images/lastOrderLogo.jpg" alt="last orders" class="logo" width="105px" height="85px"></a>
            <form action="/results/" method="GET" class="searching">
                <input type="text" name="SRC" placeholder="Search..." class="searchText" />
                <input type="image" name="submit" src="/images/searchbar.png" class="searchBtn" width="50px" height="50px"/>
            </form>
            <ul class="topNav">
                <?php
                    if(isset($_SESSION['id'])){
                        $users = new DatabaseTable('users',null);
                        $currentUser = $users->find('user_id',$_SESSION['id'])[0];
                        echo '<a href="/user">' . $currentUser['user_firstname'] . ' ' . $currentUser['user_lastname'] . '</a>
                        <span class="pipe">|</span>
                        <a href="/logout">LOG OUT</a>';
                    }
                    else{
                        echo '<a href="/login">LOG IN</a>';
                    }
                ?>
                <span class="pipe">|</span>
                <a href="/userForm">REGISTER</a>
            </ul>
        </header>
        <div id="nav-icon"><i class="fas fa-bars"></i></div>
        <nav id="nav" style="z-index: 1;">
            <ul>
                <li class="main-nav"><a href="#" class="drop-down" >Alcohol<span><i class="fas fa-angle-down"></i></span></a>
                    <ul class="sub-nav">
                        <?php
                            $classTable = new DatabaseTable('classifications',null);
                            $classes = $classTable->find('class_type','Alcohol');
                            $typesTable = new DatabaseTable('types',null);

                            foreach($classes as $class){
                                echo '<li class="sub-head"><a href="/results/?CID=' . $class['classification_id'] . '">' . $class['classification_name'] . '</a></li>';
                                $types = $typesTable->find('classification_id',$class['classification_id']);
                                foreach($types as $type){
                                    echo '<li><a href="/results&TID=' . $type['type_id'] . '">- ' . $type['type_name'] . '</a></li>';
                                }
                            }?>
                    </ul> 
                </li>
                <li class="main-nav"><a href="#">Mixers<span><i class="fas fa-angle-down"></i></span></a>
                    <ul class="sub-nav">
                        <?php
                            $classTable = new DatabaseTable('classifications',null);
                            $classes = $classTable->find('class_type','Mixer');
                            $typesTable = new DatabaseTable('types',null);

                            foreach($classes as $class){
                                echo '<li class="sub-head"><a href="/results/?CID=' . $class['classification_id'] . '">' . $class['classification_name'] . '</a></li>';
                                $types = $typesTable->find('classification_id',$class['classification_id']);
                                foreach($types as $type){
                                    echo '<li><a href="/results/?TID=' . $type['type_id'] . '">- ' . $type['type_name'] . '</a></li>';
                                }
                            }?>
                    </ul> 
                </li>
                <li class="main-nav"><a href="/gifts">Gift Ideas</a>
                </li>
                <li class="main-nav"><a href="/favourites">Favourites</a>
                </li>
                <li class="main-nav"><a href="/offers">Offers</a>
                </li>
            </ul>
        </nav>
        <main><?=$content?></main>
        <footer class="footer">&#169; Last Orders</footer>
        
    </body>
</html>