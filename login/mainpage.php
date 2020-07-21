<!-- <?php
// $servername = getenv("mysql_hostname");
// $username = getenv("mysql_username");
// $password = getenv("mysql_password");
// $dbname = getenv("mysql_database");

// $conn = new mysqli($servername, $username, $password, $dbname);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// session_start();

// if (empty($_SESSION['login'])) {
// 	echo "<script type='text/javascript'>alert('Please login first to access this page');</script>";
// 	echo "<script type='text/javascript'> window.location.href='../index.html';</script>";
// 	exit();
// }

// $sql = "SELECT Name FROM Individual where username='{$_SESSION['login']}'";
// $result = $conn->query($sql);
// $row = $result->fetch_assoc();
// $name = $row['Name'];
?>
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>HOME</title>
		<meta charset="utf-8" />
		<link rel="icon" href="login/images/download.jpeg" type="image/icon type">

		<meta name="viewport" content="width=device-width, initial-scale=1" />
		 <link rel="stylesheet" href="css/font-awesome.min.css"/>
		 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,700,300italic,700italic"/>
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

		  <div class="box" style="margin:100px 300px 75px;">
			
			  <div class="media-content">
				<div class="content">
					<p class="has-text-danger-dark content is-large" style="text-align: center;">
						WELCOME TO RBEAUT!!!!
					</p>
				</div>
				
			  </div>
			</article>
		  </div>
		
		  <div class="box" style="margin:100px 500px 75px;">
			<article class="media">
			  <div class="media">
				<figure class="image">
				  <img src="images/teacher.svg" alt="Image">
				</figure>
			  </div>
			  <div class="media-content">
				<div class="content">
				  <p>
					<br>
					<strong>
						Get styled by RBEAUT Fashion Salon experts who bring you the latest runway trends in skin, hair and makeup. Get your beauty journey started!
					</strong></p>
				</div>
				
			  </div>
			</article>
		  </div>

		
		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/jquery.scrolly.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/main.js"></script>

	</body>
</html>
