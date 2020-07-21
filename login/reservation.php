<!DOCTYPE HTML>
<html>
	<head>
		<title>RBEAUT</title>
		<meta charset="utf-8" />
		<link rel="icon" href="login/images/download.jpeg" type="image/gif">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		 <link rel="stylesheet" href="css/font-awesome.min.css"/>
		 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,700,300italic,700italic"/>
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

        <form action="POST">
          <div class="container">
            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                  <input class="input" name="name" type="text" placeholder="Full Name" required>
                </div>
              </div>
              
              
              <div class="field">
                <label class="label">Email</label>
                <div class="control ">
                  <input class="input" type="email" name="email" placeholder="abcd@gmail.com" required>
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
                <label class="label">Message</label>
                <div class="control">
                  <textarea class="textarea" name="message" placeholder="Additional Requirements"></textarea>
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

	</body>
</html>