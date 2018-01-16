<?php
// Include config file
require('db1.php');
extract($_POST);
$id=trim($_GET["id"]);
$date=date_create($date);
$d=$date->format('F  jS  Y ');
 $sql = "UPDATE testimonials SET content='$content',date='$d',urlname='$urlname' where id='$id'";
	if ($conn->query($sql) === TRUE) {
    echo "record updated successfully";
    header("Location:testimonials.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>