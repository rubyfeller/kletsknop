<?php
    // make the session variable available
    session_start();
    
    // Unset all of the session variables
    $_SESSION = array();    

    // destroy the session variable and it's content
    session_destroy();

    // direct the user to the login page
    header('location: ../login.php');
?>