<?php
require('db1.php');
?>
<?php
require_once('session.php');
$id=trim($_GET['id']);
require("db1.php");
				$sql = "SELECT * FROM thumbnail2 where id='$id'";
				$result = $conn->query($sql) or die(mysqli_error());
				if($result){
					while($row = $result->fetch_array()){
						$header=$row['header'];
						$heading=$row['heading'];
                        $list1=$row['list1'];
						$list2=$row['list2'];
                        $list3=$row['list3'];
						//echo "<li><a href='{$row->url}'>{$row->name}</a></li>";		
						
					}
				}
				?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body style="margin-left:200px">
    <div>
<?php include('adminheader.php'); ?>
</div>
    <div>
    <?php include('left-navigationbar.php'); ?>
</div>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="updatedthumbnail2.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Header</label>
                            <input type="text" name="header" class="form-control" value="<?php echo $header; ?>">
                        </div>
                        <div>
                        <label>Heading</label>
                            <input type="text" name="heading" class="form-control" value="<?php echo $heading; ?>">
                        </div>
                        <div>
                        <label>List1</label>
                            <input type="text"  name="list1" class="form-control" value="<?php echo $list1; ?>" /></textarea>
                        </div>
                        <div>
                        <label>List2</label>
                            <input type="text"  name="list2" class="form-control" value="<?php echo $list2; ?>" /></textarea>
                        </div>
                        <div>
                        <label>List3</label>
                            <input type="text"  name="list3" class="form-control" value="<?php echo $list3; ?>" /></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="bodysection.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>