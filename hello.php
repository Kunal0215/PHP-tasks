<?php
// main task all input fields
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
if ( isset( $_SESSION['user_id'] ) ) {
} else {
    // Redirect to the login page
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

    <h2>PHP FORM </h2>
    <form method="POST" action="form.php" enctype="multipart/form-data">
        FIRST NAME :
        <input type="text" id="fname" name="fname" placeholder="First Name"> *Alphabets Only*
        <br>
        <br> LAST NAME :
        <input tyep="text" id="lname" name="lname" placeholder="Last Name"> *Alphabets Only*
        <br>
        <br> FULL NAME :
        <input type="text" id="full" name="fullname" placeholder="Full Name" disabled>
        <br>
        <br> MOBILE NO. :
        <input type="text" id="phone" name="phone" pattern="[+91]{3}[0-9]{10}" maxlength="13" minlength="13" required> *Indian Numbers Only*
        <br>
        <br> E-MAIL ID :
        <input tyep="text" id="email" name="email" placeholder="E-MAIL"> *In Correct Format Only (abc@xyz.com)*
        <br>
        <br> MARKS :
        <textarea name="marks" cols="30" rows="10"></textarea> *In format of eg."Marks|80", each subject in new line*
        <br>
        <br> SELECT IMAGE :
        <input type="file" name="file" id="file">
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
    <a href="logout.php">LOGOUT</a>
</body>

</html>
