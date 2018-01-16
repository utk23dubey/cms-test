<?php
// Include config file
require('db1.php');
extract($_POST);
echo $name;
$id=trim($_GET["id"]);
 $sql = "UPDATE nav SET name='".$name."' where id='$id'";
	if ($conn->query($sql) === TRUE) {
    echo "record updated successfully";
    header("Location: nav.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>