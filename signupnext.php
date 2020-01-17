<?php
// database feed data for signup page

// database connectivity details
    $dbhost="localhost";  // hostname
    $dbuser="kunal"; // mysql username
    $dbpass="kunal"; // mysql password
    $db="accounts"; // database
// Create connection
$user = $_POST['suname'];
$pwd = $_POST['spsw'];
$rpwd = $_POST['spswr'];

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 if ($pwd == $rpwd) 
 {
 	$pwd = base64_encode($pwd);
	$sql = "INSERT INTO login (username, password) VALUES ('$user', '$pwd')";

	if ($conn->query($sql) === TRUE) {
	    echo '<i style="color:white;font-size:30px;font-family:calibri ;">
     			Successfully Signed Up</i> ';
     	include "index.php";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
 }
else{
	echo "Please renter same password in both fields";
	include "signup.php";
}
?> 
