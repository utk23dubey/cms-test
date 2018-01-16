<?php
	require_once("db1.php");
   extract($_POST);
	$sql = "INSERT INTO contactedus(name,email,subject,message) VALUES ('$name','$email','$subject','$message')";
	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("location: contact.php");
            exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>