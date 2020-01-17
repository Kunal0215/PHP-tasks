<!DOCTYPE html>
<html>
<!-- sign up page-->
<head>
  <link rel="stylesheet" type="text/css" href="logincss.css">
  <script src="jquery.js"> </script>

</head>

<body background="28884.jpg">
  <div class="container">

    <h1 style="color:white">Signup Form</h1>
    <br>
    <br>
    <form action="signupnext.php" method="post">

      <input type="text" placeholder="Enter Username" name="suname" required>
      <br>
      <input type="password" placeholder="Enter Password" name="spsw" required>
      <br>
      <input type="password" placeholder="Re-Enter Password" name="spswr" required>
      <br>
      <br>
      <button type="submit"><b>Signup</b></button>
      <br>
       <p style="color:white">
      Already Signed Up --->  <a href="index.php"><b style="color: red"> Sign In</b></a></p>

    </div>
    <div class="footer">
    </div>
  </form>

</body>

</html>
