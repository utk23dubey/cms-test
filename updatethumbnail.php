<?php
require('db1.php');
?>
<?php
require_once('session.php');
$id=trim($_GET['id']);
require("db1.php");
				$sql = "SELECT header,img,content FROM thumbnail where id='$id'";
				$result = $conn->query($sql) or die(mysqli_error());
				if($result){
					while($row = $result->fetch_array()){
						$header=$row['header'];
						$img=$row['img'];
                        $content=$row['content'];
						
						//echo "<li><a href='{$row->url}'>{$row->name}</a></li>";		
						
					}
				}
echo $header;
echo $img;
echo $content;
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
                    <form action="updatedthumbnail.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Image</label><?php echo $img; ?>
                            <input type="file" name="img" class="form-control" value="<?php echo $img; ?>">
                        </div>
                        <label>Header</label>
                            <input type="text" name="header" class="form-control" value="<?php echo $header; ?>">
                        </div>
                        <label>Content</label>
                            <input type="text"  name="content" class="form-control" value="<?php echo $content; ?>" /></textarea>
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