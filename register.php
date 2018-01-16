<html>
<head>
<title>PHP FORM</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
  #loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}
</style>
</head>
<body onload="myFunction()" style="margin:0;" background='bg.jpg'>

<div id="loader"></div>

<script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 500);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
<div style="height:auto;width:500px;background-color:#FFFAF0;padding:50px;margin-left:480px" id="myDiv" class="animate-bottom">
<label style="text-align:center;align:center;font-size:40px;" align="center">Registration Page</label>
<br>
<br>
<form action="action1.php" method="post">
<div class="form-group">
    <label for="name">Name:</label>
	<span class="glyphicon glyphicon-user"></span>
    <input type="text" class="form-control" name="name" id="name" required>
  </div>
<div class="form-group">
    <label for="number">Number:</label><i class="glyphicon glyphicon-phone-alt"></i>
    <input type="text/number" class="form-control" name="number" id="number"  required>
  </div>
  
  <div class="form-group">
    <label for="email">Email address:</label><i class="glyphicon glyphicon-envelope"></i>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
  <div class="form-group">
    <label for="password">Password:</label><i class="glyphicon glyphicon-lock"></i>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <br>
  <br>
  
  <br>
  <br>
  <button type="submit" class="btn btn-success" name="btn-save" style="font-size:30px;">Register</button>
  <a href='login.php'>&nbsp;Already Have Account?</a>
</form>
</div>
</body>
</html>
