<?php // all validations are done in this page
if(!isset($_SESSION)) 
{ 
  session_start(); 
}
if ( isset( $_SESSION['user_id'] ) ) {
} else {
      // Redirect to the login page
  header("Location: index.php");
} 
//store all post array valaues to a simple variable
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $lname= $_POST['lname'];
  $fname= $_POST['fname'];   
  $phone= $_POST['phone'];
  $email= $_POST['email'];
  $area= $_POST['marks'];

}

  //CHECK IF THERE IS ANY EMPTY FIELD
if(empty($lname) || empty($fname) || empty($phone) || empty($email) || empty($area) )
{
 echo "FIELDS ARE BLANK, PLEASE FILL";
 include "hello.php";
}
   // allow only alphabetical values in firstname and lastname
else if(ctype_alpha($fname) && ctype_alpha($lname) )
{

  echo "HELLO, ".$fname." ". $lname."<br><br>"; 
  include "upload.php";

  //PHONE NUMBER validation with +91 cumpulsary in input field

  $mobile = $_POST['phone'];
  if (strlen($mobile) == 13 && substr($mobile, 0, 3) == "+91")
    $mobile = substr($mobile, 3, 13);
  echo "<br>The mobile number of user is --->   <b>".$mobile."</b><br>";
  $dbphone = $mobile;

  // EMAIL VALIDATE using 

  function valid_email($str){
   return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
 }
  // WRITE TO FILE IN SAME FOLDER NAMED DATA.doc
 $fp = fopen('data.doc', 'w');
 fputs($fp, "First Name : ".$fname."\n"."Last Name : ".$lname."\n"."Mobile No. : ".$phone."\n"."E-Mail : ".$email);
 fclose($fp);

  //CHECK EMAIL VALID OR NOT
 if(valid_email($_POST['email']))
 {
  echo "Valid email address --->   ".$_POST['email'];

}else
{
  echo "Invalid email address.";
}

// database connectivity details
        $dbhost="localhost";  // hostname
        $dbuser="kunal"; // mysql username
        $dbpass="kunal"; // mysql password
        $db="accounts"; // database
    // Create connection

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO form (fname, lname, email, mobile) VALUES ('$fname', '$lname', '$email', '$dbphone')";

      if ($conn->query($sql) === TRUE) {
          echo "<br><br><br>Successfully Updated in DataBase<br>";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();

}
  //anthing wrong then tell invalid

else{
 echo "INVALID INPUT FORMAT, PLEASE CHECK AGAIN";
 include "hello.php";

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
              // break the text area on new line and | symbol and display as table
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
    <a href="data.doc">Dowload File</a>
  </table>
  <br>
  <br>
  <a href="logout.php">LOGOUT</a>

</body>

</html>