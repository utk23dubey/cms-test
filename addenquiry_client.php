<?php
  require("db1.php");	
   extract($_POST);
	$sql = "INSERT INTO enquiry_client(name,phone,email,productname,message) VALUES ('$name','$phone','email','productname','message')";
	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location:enquiry_client.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>