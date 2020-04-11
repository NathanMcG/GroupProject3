<?php
    unset($_SESSION['id']);
    echo 'You are now logged out';
    header('location: ?page=login');
?>