<?php
// Include config file
require('db1.php');
extract($_POST);
$id=trim($_GET["id"]);
 $sql = "UPDATE welcomeheader SET heading='$heading',content='$content' where id='$id'";
	if ($conn->query($sql) === TRUE) {
    echo "record updated successfully";
    header("Location:welcomeheader.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>