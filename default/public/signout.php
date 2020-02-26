<?php
session_start();

unset($_SESSION['loggedin']);
echo 'You are now logged out';

$title = 'Last Orders';
$output = '

<p> Thank you for signing out! <p>


';

include '../layout.php';
?>
