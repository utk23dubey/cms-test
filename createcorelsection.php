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
<form action="actioncorelsection.php" method="post" enctype="multipart/form-data">
<div class="form-group">
    <label for="img">Img:</label><i class="glyphicon glyphicon-user"></i>
    <input type="file" class="form-control" name="img" id="img" required>
  </div> 
  <div class="form-group">
    <label for="heading">Heading:</label><i class="glyphicon glyphicon-user"></i>
    <input type="text" class="form-control" name="heading" id="heading" required />
  </div> 
  <div class="form-group">
    <label for="content">Content</label><i class="glyphicon glyphicon-user"></i>
    <textarea class="form-control" name="content" id="content" required> </textarea>
  </div> 
  <div class="form-group">
    <label for="urlname">Urlname:</label><i class="glyphicon glyphicon-user"></i>
    <input type="text" class="form-control" name="urlname" id="urlname" required />
  </div> 
  <br>
  <button type="submit" class="btn btn-success" name="btn-save" style="font-size:30px;margin-left:520px;">Create</button>
  <a href="corelsection.php">GoToo</a>
</form>
</div>
</body>
</html>