<?php
require('db.php');
?>
<?php
require_once('session.php');
$id=trim($_GET['id']);
require("db.php");
				$sql = "SELECT * FROM myusers where id='$id'";
				$result = $conn->query($sql) or die(mysqli_error());
				if($result){
					while($row = $result->fetch_array()){
						$name=$row['name'];
						$number=$row['number'];
                        $email=$row['email'];
                        $password=$row['password'];
						
						//echo "<li><a href='{$row->url}'>{$row->name}</a></li>";		
						
					}
				}
echo $name;
echo $email;
echo $password;
echo $number;
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
                    <form action="updateuseraftervalue.php?id=<?php echo $id; ?>" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            
                        </div>
                        <div class="form-group">
                            <label>Number</label>
                            <input type="text" name="number" class="form-control" value="<?php echo $number; ?>">
                            
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                            
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="password" class="form-control" value="<?php echo $password; ?>">
                            
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