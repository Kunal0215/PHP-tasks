<?php
// to check credentials from database

	// database connectivity details
    $dbhost="localhost";  // hostname
    $dbuser="kunal"; // mysql username
    $dbpass="kunal"; // mysql password
    $db="accounts"; // database

    //innoraft -- innoraft
    //admin -- admin

    //initiate db connection
    $conn=mysqli_connect( $dbhost, $dbuser, $dbpass, $db ) or die("Could not connect: " .mysqli_error($conn) );
    if( isset($_POST['uname']) and isset($_POST['psw']) ) 
    {

    	$user=$_POST['uname'];
        	//encode password in base 64 to compare with db
    	$pass=base64_encode($_POST['psw']);
            //store the value of sql querry in a variable
    	$result=mysqli_query( $conn, "SELECT * FROM login WHERE username='$user' AND password='$pass' ") or die("Could not execute query: " .mysqli_error($conn));
            //store the row output to $row
    	$row = mysqli_fetch_assoc($result);
            //no row data that means username password combination doesnt exixt
    	if(!$row) {
    		echo '<i style="color:white;font-size:30px;font-family:calibri ;">
     			 Enter Correct Username / Password </i> ';
                // back to login
    		include "index.php";  
    	}
    	else {
            	//start the session if row is present , session initiated and assigned the username as session variable
    		session_start();
    		$_SESSION['user_id']=$user;
                //redirect to task4
    		header('location: task4.php');
    		if(isset($_GET['q']))
    		{
    			$a="task".$_GET['q'];
    			header("location: $a.php");
    		}
    	}
    }
?>