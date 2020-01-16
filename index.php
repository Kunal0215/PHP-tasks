<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="logincss.css">
    <script src="jquery.js">
    </script>

</head>

<body>
    <div class="container">

        <h2>Login Form</h2>
        <br>
        <br>
        <form action="logincheck.php" method="post">

            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>
            <br>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <br>
            <br>
            <button type="submit">Login</button>
    </div>

    </form>

</body>

</html>