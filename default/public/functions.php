<?php

    //Database Commands

    function pdo(){
        $server = 'v.je';
        $username = 'student';
        $password = 'student';
        $schema = 'LastOrders';

        $pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password,[ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        
        return $pdo;
    }

    //Formatting



    //searches



?>