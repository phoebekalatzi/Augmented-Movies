<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Homepage</title>

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
		
		<?php
		$actual_link = 'http://'.$_SERVER['sqlzoo.net'].$_SERVER['PHP_SELF'];
		include 'Template-Header.php';
		?>

			<!-- missing header -->


			<main class="main-content">
				<div class="container">
					<div class="page">
						<div class="row">
							<div class="col-md-9">
							<h2>Popular Movies</h2>
								<div class="slider">
									<ul class="slides">
										<li><a href="#"><img src="dummy/fight-club.jpg" alt="Slide 1"></a></li>
										<li><a href="#"><img src="dummy/history-x.jpg" alt="Slide 2"></a></li>
										<li><a href="#"><img src="dummy/shawshank.jpg" alt="Slide 3"></a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3">
							<h4>Last added movies</h4>
								<div class="row">
									<div class="col-sm-6 col-md-12">
										<div class="latest-movie">
											<a href="#"><img src="images/220px-Green_mile.jpg" alt="Movie 1"></a>
										</div>
									</div>
									<div class="col-sm-6 col-md-12">
										<div class="latest-movie">
											<a href="#"><img src="images/A_Beautiful_Mind_Poster.jpg" alt="Movie 2"></a>
										</div>
									</div>
								</div>
							</div>
						</div> <!-- .row -->
						<div class="row">

						
							<div class="col-sm-6 col-md-3">
							<h2 ="margin-left:20px; "> Movie of the week </h2>
								<div class="latest-movie">
									<a href="#"><img src="images/CasablancaPoster-Gold.jpg" alt="Movie 3"></a>
								</div>
							</div> 
							<div class="row">
							<div class="col-md-6" style="margin-top: 60px;">
								<h2 class="section-title">Casablanca</h2>
								<p>It is December 2, 1941. American expatriate Rick Blaine is the proprietor of an upscale nightclub and gambling den in Casablanca. "Rick's Café Américain" attracts a varied clientele: Vichy French, Italian, and German officials; refugees desperate to reach the still neutral United States; and those who prey on them. Although Rick professes to be neutral in all matters, it is later revealed he ran guns to Ethiopia during its war with Italy and fought on the Loalist side against the fascist Nationalists in the Spanish Civil War.</p>
								
							</div>
							
						</div>
						<div> <h2> Critics favourites </h2>
							<div class="col-sm-6 col-md-3"> 
								<div class="latest-movie">
									<a href="#"><img src="dummy/star-wars.jpg" alt="Movie 4"></a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3"> 
								<div class="latest-movie">
									<a href="#"><img src="dummy/ali.jpg" alt="Movie 5"></a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="latest-movie">
									<a href="#"><img src="dummy/gone-with-the-wind.jpeg" alt="Movie 6"></a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="latest-movie">
									<a href="#"><img src="dummy/jurassic.jpg" alt="Movie 6"></a>
								</div>
							</div>
						</div>	
						</div> <!-- .row -->
						
						
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