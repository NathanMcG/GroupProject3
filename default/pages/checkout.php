<?php

    require '../isAdmin.php';

    $title = 'Checkout';

    if(count($_SESSION['basket'])>0){
        $variables = array();
        $content = loadTemplate('../templates/checkout.html.php',$variables);
    }
    else
        $content = 
        '<h2 style="color: #ffff;margin: 20pt;">You don\'t seem to have any items in your basket.<br>
        <a href="/" style="color: #f2b662;">Search the site and collect item\'s in your basket.</a><br>
        Then feel free to come back and checkout!</h2>';

?>

    
