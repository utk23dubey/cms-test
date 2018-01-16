<?php
require('db1.php');
extract($_POST);
   echo $header;
   echo $content;
   $target_path = "C:/wamp/www/cms test/themes/images/thumbnail/";  
$target_path = $target_path.basename( $_FILES['img']['name']);   
$path=$_FILES['img']['name'];
echo $path;
if(move_uploaded_file($_FILES['img']['tmp_name'], $target_path)){ 
   $sql = "INSERT INTO thumbnail(img,header,content,category) VALUES ('themes/images/thumbnail/$path','$header','$content','service')";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location:bodysection.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else
{
	 echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
  ?>