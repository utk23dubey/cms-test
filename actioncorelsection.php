<?php
require('db1.php');
extract($_POST);
$target_path = "C:/wamp/www/cms test/themes/images/carousel/";  
$target_path = $target_path.basename( $_FILES['img']['name']);   
$path=$_FILES['img']['name'];
echo $path;
if(move_uploaded_file($_FILES['img']['tmp_name'], $target_path)) {    
   $sql = "INSERT INTO corelsection(img,heading,content,urlname,category) VALUES ('themes/images/carousel/$path','$heading','$content','$urlname','none')";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location:corelsection.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else{
  $sql = "INSERT INTO corelsection(img,heading,content,urlname) VALUES ('themes/images/carousel/$img','$heading','$content','$urlname')";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location:corelsection.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 
}
?>