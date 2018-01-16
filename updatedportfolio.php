<?php
// Include config file
require('db1.php');
extract($_POST);
echo $header;
echo $content;
echo $category;
echo $img;
   $target_path = "C:/wamp/www/cms test/themes/images/portfolio/";  
$target_path = $target_path.basename( $_FILES['img']['name']);   
$path=$_FILES['img']['name'];
echo $path;
$id=trim($_GET["id"]);
if(move_uploaded_file($_FILES['img']['tmp_name'], $target_path)){ 
 $sql = "UPDATE portfolio SET img='themes/images/portfolio/$path',header='$header',content='$content',category='$category' where id='$id'";
	if ($conn->query($sql) === TRUE) {
    echo "record updated successfully";
    header("Location:thumbnailportfolio.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else{ 
 $sql = "UPDATE portfolio SET img='themes/images/portfolio/$img',header='$header',content='$content',category='$category' where id='$id'";
	if ($conn->query($sql) === TRUE) {
    echo "record updated successfully";
    header("Location:thumbnailportfolio.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>