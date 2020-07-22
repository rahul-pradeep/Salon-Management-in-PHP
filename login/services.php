<?php
$servername = 'localhost';
$username = 'rahul';
$password = 'Rahul99@';
$dbname = 'rbeaut';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

if (empty($_SESSION['login'])) {
	echo "<script type='text/javascript'>alert('Please login first to access this page');</script>";
	echo "<script type='text/javascript'> window.location.href='../index.html';</script>";
	exit();
}


?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>RBEAUT</title>
		<meta charset="utf-8" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/bulma.css"/>
	</head>
	<body>
		<nav class="navbar is-info" role="navigation" aria-label="main navigation">
			<div class="navbar-brand">
			  <a class="navbar-item" href="mainpage.php">
				<img src="images/download.jpeg" width="50" height="50">
			  </a>
		  
			  <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
				<span aria-hidden="true"></span>
				<span aria-hidden="true"></span>
				<span aria-hidden="true"></span>
			  </a>
			</div>
		  
			<div id="navbarBasicExample" class="navbar-menu">
			  <div class="navbar-start">
				<a class="navbar-item" href="mainpage.php">
				  RBEAUT
				</a>
		  
				<a class="navbar-item" href="services.php">
				  Our Services
				</a>
		  
			  </div>
		  
			  <div class="navbar-end">
				<div class="navbar-item">
				  <div class="buttons">
				  	<a class="button is-danger" href="reservation.php">
					  New Reservation
					</a>
					<a class="button is-light" href="dashboard.php">
						Dashboard
					</a>
					<a class="button is-light" href="logout.php">
					  Log Out
					</a>
				  </div>
				</div>
			  </div>
			</div>
          </nav>
          
		  <br><br>
			<br><br>
          <div class="container">
            <div class="tile is-ancestor">
                <div class="tile is-vertical is-12">
                  <div class="tile">
                    <div class="tile is-parent is-vertical">
                      <article class="tile is-child notification has-background-danger-dark	 box">
						<p class="title has-text-white">Hair Styling</p>
						<p></p>
						<p class="subtitle has-text-white">Haircut	- 150</p>
						<p class="subtitle has-text-white">Haircut Style Change	- 170</p>
					    <p class="subtitle has-text-white">Haircut Coloring	- 1100</p>

                      </article>
                      <article class="tile is-child notification is-warning box">
					  	<p class="title has-text-dark">Beard</p>
						<p></p>
						<p class="subtitle has-text-dark">Beard Shave	- 100</p>
						<p class="subtitle has-text-dark">Beard Style Change	- 120</p>
					    <p class="subtitle has-text-dark">Beard Coloring	- 500</p>

                      </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child notification is-danger">
						  <p class="title">Skin Treatement</p>
						  <p></p>
						  <p class="subtitle">Anti Acne Skin Treatement - 400</p>
						  <p class="subtitle">Blemish Skin Treatement - 600</p>
                          <p class="subtitle">Ozone Skin Treatement - 800</p>
                          <br>
						  <p class="title">Massage and Manicure</p>
						  <p></p>
						  <p class="subtitle">Head Massage (30min) - 200</p>
						  <p class="subtitle">Anti Stress and Manicure - 500</p>
                          <p class="subtitle">Hot Oil Body Massage - 1000</p>
						  
                        </article>
                    </div>
                    <div class="tile is-parent is-vertical">
                        <article class="tile is-child notification has-background-success box">
						<p class="title has-text-dark">Hair SPA</p>
						<p></p>
						<p class="subtitle has-text-dark">Classic Hair Spa	- 400</p>
						<p class="subtitle has-text-dark">Frizz Ease - 500</p>
					    <p class="subtitle has-text-dark">Repair & Rejuvinate - 500</p>

                        </article>
                        <article class="tile is-child notification has-background-info	 box">
						<p class="title has-text-white">Facial</p>
						<p></p>
						<p class="subtitle has-text-white">Basic Facial	- 300</p>
						<p class="subtitle has-text-white">Natural Facial - 500</p>
					    <p class="subtitle has-text-white">Special Facial - 700</p>

                        </article>
                      </div>
                  </div>
                  
                </div>
                
              </div>
          </div>
		

		
		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/jquery.scrolly.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/main.js"></script>

	</body>
</html>