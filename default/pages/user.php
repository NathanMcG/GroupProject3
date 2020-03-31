<?php
    if(!isset($_SESSION['id'])){
        header('Location: ?page=login');
    }

    $userTable = new DatabaseTable('users',null);
    $user = $userTable->find('user_id',$_SESSION['id']);
    $title = $user[0]['user_firstname'] . '\'s area';

    $variables = array();

    if(!$user[0]['admin'] == 1)
        $content = loadTemplate('../templates/userSection.html.php',$variables);
    else{
        $content = loadTemplate('../templates/adminSection.html.php',$variables);
    }