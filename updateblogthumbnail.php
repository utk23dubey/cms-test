?php
require('db1.php');
?>
<?php
require_once('session.php');
$id=trim($_GET['id']);
require("db1.php");
				$sql = "SELECT * FROM blogthumbnail where id='$id'";
				$result = $conn->query($sql) or die(mysqli_error());
				if($result){
					while($row = $result->fetch_array()){
						$header=$row['header'];
						$img=$row['img'];
                        $content=$row['content'];
						$date=$row['date'];
                        $category=$row['category'];
                        $added=$row['added'];
						//echo "<li><a href='{$row->url}'>{$row->name}</a></li>";		
						
					}
				}
				?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#date" ).datepicker();
  } );
  </script>
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
                    <form action="updatedblogthumbnail.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Image</label><?php echo $img; ?>
                            <input type="file" name="img" class="form-control" value="<?php echo $img; ?>">
                        </div>
                        <div>
                        <label>Header</label>
                            <input type="text" name="header" class="form-control" value="<?php echo $header; ?>">
                        </div>
                        <div>
                        <label>Content</label>
                            <input type="text"  name="content" class="form-control" value="<?php echo $content; ?>" /></textarea>
                        </div>
                        <div>
                        <label>Added</label>
                            <input type="text"  name="added" class="form-control" value="<?php echo $added; ?>" /></textarea>
                        </div>
                        <div>
                        <label>date</label>
                            <input type="text"  name="date" class="form-control" value="<?php echo $date; ?>" /></textarea>
                        </div>
                        <div>
                        <label>Category</label>
                            <input type="text"  name="category" class="form-control" value="<?php echo $category; ?>" /></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="welcom1.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>