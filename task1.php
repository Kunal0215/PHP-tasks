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
?>
    <!DOCTYPE HTML>
    <html>

    <head>
        <style>
            .error {
                color: red;
            }
        </style>
        <title>PHP FORM TASK 1</title>
    </head>
    <script src="jquery.js">
    </script>

    <body>
        <?php
include "head.php";
?>
            <h2>TASK 1 </h2>
            <form method="POST" action="task1back.php">
                FIRST NAME :
                <input type="text" id="fname" name="fname" placeholder="First Name"> *Alphabets Only*
                <br>
                <br> LAST NAME :
                <input tyep="text" id="lname" name="lname" placeholder="Last Name"> *Alphabets Only*
                <br>
                <br> FULL NAME :
                <input type="text" id="full" name="fullname" placeholder="Full Name" disabled>
                <br>
                <br>
                <input type="submit" name="submit" value="Submit">
            </form>

            <script type="text/javascript">
                $('#fname').keyup(() => {
                    document.getElementById('full').value = $('#fname').val() + " " + $('#lname').val();

                })
                $('#lname').keyup(() => {
                    document.getElementById('full').value = $('#fname').val() + " " + $('#lname').val();

                })
            </script>
            <br>
            <br>
    </body>

    </html>