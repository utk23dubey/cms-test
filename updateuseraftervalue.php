<?php
// Include config file
require('db.php');
extract($_POST);
echo $name;
$id=trim($_GET["id"]);
 $sql = "UPDATE myusers SET name='$name',number='$number',email='$email',password='$password' where id='$id'";
	if ($conn->query($sql) === TRUE) {
    echo "record updated successfully";
    header("Location: welcome.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>