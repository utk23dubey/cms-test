<?php
	require_once("db1.php");
	$target_path = "C:\wamp\www\UtkDemoProject2\themes\img\carousel";  
$target_path = $target_path.basename( $_FILES['img']['name']);     
if(move_uploaded_file($_FILES['img']['tmp_name'], $target_path)) {  
    echo "File uploaded successfully!";    
   extract($_POST);
	$sql = "INSERT INTO corelsection(img,heading,content,urlname) VALUES ('$img','$heading','$content','$urlname')";
	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("location: nav.php");
      } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
           }
       }
else{  
    echo "Sorry, file not uploaded, please try again!";  
} 
?>