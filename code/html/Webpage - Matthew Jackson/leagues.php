<?php require_once 'controllers/authController.php'; ?>
<?php require_once 'controllers/leagueController.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SE Stock League - Leagues</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="homepage.php">SE Stock League</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
			  <li class="nav-item"><?php echo $_SESSION['username']; ?></li>
	          <li class="nav-item"><a href="homepage.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="profile.php" class="nav-link">Profile</a></li>
			  <li class="nav-item active"><a href="leagues.php" class="nav-link">Leagues</a></li>
	          <li class="nav-item"><a href="settings.php" class="nav-link">Settings</a></li>
			  <li class="nav-item"><a href="welcome.php?logout=1" class="nav-link logout">Logout</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/leagues_photo.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Leagues</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="homepage.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Leagues <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

   	
    <section class="ftco-section bg-light">
    	<div class="container-fluid">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Leagues</span>
            <h2 class="mb-4">All Available Leagues</h2>
			<h2 class="mb-4"><a href="leagueCreation.php">Create a League</a></h2>
          </div>
        </div>
        <div class="row">
			<?php if($_SESSION['leagueCreated']): ?>
			<div class="col-lg-3 col-sm-6">
        		<div class="block-2 ftco-animate">
	            <div class="flipper">
	              <div class="front" style="background-image: url(/images/person_1.jpg);"> <!-- League logo will also go here-->
	                <div class="box">
	                  <h2><?php echo $_SESSION['leaguename']; ?></h2>
	                </div>
	              </div>
	              <div class="back">
	                <!-- back content -->
	                <blockquote>
	                  <p><?php echo $_SESSION['leagueDescrip']; ?></p>
	                </blockquote>
	                <div class="author d-flex">
	                  <div class="image mr-3 align-self-center">
	                    <a href="leaguePage.php"><img src="" alt="League Logo"></a>
	                  </div>
	                  <div class="name align-self-center"><a href="leaguePage.php"><?php echo $_SESSION['leaguename'] ?></a></div>
	                </div>
	              </div>
	            </div>
	          </div>
        	</div>
			<?php endif; ?>
			<?php if(!$_SESSION['leagueCreated']): ?>
        	<div class="col-lg-3 col-sm-6">
        		<div class="block-2 ftco-animate">
	            <div class="flipper">
	              <div class="front" style="background-image: url(/images/person_1.jpg);"> <!-- League logo will also go here-->
	                <div class="box">
	                  <h2>Example League 1</h2>
	                </div>
	              </div>
	              <div class="back">
	                <!-- back content -->
	                <blockquote>
	                  <p>Some Information about the league.</p>
	                </blockquote>
	                <div class="author d-flex">
	                  <div class="image mr-3 align-self-center">
	                    <img src="" alt="League Logo">
	                  </div>
	                  <div class="name align-self-center">Example League 1</div>
	                </div>
	              </div>
	            </div>
	          </div>
        	</div>
			<?php endif; ?>
        	<div class="col-lg-3 col-sm-6">
        		<div class="block-2 ftco-animate">
	            <div class="flipper">
	              <div class="front" style="background-image: url(/images/person_2.jpg);"> <!-- League logo will also go here-->
	                <div class="box">
	                  <h2>Example League 2</h2>
	                </div>
	              </div>
	              <div class="back">
	                <!-- back content -->
	                <blockquote>
	                  <p>Some information about the league.</p>
	                </blockquote>
	                <div class="author d-flex">
	                  <div class="image mr-3 align-self-center">
	                    <img src="" alt="League Logo">
	                  </div>
	                  <div class="name align-self-center">Example League 2</div>
	                </div>
	              </div>
	            </div>
	          </div>
        	</div>
        	<div class="col-lg-3 col-sm-6">
        		<div class="block-2 ftco-animate">
	            <div class="flipper">
	              <div class="front" style="background-image: url(/images/person_3.jpg);"> <!-- League logo will also go here-->
	                <div class="box">
	                  <h2>Example League 3</h2>
	                </div>
	              </div>
	              <div class="back">
	                <!-- back content -->
	                <blockquote>
	                  <p>Some information about the league.</p>
	                </blockquote>
	                <div class="author d-flex">
	                  <div class="image mr-3 align-self-center">
	                    <img src="" alt="League Logo">
	                  </div>
	                  <div class="name align-self-center">Example League 3</div>
	                </div>
	              </div>
	            </div>
	          </div>
        	</div>
        	<div class="col-lg-3 col-sm-6">
        		<div class="block-2 ftco-animate">
	            <div class="flipper">
	              <div class="front" style="background-image: url(/images/person_4.jpg);"> <!-- League logo will also go here-->
	                <div class="box">
	                  <h2>Example League 4</h2>
	                </div>
	              </div>
	              <div class="back">
	                <!-- back content -->
	                <blockquote>
	                  <p>Some information about the league.</p>
	                </blockquote>
	                <div class="author d-flex">
	                  <div class="image mr-3 align-self-center">
	                    <img src="" alt="League Logo">
	                  </div>
	                  <div class="name align-self-center">Example League 4</div>
	                </div>
	              </div>
	            </div>
	          </div>
        	</div>

        	<div class="col-lg-3 col-sm-6">
        		<div class="block-2 ftco-animate">
	            <div class="flipper">
	              <div class="front" style="background-image: url(/images/person_5.jpg);"> <!-- League logo will also go here-->
	                <div class="box">
	                  <h2>Example League 5</h2>
	                </div>
	              </div>
	              <div class="back">
	                <!-- back content -->
	                <blockquote>
	                  <p>Some information about the league.</p>
	                </blockquote>
	                <div class="author d-flex">
	                  <div class="image mr-3 align-self-center">
	                    <img src="" alt="League Logo">
	                  </div>
	                  <div class="name align-self-center">Example League 5</div>
	                </div>
	              </div>
	            </div>
	          </div>
        	</div>
        	<div class="col-lg-3 col-sm-6">
        		<div class="block-2 ftco-animate">
	            <div class="flipper">
	              <div class="front" style="background-image: url(/images/person_6.jpg);"> <!-- League logo will also go here-->
	                <div class="box">
	                  <h2>Example League 6</h2>
	                </div>
	              </div>
	              <div class="back">
	                <!-- back content -->
	                <blockquote>
	                  <p>Some information about the league.</p>
	                </blockquote>
	                <div class="author d-flex">
	                  <div class="image mr-3 align-self-center">
	                    <img src="" alt="League Logo">
	                  </div>
	                  <div class="name align-self-center">Example League 6</div>
	                </div>
	              </div>
	            </div>
	          </div>
        	</div>
        	<div class="col-lg-3 col-sm-6">
        		<div class="block-2 ftco-animate">
	            <div class="flipper">
	              <div class="front" style="background-image: url(/images/person_7.jpg);"> <!-- League logo will also go here-->
	                <div class="box">
	                  <h2>Example League 7</h2>
	                </div>
	              </div>
	              <div class="back">
	                <!-- back content -->
	                <blockquote>
	                  <p>Some information about the league.</p>
	                </blockquote>
	                <div class="author d-flex">
	                  <div class="image mr-3 align-self-center">
	                    <img src="" alt="League Logo">
	                  </div>
	                  <div class="name align-self-center">Example League 7</div>
	                </div>
	              </div>
	            </div>
	          </div>
        	</div>
        	<div class="col-lg-3 col-sm-6">
        		<div class="block-2 ftco-animate">
	            <div class="flipper">
	              <div class="front" style="background-image: url(/images/person_8.jpg);"> <!-- League logo will also go here-->
	                <div class="box">
	                  <h2>Example League 8</h2>
	                </div>
	              </div>
	              <div class="back">
	                <!-- back content -->
	                <blockquote>
	                  <p>Some information about the league.</p>
	                </blockquote>
	                <div class="author d-flex">
	                  <div class="image mr-3 align-self-center">
	                    <img src="" alt="League Logo">
	                  </div>
	                  <div class="name align-self-center">Example League 8</div>
	                </div>
	              </div>
	            </div>
	          </div>
        	</div>
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
    	</div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">SE Stock League</h2>
              <p><span class="text">A fun and beginner friendly way to learn the ins and outs of investing. Join a <a href="leagues.html">league</a> today to experience what real investing is like without the risk of losing real money.</span></p>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Meet the Team</h2>
              <ul class="list-unstyled">
                <li><a href="mailto:jbc140@scarletmail.rutgers.edu" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Joseph Coleman</a></li>
                <li><a href="mailto:mg1263@scarletmail.rutgers.edu" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Murali Gunti</a></li>
                <li><a href="mailto:mrj81@scarletmail.rutgers.edu" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Matthew Jackson</a></li>
                <li><a href="mailto:hm383@scarletmail.rutgers.edu" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Himateja Madala</a></li>
                <li><a href="mailto:am1977@scarletmail.rutgers.edu" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Andrew Marfitsin</a></li>
                <li><a href="mailto:anp123@scarletmail.rutgers.edu" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Akshaykumar Patil</a></li>
                <li><a href="mailto:pms204@scarletmail.rutgers.edu" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Paul Stanik</a></li>
                <li><a href="mailto:dw523@scarletmail.rutgers.edu" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>David Wang</a></li>

              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Profile</h2>
              <div class="opening-hours">
              	<h4>Portfolio</h4>
              	<p class="pl-3">
              		<span>View your <a href="portfolio.html">portfolio</a></span>
              	</p>
              	<h4>Achievements</h4>
              	<p class="pl-3">
              		<span>View your <a href="achievements.html">achievements</a></span>
              	</p>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Having Trouble?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="text">Try our <a href="tutorial.php">tutorial</a> to get some help.</span></li>
	                <li><a href="mailto:mrj81@scarletmail.rutgers.edu"<span class="icon icon-envelope"></span></a>Or contact our website specialist<a href="mailto:mrj81@scarletmail.rutgers.edu"><span class="text">Matthew Jackson</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>