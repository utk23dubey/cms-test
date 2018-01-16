<?php
// Include config file
require('db1.php');
extract($_POST);
$id=trim($_GET["id"]);
 $sql = "UPDATE thumbnail2 SET heading='$header',heading='$heading',list1='$list1',list2='$list2',list3='$list3' where id='$id'";
	if ($conn->query($sql) === TRUE) {
    echo "record updated successfully";
    header("Location:servicebodysection.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>