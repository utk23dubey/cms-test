<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Business clean web templates</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link id="callCss" rel="stylesheet" href="themes/current/bootstrap.min.css" type="text/css" media="screen"/>
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="themes/css/base.css" rel="stylesheet" type="text/css">
	<style type="text/css" id="enject"></style>
</head>
<body>
<?php include('mainheader.php');?>
<!--Header Ends================================================ -->
<section id="carouselSection" style="text-align:center">
	<div id="myCarousel" class="carousel slide">
			<div class="carousel-inner">
				
									<?php

				// Load in our navigation links from the MySQL database
				$sql = "SELECT * FROM corelsection";
				$result = $conn->query($sql) or die(mysqli_error());
				if($result){
					while($row = $result->fetch_object()){
					echo '<div  style="text-align:center"  class="item">';
					echo '<div class="wrapper">';					
					echo "<img src='$row->img' alt='business webebsite template' style='height:300px'>";
					echo "<div class='carousel-caption'>";
                    echo '<h2>';
                    echo $row->heading;
                    echo '</h2>';
       echo    "<p>$row->content</p>";
	echo  "<a href='$row->url' class='btn btn-large btn-success'>$row->urlname</a>";
    echo "</div>";
    echo "</div>";
    echo '</div>';

							}
						}

				?>
		</div>
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
</section>
<!-- Sectionone ends ======================================== -->
<section id="bodySection">
<div class="container">
<div class="row">
	<h3 class="span12" style="text-align:center">Our Recent Work <small>view all projects (200+)</small></h3>
			<?php
	            $sql = "SELECT * FROM thumbnail where category='service'";
				$result = $conn->query($sql) or die(mysqli_error());
				if($result){
					while($row = $result->fetch_object()){
					echo '<div class="span4">';
					echo '<div class="thumbnail">';
					echo "<h4>";
					echo $row->header;
					echo '</h4>';
                    echo "<a href='portfolio.html'><img src='$row->img' alt='bootstrap business templates' style='height:50px'></a>";
                    echo '<p>';
                    echo '<br/>';
                    echo $row->content;
       echo    "</p>";
    echo '<div class="btn-toolbar">';
			  echo '<div class="btn-group toolTipgroup">
				<a class="btn" href="#" data-placement="right" data-original-title="send email"><i class="icon-envelope"></i></a>
				<a class="btn" href="#" data-placement="top" data-original-title="do you like?"><i class="icon-thumbs-up"></i></a>
				<a class="btn" href="#" data-placement="top" data-original-title="dont like?"><i class="icon-thumbs-down"></i></a>
				<a class="btn" href="#" data-placement="top" data-original-title="share"><i class="icon-link"></i></a>
				<a class="btn" href="portfolio.html" data-placement="left" data-original-title="browse"><i class="icon-globe"></i></a>';
			  echo '</div>';
			echo '</div>';
			echo '</div>';
			echo '</div>';

							}
						}

				?>
		</div>
	</div>
</div>
</section>
<section id="clientsSection" style="text-align:center; padding:48px 0">
<div style="text-align:center">
<h3 class="span12" style="text-align:center">Clients</h3>
</div>
<br>
<br>
<div class="container">
	<?php
				// Load in our navigation links from the MySQL database
				require("db1.php");
				$sql = "SELECT img,title FROM clients where category='none'";
				$result = $conn->query($sql) or die(mysqli_error());
				if($result){
					while($row = $result->fetch_object()){ 
				echo "<a href='#' target='_blank'><img src='$row->img' title='$row->title' style='height:50px'></a>";

				}
			}
			?>
</div>
</section>
<!-- body block end======================================== -->
 <!-- Footer
  ================================================== -->
<?php include('mainfooter.php');?>
<a href="#" class="btn" style="position: fixed; bottom: 38px; right: 10px; display: none; " id="toTop"> <i class="icon-arrow-up"></i> Go to top</a>
<?php include('secretsection.php'); ?>
<span id="themesBtn"></span>
</body>
</html>