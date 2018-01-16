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
<section id="bannerSection" style="background:url(themes/images/banner/contact.png) no-repeat center center #000;">
	<div class="container" >	
		<h1 id="pageTitle">Our Services <small> :We believe in quality services</small> 
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
	<div id="wrapper">
		<div class="container">	
		<div class="row">
				<?php
	            $sql = "SELECT * FROM thumbnail2";
				$result = $conn->query($sql) or die(mysqli_error());
				if($result){
					while($row = $result->fetch_object()){
					echo '<div class="span4">';
					echo '<div class="thumbnail">';
					echo "<h4>";
					echo $row->header;
					echo '</h4>';
					echo "<h5>";
					echo $row->heading;
					echo '</h5>';
                    echo '<div class="btn-group toolTipgroup">
						<a class="btn" href="#" data-placement="top" data-original-title="do you like?"><i class="icon-thumbs-up"></i></a>
						<a class="btn" href="#" data-placement="top" data-original-title="dont like?"><i class="icon-thumbs-down"></i></a>
					  </div>';
				echo '<ul class="unstyled">';
				echo '<li>';
				echo  $row->list1;
				echo '</li>';
				echo '<li>';
				echo  $row->list2;
				echo '</li>';
				echo '<li>';
				echo  $row->list3;
				echo '</li>';
				echo  '</ul>';
			  echo '<p>
						<a href="details.html" >Read more</a>
					</p>';
			echo '</div>';		
			echo '</div>';
							}
						}

				?>
				</div>
		</div>
		<br/>
		</div>
</section>
  <!-- Footer
  ================================================== -->
<?php include('mainfooter.php'); ?>

<a href="#" class="btn" style="position: fixed; bottom: 38px; right: 10px; display: none; " id="toTop"> <i class="icon-arrow-up"></i> Go to top</a>
<!-- Javascript
    ================================================== -->
 <?php include('secretsection.php'); ?>   
<!-- Placed at the end of the document so the pages load faster -->
<span id="themesBtn"></span>
</body>
</html>