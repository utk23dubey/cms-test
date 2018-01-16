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
<section id="bannerSection" style="background:url(themes/images/banner/blog.png) no-repeat center center #000;">
	<div class="container" >	
		<h1 id="pageTitle">Blog 
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
<div class="span9">						
<?php
				// Load in our navigation links from the MySQL database
				require("db1.php");
				$sql = "SELECT * FROM blogthumbnail";
				$result = $conn->query($sql) or die(mysqli_error());
				if($result){
					while($row = $result->fetch_object()){
                    echo '<div class="thumbnail">
<h3><a href="#" title="my web solutions">';
                    echo $row->header;
                    echo'</a></h3>';
                    echo '<p class="meta">Added by <a href="#" title="Posts by admin">';
                    echo $row->added;
                    echo '</a>on<a href="#">';
                    echo $row->date;
                    echo '</a>,';					
                    echo 'filed under <a href="#">';
                    echo $row->category;
                    echo '</a></p>';
                    echo "<a href='blog_details.html' style='display:block; background:url($row->img) no-repeat center center; height:250px; max-height:250px; margin-bottom:18px'></a>";
                    echo '<p>';
                    echo $row->content;
                    echo '<a href="#">More Details</a>';
                    echo '</p>';
                    echo '<div class="btn-toolbar">
  <div class="btn-group toolTipgroup">
    <a class="btn" href="#" data-placement="left" data-original-title="send email"><i class="icon-envelope"></i></a>
    <a class="btn" href="#" data-placement="top" data-original-title="do you like?"><i class="icon-thumbs-up"></i></a>
    <a class="btn" href="#" data-placement="top" data-original-title="dont like?"><i class="icon-thumbs-down"></i></a>
    <a class="btn" href="#" data-placement="top" data-original-title="share"><i class="icon-link"></i></a>
    <a class="btn" href="#" data-placement="right" data-original-title="print"><i class="icon-print"></i></a>
  </div>
</div> 
 <p> 
	<a href="#">Add Comments</a> | 
	<a href="#">More Details</a>
</p>
</div>
<br>'; 
                                 	}
					}
		?>
<div class="thumbnail">
<h3><a href="#" title="my web solutions">Low Cost Web Design Price List (+ 10% OFF)</a></h3>
<p class="meta">Added by <a href="#" title="Posts by admin">admin</a> on <a href="#">November 14th, 2012</a>, filed under <a href="#" title="View all posts in Category 3">Category 3</a></p>
<div id="myCarousel" class="carousel slide blogCarousel">
	<div class="carousel-inner">
	<?php
				// Load in our navigation links from the MySQL database
				require("db1.php");
				$sql = "SELECT * FROM clients where category='blog'";
				$result = $conn->query($sql) or die(mysqli_error());
				if($result){
					while($row = $result->fetch_object()){
		echo '<div  style="text-align:center"  class=" item">';
		echo "<a href='#' style='display:block; background:url($row->img) no-repeat center center; height:250px; max-height:250px; margin-bottom:18px'></a>";
        echo '</div>'; 
					}
				}
				?>
		
	</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>
<p>This affordable Mobile Web Design Package offers up to 20% Discount for our new clients. We believ our clients are 100% satisfied with us and our services packages. 
We do it all for you from start to finish. When the mobile website is completed, you can visit your website from handheld device(ie. Mobile, i-pad etc).
Our website prices below are complete - there are NO HIDDEN EXTRAS! </p>

<p>This affordable Mobile Web Design Package offers up to 20% Discount for our new clients. We believ our clients are 100% satisfied with us and our services packages. 
We do it all for you from start to finish. When the mobile website is completed, you can visit your website from handheld device(ie. Mobile, i-pad etc).
Our website prices below are complete - there are NO HIDDEN EXTRAS! [<a href="blog_details">More Details</a>]</p>

 <div class="btn-toolbar">
  <div class="btn-group toolTipgroup">
    <a class="btn" href="#" data-placement="left" data-original-title="send email"><i class="icon-envelope"></i></a>
    <a class="btn" href="#" data-placement="top" data-original-title="do you like?"><i class="icon-thumbs-up"></i></a>
    <a class="btn" href="#" data-placement="top" data-original-title="dont like?"><i class="icon-thumbs-down"></i></a>
    <a class="btn" href="#" data-placement="top" data-original-title="share"><i class="icon-link"></i></a>
    <a class="btn" href="#" data-placement="right" data-original-title="print"><i class="icon-print"></i></a>
  </div>
</div>
 <p>
	<a href="#" title="Comment on Cras in odio nisi">6 Comments</a> | 
	<a href="#">Add Comments</a> | 
	<a href="#">More Details</a>
</p>
</div>
<br/>


<div class="pagination pull-right">
  <ul>
	<li><a href="#">Prev</a></li>
	<li><a href="#">1</a></li>
	<li><a href="#">2</a></li>
	<li><a href="#">3</a></li>
	<li><a href="#">Next</a></li>
  </ul>
</div>	
</div>


<!-- Sidebar comumn -->
<div class="span3">
<div class="well well-small">
<h4>Categories</h4>
<ul class="nav nav-tabs nav-stacked">
	<li class="active"><a href="#">Website Design &amp; Development</a></li>
	<?php
				// Load in our navigation links from the MySQL database
				require("db1.php");
				$sql = "SELECT * FROM tags where archieve='no'";
				$result = $conn->query($sql) or die(mysqli_error());
				if($result){
					while($row = $result->fetch_object()){
				echo '<li>';
				echo '<a href="#">';
				echo $row->category;
				echo '</a>';
				echo '</li>';		
						}
					}
					?>

					<?php
$date=date_create("2013-03-15");
echo $date->format('F  jS  Y ');
?>
  </ul>
</div>
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
<div class="well well-small">
<h4>Archives</h4>
<ul class="nav nav-tabs nav-stacked">
	<?php
				// Load in our navigation links from the MySQL database
				require("db1.php");
				$sql = "SELECT * FROM tags where archieve='yes'";
				$result = $conn->query($sql) or die(mysqli_error());
				if($result){
					while($row = $result->fetch_object()){
				echo '<li>';
				echo '<a href="#">';
				echo $row->category;
				echo '</a>';
				echo '</li>';		
						}
					}
					?>
<li><a href="#">More...</a></li>
</ul>
</div>

<div class="well well-small">
<h4>Tag</h4>
<?php
				// Load in our navigation links from the MySQL database
				require("db1.php");
				$sql = "SELECT * FROM tags where archieve='no'";
				$result = $conn->query($sql) or die(mysqli_error());
				if($result){
					while($row = $result->fetch_object()){
				echo '<a class="btn btn-mini" href="#">';
				echo $row->category;
				echo '</a>';		
						}
					}
					?>
</ul>
</div>
</div>



</div>
</div>
</div>
</section>
 <!-- Footer
  ================================================== -->
<?php include('mainfooter.php'); ?>

<a href="#" class="btn" style="position: fixed; bottom: 38px; right: 10px; display: none; " id="toTop"> <i class="icon-arrow-up"></i> Go to top</a>
<!-- Javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
 
<!-- Themes switcher section ============================================================================================= -->
<?php include('secretsection.php'); ?> 
<span id="themesBtn"></span>
</body>
</html>