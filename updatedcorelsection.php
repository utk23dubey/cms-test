<?php
require('db1.php');
extract($_POST);
$target_path = "C:/wamp/www/cms test/themes/images/carousel/";  
$target_path = $target_path.basename( $_FILES['img']['name']);   
$path=$_FILES['img']['name'];
echo $path;
$id=trim($_GET["id"]);
if(move_uploaded_file($_FILES['img']['tmp_name'], $target_path)) {  

 $sql = "UPDATE corelsection SET img='themes/images/carousel/$path',heading='$heading',content='$content',urlname='$urlname' where id='$id'";
	if ($conn->query($sql) === TRUE) {
    echo "record updated successfully";
    header("Location:corelsection.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else
{
 $sql = "UPDATE corelsection SET img='themes/images/carousel/$path',heading='$heading',content='$content',urlname='$urlname' where id='$id'";
	if ($conn->query($sql) === TRUE) {
    echo "record updated successfully";
    header("Location:corelsection.php");
}
}
?>