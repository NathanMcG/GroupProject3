<?php

    //Database Commands

    // connecting to the database
    function pdo(){
        $server = 'v.je';
        $username = 'student';
        $password = 'student';
        //The name of the schema we created earlier in MySQL workbench
        //If this schema does not exist you will get an error!$
        $schema = 'LastOrders';

        $pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password,[ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        
        return $pdo;
    }

    // login check - might need improving
    function logincheck(){
        session_start();
        // Checking if user is signed in when sessions starts
        if (isset($_SESSION['loggedin'])) {
        }
        else {
        }
    }

    // signout function
    function logout(){
        unset($_SESSION['loggedin']);
        echo 'You are now signed out';

    }






    //Formatting



    //searches






