<?php
//navigation bar for web deployed task
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
if ( isset( $_SESSION['user_id'] ) ) {
} else {
    // Redirect them to the login page
    header("Location: index.html");
}
if(isset($_GET['q'])){
  $a="task".$_GET['q'];
  header("location: $a.php");
}
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>MAIN PAGE</title>
    </head>
    <link rel="stylesheet" type="text/css" href="headcss.css">

    <body>

        <div class="topnav">
            <a href="task1.php">TASK 1</a>
            <a href="task2.php">TASK 2</a>
            <a href="task3.php">TASK 3</a>
            <a href="task4.php">TASK 4</a>
            <a href="task5.php">TASK 5</a>
            <a href="task6.php">TASK 6</a>
            <a style="float:right" href="logout.php">LOGOUT</a>

        </div>

    </body>

    </html>
