<?php
require('db1.php');
$id=trim($_GET["id"]);
// Process delete operation after confirmation
$sql = "DELETE from thumbnail where id='".$id."'";
    if ($conn->query($sql) === TRUE) {
    echo "record deletd successfully";
    header("Location:bodysection.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>