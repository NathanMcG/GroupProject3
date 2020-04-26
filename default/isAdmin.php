<?php
    if(!isset($_SESSION['id'])){
        header("Location: /login");
    }
    else{
        $usersTable = new DatabaseTable('users',null);
        $user = $usersTable->find('user_id',$_SESSION['id'])[0];
        if($user['admin'] != 1){
            header("Location: /");
        }
    }
    
?>