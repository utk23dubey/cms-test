<?php
	require_once("db1.php");
	
	
	
   extract($_POST);
	$sql = "INSERT INTO nav(name,url) VALUES ('$name','$url')";
	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("location: nav.php");
            exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>