<?php
// Include config file
require('db1.php');
extract($_POST);
$id=trim($_GET["id"]);
 $sql = "UPDATE details SET address='$address',email='$email',phone='$phone',fax='$fax' where id='$id'";
	if ($conn->query($sql) === TRUE) {
    echo "record updated successfully";
    header("Location:details.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>