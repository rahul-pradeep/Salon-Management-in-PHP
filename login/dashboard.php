<?php

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
		 <link rel="stylesheet" href="../reg/css/my-login.css">
		 <style>

			table{
				margin : 50px 300px 200px;
				background-color: white;
 				border-radius: 6px;
  				box-shadow: 0 0.5em 1em -0.125em rgba(10, 10, 10, 0.1), 0 0px 0 1px rgba(10, 10, 10, 0.02);
  				color: #4a4a4a;
				display: block;
  				padding: 1.5rem;
			}

			tbody tr{
				
					background-color: silver;
			border-radius: 6px;
			box-shadow: 0 0.5em 1em -0.125em rgba(10, 10, 10, 0.1), 0 0px 0 1px rgba(10, 10, 10, 0.02);
			color: #4a4a4a;
			display: block;
			padding: 1.5rem;
			margin : 10px auto;
			}
			tbody td{
				padding-left:30px;
				padding-right:30px;
			}

	</style>
		 
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

		  <?php
			$servername = 'localhost';
			$username = 'rahul';
			$password = 'Rahul99@';
			$dbname = 'rbeaut';

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

			$em = $_SESSION['login'];

			$typeuser = "SELECT admin from User where email='$em'";
			$typeresult = $conn->query($typeuser);
			$row_type = $typeresult->fetch_assoc();

			if($row_type["admin"]==1)
			{
				$sql = "SELECT * FROM Reservations";

				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
				echo "<table>";
			
				while($row = $result->fetch_assoc()) {
					echo "<tr><td>".$row["name"]."</td><td>".$row["contact"]."</td><td>".$row["service"]."</td><td>".$row["date"]."</td><td> ".$row["time"]."</td><td>".$row["message"]."</td></tr>";
												}
				echo "</table>";
				} 
				else {
					echo "<script type='text/javascript'> alert('No Reservations!'); </script>";
					echo "<script type='text/javascript'> window.location.href='reservation.php';</script>";
					}

			}
			else{

				$sql = "SELECT name,service,date,time FROM Reservations where email='$em'";



				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
				echo "<table>";
			
				while($row = $result->fetch_assoc()) {
					echo "<tr><td>".$row["name"]."</td><td>".$row["service"]."</td><td>".$row["date"]."</td><td> ".$row["time"]."</td></tr>";
				}
				echo "</table>";
			} else {
				echo "<script type='text/javascript'> alert('No Reservations!'); </script>";
			echo "<script type='text/javascript'> window.location.href='reservation.php';</script>";
			}


			}


			$conn->close();
			?> 



		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/jquery.scrolly.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/main.js"></script>

	</body>
</html>