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
		<link rel="icon" href="login/images/download.jpeg" type="image/gif">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
         <link rel="stylesheet" href="css/bulma.css"/>
         <link rel="stylesheet" href="../reg/css/my-login.css">

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

        <form method="POST" action="addreservation.php" >
          <div class="container">
            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                  <input class="input" name="name" type="text" placeholder="Full Name" required>
                </div>
              </div>
              
              <div class="field">
                <label class="label">Service</label>
                <div class="control">
                  <input class="input" type="text" name="service" placeholder="Haircut" required>
                </div>
              </div>
              
              <div class="field">
                <label class="label">Contact Details</label>
                <div class="control ">
                  <input class="input" type="text" name="mobile" placeholder="987654321" required>
                </div>
			  </div>

			  <div class="field">
				<label class="label">Date</label>
				<div class="control ">
					<input class="input" type="text" name="date" id="datepicker" required></p>
                </div>
			  </div>

			  <div class="field">
                <label class="label">Time</label>
                <div class="control ">
                  <input class="input" type="text" name="time" placeholder="9.00 AM" required>
                </div>
			  </div>
			  
                            
              <div class="field">
                <label class="label">Message</label>
                <div class="control">
                  <textarea class="textarea" name="message" placeholder="Additional Requirements (max 50 word)"></textarea>
                </div>
              </div>
              
              <div class="field">
                <div class="control">
                  <label class="checkbox">
                    <input type="checkbox" required>
                    I agree to the <a href="#">terms and conditions</a>
                  </label>
                </div>
              </div>
              
                            
              <div class="field is-grouped">
                <div class="control">
                  <button type="submit" class="button is-link">Submit</button>
                </div>
              </div>
          </div>
          
        </form>
		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/jquery.scrolly.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/main.js"></script>
			<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  			<link rel="stylesheet" href="/resources/demos/style.css">
   			<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  			<script>
  				$( function() {
  			  $( "#datepicker" ).datepicker();
 				 } );
  			</script>
		
	</body>
</html>