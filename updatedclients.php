<?php
require('db1.php');
extract($_POST);
$target_path = "C:/wamp/www/cms test/themes/images/clients/";  
$target_path = $target_path.basename( $_FILES['img']['name']);   
$path=$_FILES['img']['name'];
echo $path;
if(move_uploaded_file($_FILES['img']['tmp_name'], $target_path)) {  
$id=trim($_GET["id"]);
 $sql = "UPDATE clients SET img='themes/images/clients/$path',title='$title' where id='$id'";
	if ($conn->query($sql) === TRUE) {
    echo "record updated successfully";
    header("Location:clients.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else
{

}
?>