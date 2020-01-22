<?php

    //Database Commands

    // connecting to the database
    function pdo(){
        $server = 'v.je';
        $username = 'student';
        $password = 'student';
        $schema = 'LastOrders';

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
    
    // Include layout function
    function IncludeLayout(){
        include '../layout.php';
    }

 

    //searches






