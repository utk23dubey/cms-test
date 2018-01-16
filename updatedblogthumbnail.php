<?php
// Include config file
require('db1.php');
extract($_POST);
$date=date_create($date);
$d=$date->format('F  jS  Y ');
   $target_path = "C:/wamp/www/cms test/themes/images/blog/";  
$target_path = $target_path.basename( $_FILES['img']['name']);   
$path=$_FILES['img']['name'];
echo $path;
if(move_uploaded_file($_FILES['img']['tmp_name'], $target_path)){ 
$id=trim($_GET["id"]);	
 $sql = "UPDATE blogthumbnail SET header='$header',added='$added',date='$d',category='$category',img='themes/images/blog/$path',content='$content' where id='$id'";
	if ($conn->query($sql) === TRUE) {
    echo "record updated successfully";
    header("Location:blogthumbnail.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else
{
	$id=trim($_GET["id"]); 
 $sql = "UPDATE blogthumbnail SET header='$header',added='$added',date='$d',category='$category',img='themes/images/blog/$path',content='$content' where id='$id'";
  if ($conn->query($sql) === TRUE) {
    echo "record updated successfully";
    header("Location:blogthumbnail.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>