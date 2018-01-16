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
	<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<script src="themes/js/jquery-1.8.3.min.js"></script>
	<script src="themes/js/bootstrap.min.js"></script>
	<script src="themes/js/bootstrap-tooltip.js"></script>
    <script src="themes/js/bootstrap-popover.js"></script>
	<script src="themes/js/business_ltd_1.0.js"></script>
 
	 <!-- Google map jquery files -->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="themes/js/jquery.gmap.js"></script>
	<script>
		// Google map data ==============================================================================
	  $(document).ready(function(){
		$("#myMap").gMap({ controls: false,
						  scrollwheel: false,
			  draggable: true,
		  markers: [{ latitude: 37.748582,  		//your company location latitude 
					  longitude: -122.418411,		//your company location longitude
					  icon: { image: "http://www.google.com/mapfiles/marker.png",
							  iconsize: [42, 48],
							  iconanchor: [42,48],
							  infowindowanchor: [14, 0] } },
					],
		  icon: { image: "http://www.google.com/mapfiles/marker.png", 
				  iconsize: [28, 48],
				  iconanchor: [14, 48],
				  infowindowanchor: [14, 0] },
		  latitude: 37.748582,
		  longitude: -122.418411,
		  zoom: 16, });
	  });
	</script>
	

</head>
<body>
<?php include('mainheader.php'); ?>
<!--Header Ends================================================ -->
<section id="mapSection"> 
<div id="myMap" style="height:300px">
<!-- please edit in (js code which is available in the foote section) longitude and longitude of your location  -->
</div>	
</section>
<!-- Page banner -->
<!--
<section id="bannerSection" style="background:url(themes/images/banner/contact.png) no-repeat center center #000;">
	<div class="container" >	
		<h1 id="pageTitle">Contact <small> :We love to hear from you</small> 
		<span class="pull-right toolTipgroup">
			<a href="#" data-placement="top" data-original-title="Find us on via facebook"><img style="width:45px" src="themes/images/facebook.png" alt="facebook" title="facebook"></a>
			<a href="#" data-placement="top" data-original-title="Find us on via twitter"><img style="width:45px" src="themes/images/twitter.png" alt="twitter" title="twitter"></a>
			<a href="#" data-placement="top" data-original-title="Find us on via youtube"><img style="width:45px" src="themes/images/youtube.png" alt="youtube" title="youtube"></a>
		</span>
		</h1>
	</div>
</section> 
-->
<!-- Page banner end -->

<section id="bodySection"> 	
	<div class="container">					
	<div class="row">
			<div class="span4">
			<h3>  Mailing Address </h3>
			<?php
				// Load in our navigation links from the MySQL database
				require("db1.php");
				$sql = "SELECT * FROM details";
				$result = $conn->query($sql) or die(mysqli_error());
				if($result){
					while($row = $result->fetch_object()){
					echo $row->address;
					echo '<br>';
					echo $row->email;
					echo '<br>';
					echo 'Tel';
					echo $row->phone;
					echo '<br>';
					echo 'Fax';
					echo $row->fax;
					}
				}
					?>	
			</div>
			<div class="span4">
					<h3> Opening Hours</h3>
					<h4> Monday - Friday</h4>
					09:00am - 09:00pm<br/><br/>
					<h4>Saturday</h4>
					09:00am - 07:00pm<br/><br/>
					<h4>Sunday</h4>
					Off<br/><br/>
			</div>
			<div class="span4">
				<h3>  Email Us</h3>
				<form class="form-horizontal" action='contactedus.php' method="post">
				<fieldset>
				  <div class="control-group">
				   
					  <input type="text" name="name" placeholder="name" class="input-xlarge"/>
				   
				  </div>
				   <div class="control-group">
				   
					  <input type="text" name="email" placeholder="email" class="input-xlarge"/>
				   
				  </div>
				   <div class="control-group">
				   
					  <input type="text" name="subject" placeholder="subject" class="input-xlarge"/>
				  
				  </div>
				  <div class="control-group">
					  <textarea rows="4" id="textarea" name="message" class="input-xlarge"></textarea>
				   
				  </div>

					<button class="btn btn-large" type="submit"> <i class="icon-envelope"></i> Send Message</button>

				</fieldset>
			  </form>
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