<?php
   require('session.php'); 
   require('db1.php');
?>
<html>
   
   <head>
      <title>Welcome </title>
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
   </head>
   <style>

#myDiv {
  display: none;
  text-align: center;
}
</style>
</head>
<body style="margin-left:200px;">
<div>
<?php include('adminheader.php'); ?>
</div>

<div>   
<?php include('left-navigationbar.php'); ?>
</div>
 <div style="text-align:center">
      <a href="createarchieve.php" class="btn btn-success pull-center" style="text-align:center">Add More Sections</a>
      </div>
       <?php
                    // Include config file
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM tags where archieve='yes'";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>category</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['category'] . "</td>";

                                                                                echo "<td>";
                                            echo "<a href='deletetags.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }
 
                    // Close connection
                    mysqli_close($conn);
                    ?>
                </div>
   </body>
   
</html>