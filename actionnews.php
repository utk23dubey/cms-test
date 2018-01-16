<?php
	require_once("db1.php");
	
	
	
   extract($_POST);
	$sql = "INSERT INTO welcomeheader(heading,content,category) VALUES ('$heading','$content','news')";
	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("location: news.php");
            exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>