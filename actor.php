
<!doctype html>
<html lang="en">

<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">


		<title>Actor page</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="custom.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

</head>

<body>

	<div id="site-content">

		<?php include 'Connection-Script.php';?>
		<?php include 'Template-Header.php';?>

		<main class="main-content">
			<div class="container">
				<div class="page">
					<div class="breadcrumbs">
						<a href="index.php">Home</a>
						<a href="actor.php">Actors</a>
						<span>Clint Eastwood</span>
					</div>

					<div class="content">
						<div class="row">
							<div class="col-md-6">	 
								<?php
								$id = 43203;
								$sql = "
								SELECT img
								FROM movie JOIN actor ON movie.director=actor.id
								WHERE actor.id=$id ";

								$result = $mysqli->query($sql)
								or die($mysqli->error."<pre>sql</pre>");
								$row = $result->fetch_assoc();
								echo "<figure class='actor-photo'><img src='$row[img]' alt='#'></figure>
								</div> <div class='col-md-6'>";
								?>
								<?php
								$id = 43203;
								$sql = "
								SELECT name
								FROM movie JOIN actor ON movie.director=actor.id
								WHERE actor.id=$id ";

								$result = $mysqli->query($sql)
								or die($mysqli->error."<pre>sql</pre>");
								$row = $result->fetch_assoc();
								echo "<h2 class='movie-title'>$row[name]<br>\n</h2>" ;?>
  
								<?php
								$id = 43203;
								$sql = "
								SELECT count(title) as movies
								FROM movie JOIN actor ON movie.director=actor.id
								WHERE actor.id=$id 
								";
								echo "</br><ul class='movie-meta'><li><strong>Number of movies: </strong>" ;
								$result = $mysqli->query($sql)
								  or die($mysqli->error);
								while ($row = $result->fetch_assoc()){
								  echo $row[movies]. "<br>\n</li></ul>";
								}?>
								<?php
								$id = 43203;
								$sql = "
								SELECT title
								FROM casting JOIN actor ON casting.actorid=actor.id
								JOIN movie ON casting.movieid=movie.id
								WHERE actor.id=$id order by rel desc limit 3";

								$result = $mysqli->query($sql)
								or die($mysqli->error."<pre>sql</pre>");
								echo "<ul class='starring'>
										<li><strong>List of movies where the actor appears: </strong><br><br>";
								while ($row = $result->fetch_assoc()){
								echo "<span>$row[title].\n</span><br>" ;
								} ?>
								</li>
								<?php
								$id = 43203;
								$sql = "
								SELECT title
								FROM movie JOIN actor ON movie.director=actor.id
								WHERE actor.id=$id limit 1 ";

								$result = $mysqli->query($sql)
								or die($mysqli->error."<pre>sql</pre>");
								echo "</br><ul class='starring'>
										<li><strong>Movies directed: </strong><br><br>";
								while ($row = $result->fetch_assoc()){
								echo "<span>$row[title]. <br>\n </span></div>" ;
								}?>
						
						</div>
				</div>
			</div> 

			<!-- .container -->

 		</main>
		<footer class="site-footer" style="padding-top:200px;">
				<div class="container">
					<div class="row"  style="padding-top:200px;">
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Help</h3>
								<ul class="no-bullet">
									<li><a href="#">Help Center</a></li>
									<li><a href="#">Get Started</a></li>
									<li><a href="#">Contact Us</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">About</h3>
								<ul class="no-bullet">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Terms of Service</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Social Media</h3>
								<ul class="no-bullet">
									<li><a href="#">Facebook</a></li>
									<li><a href="#">Twitter</a></li>
									<li><a href="#">Google+</a></li>
									<li><a href="#">Pinterest</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2" style="float:right;">
							<div class="widget">
								<h3 class="widget-title">Newsletter</h3>
								<form action="#" class="subscribe-form">
									<input type="text" placeholder="Email Address">
								</form>
							</div>
						</div>
					</div> <!-- .row -->

					<div  style="float:right;" class="colophon">Copyright 2017 designed by Phoebe. All rights reserved</div>
				</div> <!-- .container -->

			</footer>
		</div>
		<!-- Default snippet for navigation -->
		


		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>


</body>
</html>