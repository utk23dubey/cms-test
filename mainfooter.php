<section id="footerSection">
<div class="container">
    <footer class="footer well well-small">
	<div class="row-fluid">
	<div class="span4">
			<h4>Newsletter and Subscription</h4>
			<h5>Our aim</h5>
			<em>
			"To provide affordable web design and development services for different devices is our aim, 
			that fully meet your requirements." <br/><br/>
			</em>
			<h5>What our client say?</h5>
			<em>
			" I can confirm, bougth the theme a couple of days afo and it is really fantastic. Very flexible, very good support. I really like it."
			</em>
			<br/><br/>
			<h5>Subscription</h5>
			<form>
			<div class="input-append">
			  <input id="appendedInputButton"  placeholder="Enter your e-mail" type="text">
			  <button class="btn btn-warning" type="button">send </button>
			</div>
			</form>
		</div>
	
	<div class="span3">
			<h4>Visit us</h4>
			<?php
				// Load in our navigation links from the MySQL database
				require("db1.php");
				$sql = "SELECT * FROM details";
				$result = $conn->query($sql) or die(mysqli_error());
				if($result){
					while($row = $result->fetch_object()){
					echo '<address style="margin-bottom:15px;">
			<strong><a href="index.html" title="business"><i class=" icon-home"></i> Business (p.) Ltd. </a></strong><br>';
					echo $row->address;
					echo '<br>';
                    echo '</address>';
                    echo 'Phone: <i class="icon-phone-sign"></i> &nbsp;';
                    echo $row->phone;
                    echo '</a><br>';
                    echo 'Email: <a href="contact.html" title="contact"><i class="icon-envelope-alt"></i> ';                 
					echo $row->email;
					echo '</a><br>';
                    					}
				}
					?>			
		Link: <a href="index.html" title="Business ltd"><i class="icon-globe"></i> www.businessltd.com</a><br/><br/>
			<h5>Quick Links</h5>	
			<a href="services.php" title="services"><i class="icon-cogs"></i> Services </a><br/>
			<a href="about_us.php" title=""><i class="icon-info-sign"></i> About us </a><br/>
			<a href="portfolio.php" title="portfolio"><i class="icon-question-sign"></i> Portfolio </a><br/>

	<h5>Find us on</h5>	
	<div style="font-size:2.5em;">
		<a href="#facebook" role="button" data-toggle="modal" style="display:inline-block; width:1em"> <i class="icon-facebook-sign"> </i> </a> 
		<a href="#twitter" role="button" data-toggle="modal" title="" style="display:inline-block; width:1em"> <i class="icon-twitter-sign"> </i> </a>
		<a href="#youtube" role="button" data-toggle="modal" style="display:inline-block;width:1em"> <i class="icon-facetime-video"> </i> </a>
		<a href="#" title="" style="display:inline-block;width:1em"> <i class="icon-google-plus-sign"> </i> </a>
		<a href="#rss" role="button" data-toggle="modal" style="display:inline-block;width:1em" > <i class="icon-rss"> </i> </a>
		<!-- Facebook -->
		<div id="facebook" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="facebook" aria-hidden="true">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Facebook Header</h3>
		  </div>
		  <div class="modal-body">
			<p>"Our aim is simple - to provide affordable web design and development services for Mobile and Computer by creating websites that fully meet your requirements a professional look that inspire confidence in your customer."</p>
		  </div>
		  <div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			<button class="btn btn-primary">Save changes</button>
		  </div>
		</div>
		<!-- Twitter -->
		<div id="twitter" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="twitter" aria-hidden="true">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Twitter Header</h3>
		  </div>
		  <div class="modal-body">
			<p>"Our aim is simple - to provide affordable web design and development services for Mobile and Computer by creating websites that fully meet your requirements a professional look that inspire confidence in your customer."</p>
		  </div>
		  <div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			<button class="btn btn-primary">Save changes</button>
		  </div>
		</div>
		<!-- Rss feed -->
		<div id="rss" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="rss" aria-hidden="true">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>RSS fed header</h3>
		  </div>
		  <div class="modal-body">
			<p>"Our aim is simple - to provide affordable web design and development services for Mobile and Computer by creating websites that fully meet your requirements a professional look that inspire confidence in your customer."</p>
		  </div>
		  <div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			<button class="btn btn-primary">Save changes</button>
		  </div>
		</div>
		<!-- Youtube -->
		<div id="youtube" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="youtube" aria-hidden="true">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Youtube Vedio</h3>
		  </div>
		  <div class="modal-body">
			Vedios here
		  </div>
		  <div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			<button class="btn btn-primary">Save changes</button>
		  </div>
		</div>		
	</div>
	</div>
    </div>

	<p style="padding:18px 0 44px">&copy; 2012, allright reserved </p>
	</footer>
    </div><!-- /container -->
</section>