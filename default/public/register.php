<?php
session_start();

// connect to the database
require '../templates/functions.php';


// Title
$title = 'Last Orders';


// Registration form
// Might need updating / doesn't work until database is fully set up

if (isset($_POST['submit'])) {
  $stmt = $pdo->prepare('INSERT INTO `users` (`firstname`, `surname`, `email`, `password`, `user_address_line_1`, `user_address_line_2`, `user_address_line_country`, `user_address_line_postcode`, `user_address_line_phone_no`, `user_gender`, `user_date_of_birth`) 
  VALUES (:firstname, :surname, :email, :password, :user_address_line_1, :user_address_line_2, :user_address_line_country, :user_address_line_postcode, :user_address_line_phone_no, :user_date_of_birth)');
 
  $stmt->execute([
    'firstname' => $_POST['firstname'],
    'surname' => $_POST['surname'],
    'email' => $_POST['email'],
    'password' => $_POST['password'],
    'user_address_line_1' => $_POST['user_address_line_1'],
    'user_address_line_2' => $_POST['user_address_line_2'],
    'user_address_line_country' => $_POST['user_address_line_country'],
    'user_address_line_postcode' => $_POST['user_address_line_postcode'],
    'user_address_line_phone_no' => $_POST['user_address_line_phone_no'],
    'user_date_of_birth' => $_POST['user_date_of_birth'],



  ]);
 
  header('location: /');
 
} else {
  $title = 'Register';
  $content = '
   <form action="" method="POST">
     <div>
       <label for="firstname">First Name: </label>
       <input type="text" required name="firstname" id="firstname" />
     </div>
     <div>
       <label for="surname">Last Name: </label>
       <input type="text" required name="surname" id="surname" />
     </div>
     <div>
      <label for="email">Email: </label>
      <input type="text" required name="email" id="email" />
     </div>
     <div>
      <label for="password"> Password: </label>
      <input type="password" required name="password" id="password" />
     </div>
     <div>
       <label for="user_address_line_1">Address Line 1: </label>
       <input type="text" required name="user_address_line_1" id="user_address_line_1" />
     </div>
     <div>
       <label for="user_address_line_2">Address Line 2: </label>
       <input type="text" required name="user_address_line_2" id="user_address_line_2" />
     </div>
     <div>
       <label for="user_address_line_country">Country: </label>
       <input type="text" required name="user_address_line_country" id="user_address_line_country" />
     </div>
     <div>
      <label for="user_address_line_postcode">Postcode: </label>
      <input type="text" required name="user_address_line_postcode" id="user_address_line_postcode" />
     </div>
     <div>
      <label for="user_address_line_phone_no">Phone Number: </label>
      <input type="text" required name="user_address_line_phone_no" id="user_address_line_phone_no" />
     </div>
     <div>
      <label for="user_gender">Gender: </label>
      <input type="text" required name="user_gender" id="user_gender" />
    </div>
    <div>
      <label for="user_date_of_birth">Date of Birth: </label>
      <input type="text" required name="user_date_of_birth" id="user_date_of_birth" />
    </div>
    <div>
       <label for="AcceptTerm">Do you agree to the terms and conditions? </label>
       <input type="checkbox" required name="AcceptTerm" id="AcceptTerm" />
     </div>
     <input type="submit" name="submit" value="Submit" />
   </form>
 ';
}
 
include '../templates/layout.html.php';



?>