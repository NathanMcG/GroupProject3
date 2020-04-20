<?php
    $title = 'Admins';

    $usersTable = new DatabaseTable('users','user_id');
    if(isset($_POST['submit'])){
        $user = $usersTable->find('user_id',$_POST['UID'])[0];
        var_dump($user);
        if($user['admin'] == 1){
            $user['admin'] = 0;
        }
        elseif($user['admin'] == 0){
            $user['admin'] = 1;
        }
        for($i=0;$i<13;$i++){
            unset($user[$i]);
        }
        var_dump($user);
        $usersTable->save($user);
    }

    
    $content = loadTemplate('../templates/pageManageAdmins.html.php',array());