<?php
	$conn = mysqli_connect("localhost","root","","mydat");
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>