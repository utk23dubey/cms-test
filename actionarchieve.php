<?php
	session_start();
  require("db1.php");	
   extract($_POST);
	$sql = "INSERT INTO tags(category,archieve) VALUES ('$category','yes')";
	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location:archieve.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>