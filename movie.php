<!doctype html>
<html lang="en">

<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">


		<title>Movie page</title>

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

		<?php include 'Template-Header.php'; ?>
		<?php
		include 'Connection-Script.php';
		?>

 	  	<main class="main-content">
			<div class="container">
				<div class="page">
					<div class="breadcrumbs">
						<a href="index.php">Home</a>
						<a href="movie.php">Movies</a>
						<span>The Good, the Bad and the Ugly</span>
					</div>

					<div class="content">
						<div class="row">
							<div class="col-md-6">
								<?php						 
								$id = 41483;
								$sql = "
								SELECT DISTINCT title,img,rel,director,name
								FROM movie JOIN actor ON movie.director=actor.id
								JOIN casting ON casting.actorid=actor.id
								WHERE movie.id = $id";
								$result = $mysqli->query($sql)
								or die($mysqli->error."<pre>sql</pre>");
								$row = $result->fetch_assoc();
								echo "<figure class='movie-poster'><img src='$row[img]' alt='#'></figure>
								</div> <div class='col-md-6'>
									<h2 class='movie-title'>$row[title]</h2>";


								echo "<ul class='movie-meta'><li><strong>Release Date: </strong>$row[rel]</li></ul>";

								echo "<ul class='starring'>
										<li><strong>Director(s): </strong><span>$row[name]</span>";?>
										</li>
								<?php
								$id = 41483;
								$sql = "
								SELECT name
								FROM movie JOIN casting ON movie.id=casting.movieid
								JOIN actor ON casting.actorid=actor.id
								WHERE movie.id=$id ORDER BY actor.id limit 3";

								$result = $mysqli->query($sql)
								or die($mysqli->error."<pre>sql</pre>");
								echo "<li><strong>Actor(s): </strong> ";
								while ($row = $result->fetch_assoc()){
								echo "<span>$row[name].\n</span>" ;
								}?>
		 						 </li></ul></div>
		 						 </div>
								<!-- .row -->
								<?php
									 
								$id = 41483;
								$sql = "
								SELECT synopsis 
								FROM movie JOIN actor ON movie.director=actor.id
								JOIN casting ON casting.actorid=actor.id
								WHERE movie.id = $id";
								$result = $mysqli->query($sql)
								or die($mysqli->error."<pre>sql</pre>");
								$row = $result->fetch_assoc();
								echo"<div class='entry-content'><strong>Synopsis:</strong></br></br>
							    <p>$row[synopsis]</p>
								</div>"; ?>
						</div>
				</div>
			</div> <!-- .container -->

 		</main>
			<?php include 'footer.php'; ?>
		</div>
		<!-- Default snippet for navigation -->
		


		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>

</body>
</html>