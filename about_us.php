<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Business clean web templates</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<link id="callCss" rel="stylesheet" href="themes/current/bootstrap.min.css" type="text/css" media="screen"/>
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="themes/css/base.css" rel="stylesheet" type="text/css">
	<style type="text/css" id="enject"></style>
</head>
<body>
<?php include('mainheader.php'); ?>
<!--Header Ends================================================ -->
<!-- Page banner -->
<section id="bannerSection" style="background:url(themes/images/banner/aboutus.png) no-repeat center center #000;">
	<div class="container" >	
		<h1 id="pageTitle">About us 
		<span class="pull-right toolTipgroup">
			<a href="#" data-placement="top" data-original-title="Find us on via facebook"><img style="width:45px" src="themes/images/facebook.png" alt="facebook" title="facebook"></a>
			<a href="#" data-placement="top" data-original-title="Find us on via twitter"><img style="width:45px" src="themes/images/twitter.png" alt="twitter" title="twitter"></a>
			<a href="#" data-placement="top" data-original-title="Find us on via youtube"><img style="width:45px" src="themes/images/youtube.png" alt="youtube" title="youtube"></a>
		</span>
		</h1>
	</div>
</section> 
<!-- Page banner end -->
<section id="bodySection">	
	<div class="container">	
	<div class="row">
		<div class="span3">
			<div class="well well-small">
				<?php
				// Load in our navigation links from the MySQL database
				require("db1.php");
				$sql = "SELECT * FROM welcomeheader where category='welcomeheader'";
				$result = $conn->query($sql) or die(mysqli_error());
				if($result){
					while($row = $result->fetch_object()){
				echo "<h3>";
				echo $row->heading;
				echo "</h3>";
				echo $row->content;	 					
					}
				}
			?>
			</div>
			<br/>
			<div class="thumbnail">
				<?php
				// Load in our navigation links from the MySQL database
				require("db1.php");
				$sql = "SELECT * FROM thumbnail where category='aboutus'";
				$result = $conn->query($sql) or die(mysqli_error());
				if($result){
					while($row = $result->fetch_object()){
				echo "<a href='http://mywebsolution.info' target='_blank' ><img src='$row->img' alt='bootstrap business templates' style='height:200px'></a>";
				echo '<h4>';
				echo $row->header;
				echo "</h4>";
				echo '<p>';
				echo $row->content;	
				echo '</p>';
				echo '<div class="btn-toolbar">
				   <div class="btn-group toolTipgroup">
					<a class="btn" href="#" data-placement="right" data-original-title="send email"><i class="icon-envelope"></i></a>
					<a class="btn" href="#" data-placement="top" data-original-title="do you like?"><i class="icon-thumbs-up"></i></a>
					<a class="btn" href="#" data-placement="top" data-original-title="dont like?"><i class="icon-thumbs-down"></i></a>
					<a class="btn" href="#" data-placement="top" data-original-title="share"><i class="icon-link"></i></a>
					<a href="http://mywebsolution.info" target="_blank" class="btn" data-placement="left" data-original-title="browse"><i class="icon-globe"></i></a></div></div>'; 					
					}
				}
				?>
				</div>
			<br/>
			<h4>Testimonials</h4>
			<ul class="media-list">
				<?php
				// Load in our navigation links from the MySQL database
				require("db1.php");
				$sql = "SELECT * FROM testimonials";
				$result = $conn->query($sql) or die(mysqli_error());
				if($result){
					while($row = $result->fetch_object()){
				echo '<li class="media well well-small">';
				echo '	<a class="pull-left" href="#">
					  <img class="media-object" src="themes/images/img64x64.png" alt="bootstrap business template"/>
					</a>';
				echo "<div class='media-body'>";
				echo $row->content;
				echo "...";
				echo "<small>";
				echo $row->date;
				echo "</small>";
				echo "<a class='pull-right' href='#''><strong>$row->urlname</strong></a>";
				echo '</div>';
				echo '</li>';	 					
					}
				}
			?>
			</ul>

		</div>
		<div class="span9">
		<div class="well well-small" style="text-align:left">
			<?php
				// Load in our navigation links from the MySQL database
				require("db1.php");
				$sql = "SELECT * FROM thumbnail where category='mainheader'";
				$result = $conn->query($sql) or die(mysqli_error());
				if($result){
					while($row = $result->fetch_object()){
					echo '<h3>';
					echo $row->header;
					echo '</h3>';
					echo "<p><img src='$row->img' alt='business templates' /></p>";
					echo '<p>';
					echo $row->content;
					echo '</p>';
					echo '<div class="btn-toolbar">
			  <div class="btn-group toolTipgroup">
				<a class="btn" href="#" data-placement="top" data-original-title="send email"><i class="icon-envelope"></i></a>
				<a class="btn" href="#" data-placement="top" data-original-title="do you like?"><i class="icon-thumbs-up"></i></a>
				<a class="btn" href="#" data-placement="top" data-original-title="dont like?"><i class="icon-thumbs-down"></i></a>
				<a class="btn" href="#" data-placement="top" data-original-title="share"><i class="icon-link"></i></a>
				<a class="btn" href="#" data-placement="top" data-original-title="print"><i class="icon-print"></i></a>
			  </div>
			</div>
';

					}
				}
				?>
		<br/>			
		<ul class="media-list">
			<?php
				// Load in our navigation links from the MySQL database
				require("db1.php");
				$sql = "SELECT * FROM welcomeheader where category='news'";
				$result = $conn->query($sql) or die(mysqli_error());
				if($result){
					while($row = $result->fetch_object()){
				echo '<li class="media well well-small">';
				echo '	<a class="pull-left" href="#">';
				echo "<img class='media-object' src='themes/images/img185x165.png' alt='bootstrap business template'/>";
				echo '</a>';
				echo '<div class="media-body">';
				echo '<h4 class="media-heading">';
				echo $row->heading;
				echo '</h4>';
                echo $row->content;
                echo '<br/>';
                echo '<a class="pull-right" href="#"><strong>more</strong></a>';
                echo '</div>';
                echo '</li>'; 
				}
			}
			?>
		  	</ul>			
		</div>
		</div>
		</div>
	</div>
</section>
 <!-- Foote  ================================================== -->
<?php include('mainfooter.php');?>
<a href="#" class="btn" style="position: fixed; bottom: 38px; right: 10px; display: none; " id="toTop"> <i class="icon-arrow-up"></i> Go to top</a>
<!-- Javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- Themes switcher section ============================================================================================= -->
<?php include('secretsection.php'); ?>
<span id="themesBtn"></span>
</body>																																					
</html>