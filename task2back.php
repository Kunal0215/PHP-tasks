<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
if ( isset( $_SESSION['user_id'] ) ) {
} else {
    // Redirect them to the login page
    header("Location: index.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    $lname= $_POST['lname'];
    $fname= $_POST['fname'];   
}
//CHECK IF THERE IS ANY EMPTY FIELD
      if(empty($lname) || empty($fname))
{
     echo "FIELDS ARE BLANK, PLEASE FILL";
     include "task2.php";
 }
 else if(ctype_alpha($fname) && ctype_alpha($lname) )
 {
  include "head.php";
echo "<br>";

  echo "HELLO ! , ".$fname." ". $lname."<br><br>"; 
  include "upload.php";

 }
//CHECK ALL INPUT FIELD FORMATS

 else{
     echo "INVALID INPUT FORMAT, PLEASE CHECK AGAIN";
   include "task2.php";

 }
   ?>