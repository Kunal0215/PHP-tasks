
<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  First Name: <input type="text" name="fname"></br>

  Last Name: <input type="text" name="lname"><br>
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($fname)) {
        echo "Name is empty";
    } else {
        echo $fname;
    }

    $name = htmlspecialchars($_REQUEST['lname']);
    if (empty($lname)) {
        echo "Name is empty";
    } else {
        echo $lname;
    }
}
?>

</body>
</html>
