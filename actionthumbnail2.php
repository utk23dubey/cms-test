<?php
require('db1.php');
extract($_POST);
   $sql = "INSERT INTO thumbnail2(header,heading,list1,list2,list3) VALUES ('$header','$heading','$list1','$list2','$list3')";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location:servicebodysection.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
  ?>