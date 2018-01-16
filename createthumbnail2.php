<html>
<head>
<title>PHP FORM</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style='margin-left:200px'>
  <?php
include('session.php'); 
include('adminheader.php'); ?>
</div>
<div>
  <?php include('left-navigationbar.php');?>
</div>
<div style="height:auto;width:auto;background-color:#FFFAF0;padding:50px">
<label style="text-align:center;align:center;font-size:40px;margin-left:500px" align="center">Corelsection</label>
<br>
<br>
<form action="actionthumbnail2.php" method="post">
<div class="form-group">
    <label for="img">Header:</label><i class="glyphicon glyphicon-user"></i>
    <input type="text" class="form-control" name="header" id="header" required>
  </div> 
  <div class="form-group">
    <label for="heading">Heading:</label><i class="glyphicon glyphicon-user"></i>
    <input type="text" class="form-control" name="heading" id="heading" required />
  </div> 
  <div class="form-group">
    <label for="content">List1</label><i class="glyphicon glyphicon-user"></i>
    <input type="text" class="form-control" name="list1" id="list1" required>
  </div>
    <div class="form-group">
    <label for="content">List2</label><i class="glyphicon glyphicon-user"></i>
    <input type="text" class="form-control" name="list2" id="list2" required>
  </div>
    <div class="form-group">
    <label for="content">List3</label><i class="glyphicon glyphicon-user"></i>
    <input type="text" class="form-control" name="list3" id="list3" required>
  </div>  
  <br>
  <button type="submit" class="btn btn-success" name="btn-save" style="font-size:30px;margin-left:520px;">Create</button>
  <a href="corelsection.php">GoToo</a>
</form>
</div>
</body>
</html>