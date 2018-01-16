<?php
	require_once("db1.php");
	
   extract($_POST);
   $date=date_create($date);
$d=$date->format('F  jS  Y ');
    $target_path = "C:/wamp/www/cms test/themes/images/blog/";  
$target_path = $target_path.basename( $_FILES['img']['name']);   
$path=$_FILES['img']['name'];
echo $path;
if(move_uploaded_file($_FILES['img']['tmp_name'], $target_path)){ 
	$sql = "INSERT INTO blogthumbnail(header,added,date,category,img,content) VALUES ('$header','$added','$d','category','themes/images/blog/$path','$content')";
	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("location: blogthumbnail.php");
            exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else
{
$sql = "INSERT INTO blogthumbnail(header,added,date,category,img,content) VALUES ('$header','$added','$d','category','themes/images/blog/$path','$content')";
	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("location: blogthumbnail.php");
            exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}	
}
$conn->close();
?>