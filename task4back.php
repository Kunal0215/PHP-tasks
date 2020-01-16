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
    $phone= $_POST['phone'];
    $area= $_POST['marks'];

}
//CHECK IF THERE IS ANY EMPTY FIELD
      if(empty($lname) || empty($fname) || empty($phone) || empty($area))
{
     echo "FIELDS ARE BLANK, PLEASE FILL";
     include "task4.php";
 }
 else if(ctype_alpha($fname) && ctype_alpha($lname) )
 {
  include "head.php";
echo "<br>";

  echo "HELLO ! , ".$fname." ". $lname."<br><br>"; 
  include "upload.php";

//PHONE NUMBER

  $mobile = $_POST['phone'];
if (strlen($mobile) == 13 && substr($mobile, 0, 3) == "+91")
    $mobile = substr($mobile, 3, 13);
echo "<br>The mobile number of user is --->   <b>".$mobile."</b><br>";

 }
//CHECK ALL INPUT FIELD FORMATS

 else{
     echo "INVALID INPUT FORMAT, PLEASE CHECK AGAIN";
   include "task4.php";

 }
   ?>

    <html>

    <head>
    </head>

    <body>
        <br>
        <br>

        <table>

            <tr>
                <td><b>Subject</b></td>
                <td><b>Marks</b></td>
            </tr>
            <?php

            $list= $_POST['marks'];
            $array= explode("\n",$list);
        foreach ($array as $key ) {
        $mark=explode("|", $key);
        echo"

        <tr>
        <td>$mark[0]</td>
        <td>$mark[1]</td>
        </tr>";
        }

      ?>
        </table>
        <br>
        <br>

    </body>

    </html>