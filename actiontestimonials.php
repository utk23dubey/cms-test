<?php
	require_once("db1.php");
$date=date_create("2013-03-15");
	
   extract($_POST);
   echo $date;
   $date=date_create($date);
$d=$date->format('F  jS  Y ');
	$sql = "INSERT INTO testimonials(content,date,urlname) VALUES ('$content','$d','$urlname')";
	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("location: testimonials.php");
            exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>