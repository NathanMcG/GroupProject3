<?php
    $title = 'Log In';
    $content = '';

    if(!isset($_POST['details'])){
        $variables = array('user_email' => '');
        $content = loadTemplate('../templates/login.html.php',$variables);
    }
    else{
        $content = loadTemplate('../templates/login.html.php',$_POST['details']);
    }
    