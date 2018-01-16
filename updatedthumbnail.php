<?php
// Include config file
require('db1.php');
extract($_POST);
   echo $header;
   echo $content;
   $target_path = "C:/wamp/www/cms test/themes/images/thumbnail/";  
$target_path = $target_path.basename( $_FILES['img']['name']);   
$path=$_FILES['img']['name'];
echo $path;
if(move_uploaded_file($_FILES['img']['tmp_name'], $target_path)){ 
$id=trim($_GET["id"]);	
 $sql = "UPDATE thumbnail SET img='themes/images/thumbnail/$path',header='$header',content='$content' where id='$id'";
	if ($conn->query($sql) === TRUE) {
    echo "record updated successfully";
    header("Location:bodysection.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else
{
	$id=trim($_GET["id"]);
	 $sql = "UPDATE thumbnail SET img='themes/images/thumbnail/$path',header='$header',content='$content' where id='$id'" ;
	if ($conn->query($sql) === TRUE) {
    echo "record updated successfully";
    header("Location:bodysection.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>