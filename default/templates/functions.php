<?php

    //Database Commands

    // connecting to the database
    function pdo(){
        $server = '194.81.104.22';
        $username = 'group3_1920';
        $password = 'gp';
        $schema = 'db3_1920';

        $pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password,[ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        
        return $pdo;
    }

    // login check function -  needs improving
    function logincheck(){
        session_start();
        // Checking if user is signed in when sessions starts
        if (isset($_SESSION['loggedin'])) {
            echo 'You are now signed in.';
        }
        else {
            echo 'Sorry, you must be logged in to view this page.';
            header('location: /index.php');
           }
    }

    // signout function
    function logout(){
        unset($_SESSION['loggedin']);
        echo 'You are now signed out';

    }

    // Submit Post function
    function SubmitPost($stmt){
        if(isset($_POST['submit'])){
            unset($_POST['submit']);
            $stmt->execute($_POST);
          }
    }





    //Formatting

 

    //Database
    function findAll($pdo,$table){
        $stmt=$pdo->prepare('SELECT * FROM' . $table);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function find($pdo,$table,$field,$value){
        $stmt=$pdo->prepare('SELECT * FROM ' . $table . ' WHERE ' . $field . '=:value');
        $criteria = ['value' => $value];
        $stmt->execute($criteria);
        return $stmt->fetchAll();
    }

    




