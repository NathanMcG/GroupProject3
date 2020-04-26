<?php

    require '../isUser.php';

    $userTable = new DatabaseTable('users',null);
    $user = $userTable->find('user_id',$_SESSION['id']);
    $title = $user[0]['user_firstname'] . '\'s area';

    $variables = array();

    if(!$user[0]['admin'] == 1)
        $content = loadTemplate('../templates/navUser.html.php',$variables);
    else{
        $content = loadTemplate('../templates/navAdmin.html.php',$variables);
    }