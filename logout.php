<?php
 	// if a session is not initiated then it'll initiate a new session otherwise go one 
// just to ignore already init session warning
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    // destroy all session variable and log out
session_destroy();
echo 'LOGGED OUT -- >' . $_SESSION["user_id"] . '<br>';  
// back to login page
include "index.php";
?>