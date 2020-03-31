<?php
    $title = 'Log In';
    $content = '';

    if(!isset($_POST['details'])){
        $variables = array('user_email' => '');
        $content = loadTemplate('../templates/login.html.php',$variables);
    }
    else{
        $_SESSION['id'] = 1;
        if(login()){
            echo 'HOME';
            header('location: ?page=home');
        }
        else{
            $content = loadTemplate('../templates/login.html.php',$_POST['details']);
        }
    }

    function login(){
        $success = true;
        $users = new DatabaseTable('users',null);
        $check = $users->find('user_email',$_POST['details']['user_email']);
        var_dump($_POST);
        if(isset($check[0]) && password_verify($_POST['details']['user_password'],$check[0]['user_password'])){
            $_SESSION['id'] = $check[0]['user_id'];
        }
        else{
            $success = false;
        }
        return $success;
    }
    