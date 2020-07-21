<!DOCTYPE HTML>
<html>
	<head>
		<title>HOME</title>
		<meta charset="utf-8" />
		
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
          
          <br><br>
          <div class="container is-fluid">
            <div class="tile is-ancestor">
                <div class="tile is-vertical is-12">
                  <div class="tile">
                    <div class="tile is-parent is-vertical">
                      <article class="tile is-child notification has-background-danger-dark	 box">
                        <p class="title">Vertical...</p>
                        <p class="subtitle">Top tile</p>
                      </article>
                      <article class="tile is-child notification is-warning box">
                        <p class="title">...tiles</p>
                        <p class="subtitle">Bottom tile</p>
                      </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child notification is-danger">
                          <p class="title">Wide tile</p>
                          <p class="subtitle">Aligned with the right tile</p>
                          <div class="content">
                            <!-- Content -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.</p>
                            <p>Lorem ipsum dolor sit amet, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.</p>
                            
                          </div>
                        </article>
                    </div>
                    <div class="tile is-parent is-vertical">
                        <article class="tile is-child notification has-background-success box">
                          <p class="title">Vertical...</p>
                          <p class="subtitle">Top tile</p>
                        </article>
                        <article class="tile is-child notification has-background-info	 box">
                          <p class="title">...tiles</p>
                          <p class="subtitle">Bottom tile</p>
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