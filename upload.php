<?php
// short script for image upload to backend
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);

if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) 
{
	echo "<img src='$target_file' style='width:200px; height:200px;'><br>";

} 
else 
{
	echo "ERROR IMAGE NOT UPLOAD";

}

?>