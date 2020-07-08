<?php
    $title = '';
    $content = '';

    $usersTable = new DatabaseTable('users','user_id');
    $user = $usersTable->find('user_id',2)[0];

    var_dump($user);
    for($i=0;$i<13;$i++){
        unset($user[$i]);
    }
    var_dump($user);

    $user['user_password'] = password_hash('12345',PASSWORD_DEFAULT);
    $usersTable->save($user);