
<?php
require_once('session.php');
$id=trim($_GET['id']);
require("db1.php");
				$sql = "SELECT * FROM corelsection where id='$id'";
				$result = $conn->query($sql) or die(mysqli_error());
				if($result){
					while($row = $result->fetch_array()){
						$img=$row['img'];
						$heading=$row['heading'];
                        $content=$row['content'];
                        $urlname=$row['urlname'];
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
                    <form action="updatedcorelsection.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>IMG</label> <?php echo $img; ?>
                            <input type="file" name="img" class="form-control" value='<?php echo $img;?>'>
                            
                        </div>
                        <div class="form-group">
                            <label>Heading</label>
                            <input type="text" name="heading" class="form-control" value="<?php echo $heading; ?>">
                            
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <input type="text" name="content" class="form-control" value="<?php echo $content; ?>">
                            
                        </div>
                        <div class="form-group">
                            <label>UrlName</label>
                            <input type="text" name="urlname" class="form-control" value="<?php echo $urlname; ?>">
                            
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="welcome.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>