	<?php
  require("db1.php");	
   extract($_POST);
	$sql = "INSERT INTO tags(category,archieve) VALUES ('$category','no')";
	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location:tags.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>