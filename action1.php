<?php
	require_once("db.php");
	
	
	
   extract($_POST);
   echo $name;
   echo $number;
   echo $password;
   echo $email;
	$sql = "INSERT INTO MyUsers(name, number, email, password) VALUES ('$name','$number','$email','$password')";
	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>