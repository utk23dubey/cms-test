<?php
	$conn = mysqli_connect("localhost","root","","testcms");
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>