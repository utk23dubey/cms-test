<?php
require('db1.php');
?>
<?php
require_once('session.php');
$id=trim($_GET['id']);
require("db1.php");
				$sql = "SELECT * FROM details where id='$id'";
				$result = $conn->query($sql) or die(mysqli_error());
				if($result){
					while($row = $result->fetch_array()){
						$address=$row['address'];
						$email=$row['email'];
                        $phone=$row['phone'];
                        $fax=$row['fax'];
						
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
<body>
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
                    <form action="updateddetails.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Address</label><?php echo $address; ?>
                            <input type="text" name="address" class="form-control" value="<?php echo $address; ?>">
                            
                        </div>
                        <div class="form-group">
                        <label>Email</label>
                            <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                            
                        </div>
                        <div class="form-group">
                        <label>Phone Number</label>
                            <input type="text"  name="phone" class="form-control" value="<?php echo $phone; ?>" />
                        </div>
                        <div class="form-group">
                        <label>Fax Number</label>
                            <input type="text"  name="fax" class="form-control" value="<?php echo $fax; ?>" />
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