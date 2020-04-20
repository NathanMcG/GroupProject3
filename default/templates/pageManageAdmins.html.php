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
            $users = $usersTable->find('user_email',$_GET['filter']);
        }
    }
    else{
        $users = $usersTable->find('admin','1');
        
    }

    echo '<div style="width: 100%;">';

    echo loadTemplate('../templates/searchUsers.html.php',array());

    echo loadTemplate('../templates/listUsers.html.php',array('users' => $users));

    echo '</div>';

?>