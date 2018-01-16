<?php
require('db1.php');
extract($_POST);
$target_path = "C:/wamp/www/cms test/themes/images/blog/";  
$target_path = $target_path.basename( $_FILES['img']['name']);   
$path=$_FILES['img']['name'];
echo $path;
if(move_uploaded_file($_FILES['img']['tmp_name'], $target_path)) {    
   $sql = "INSERT INTO clients(img,category) VALUES('themes/images/blog/$path','blog')";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location:blogcorosel.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else
{
       $sql = "INSERT INTO clients(img,category) VALUES('themes/images/blog/$path','blog')";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location:blogcorosel.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}


  ?>