<!doctype html>
<html lang="en">

<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">


		<title>Search Results</title>

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

		<main class="main-content">
			<div class="container">
				<div class="page">
					<div class="breadcrumbs">
						<a href="index.php">Home</a>
							<span>Search Results</span>
					</div>
							
					<div class="movie-list">

						<?php


							$mysql_hostname = "sqlzoo.net";
							$mysql_user = "scott";
							$mysql_password = "tiger";
							$mysql_database = "movie";
							$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
							mysql_select_db($mysql_database, $bd) or die("Could not select database");


							if($_SERVER["REQUEST_METHOD"] == "POST")
							{
							$q=$_POST['q'];
							$q=mysql_escape_string($q);
							$q_fix=str_replace(" ","%",$q); // Space replacing with %
							$sql=mysql_query("SELECT img,title,synopsis,rel,year(rel) as yor  FROM movie WHERE title LIKE N'%$q_fix%' 
												 ");

							}?>

							<?php 

							while($row=mysql_fetch_array($sql))
							{
							echo "
							 		<div class='movie'>
									<figure class='movie-poster'><img src='$row[img]' alt='#'></figure>
									<div class='movie-title'><a href=''>$row[title] ($row[yor])</a></div>
									<p>$row[synopsis]</p>
									</div>";

				/*"<div id='image'><img src='$row[img]'/><h2>$row[title]($row[yor])</h2><br>
				<p>$row[synopsis]</p>"; */

							} ?>
				     </div> 
				    <!-- .movie-list --> 
 
			<div class="pagination">
							<a href="#" class="page-number prev"><i class="fa fa-angle-left"></i></a>
							<span class="page-number current">1</span>
							<a href="#" class="page-number">2</a>
							<a href="#" class="page-number">3</a>
							<a href="#" class="page-number">4</a>
							<a href="#" class="page-number">5</a>
							<a href="#" class="page-number next"><i class="fa fa-angle-right"></i></a>
						</div>
					</div>
				</div> <!-- .container -->
			</main>
			<?php include 'footer.php'; ?>
		</div>
		
</body>
</html>
