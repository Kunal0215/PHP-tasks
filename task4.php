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
        <title>PHP FORM</title>
    </head>
    <script src="jquery.js">
    </script>

    <body>
        <?php
include "head.php";
?>

            <h2>TASK 4 </h2>
            <form method="POST" action="task4back.php" enctype="multipart/form-data">
                FIRST NAME :
                <input type="text" id="fname" name="fname" placeholder="First Name" required=""> *Alphabets Only*
                <br>
                <br> LAST NAME :
                <input tyep="text" id="lname" name="lname" placeholder="Last Name" required=""> *Alphabets Only*
                <br>
                <br> FULL NAME :
                <input type="text" id="full" name="fullname" placeholder="Full Name" disabled>
                <br>
                <br> MOBILE NO. :
                <input type="text" id="phone" name="phone" pattern="[+91]{3}[0-9]{10}" maxlength="13" minlength="13" required> *Indian Numbers Only*
                <br>
                <br> MARKS :
                <textarea name="marks" cols="30" rows="10" required></textarea> *In format of eg."Marks|80", each subject in new line*
                <br>
                <br> SELECT IMAGE :
                <input type="file" name="file" id="file" required>
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