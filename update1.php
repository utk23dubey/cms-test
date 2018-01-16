<?php
require('db1.php');
?>
<?php
require_once('session.php');
$id=trim($_GET['id']);
require("db1.php");
				$sql = "SELECT name, url FROM nav where id='$id'";
				$result = $conn->query($sql) or die(mysqli_error());
				if($result){
					while($row = $result->fetch_array()){
						$name=$row['name'];
						$url=$row['url'];
						
						//echo "<li><a href='{$row->url}'>{$row->name}</a></li>";		
						
					}
				}
echo $name;
echo $url;
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
                    <form action="updatenav.php?id=<?php echo $id; ?>" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            
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