<?php
require('db1.php');
extract($_POST);
$target_path = "C:/wamp/www/cms test/themes/images/clients/";  
$target_path = $target_path.basename( $_FILES['img']['name']);   
$path=$_FILES['img']['name'];
echo $path;
if(move_uploaded_file($_FILES['img']['tmp_name'], $target_path)) {    
   $sql = "INSERT INTO clients(img,title,category) VALUES('themes/images/clients/$path','$title','none')";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location:clients.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
  ?>