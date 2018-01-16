<section id="headerSection">
	<div class="container">
		<div class="navbar">
			<div class="container">
				<button type="button" class="btn btn-navbar active" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<h1><a class="brand" href="index.html"> Business </a></h1>
				<div class="nav-collapse collapse">
				<ul class="nav pull-right">
				<?php
				// Load in our navigation links from the MySQL database
				require("db1.php");
				$sql = "SELECT name, url FROM nav";
				$result = $conn->query($sql) or die(mysqli_error());
				if($result){
					while($row = $result->fetch_object()){
						echo "<li><a href='{$row->url}'>{$row->name}</a></li>";					
					}
				}
			
			?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>