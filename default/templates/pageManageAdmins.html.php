<?php

    $usersTable = new DatabaseTable('users','user_id');
    
    if(isset($_GET['filter'])){
        if($_GET['filter'] == 'Admins'){
            $users = $usersTable->find('admin','1');
        }
        elseif($_GET['filter'] == 'Users'){
            $users = $usersTable->find('admin','0');
        }
        else{
            $users = $usersTable->find($_GET['filter'],'0');
        }
    }
    else{
        $users = $usersTable->find('admin','1');
    }

    echo loadTemplate('../templates/listUsers.html.php',array('users' => $users));

?>