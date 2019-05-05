<?php require_once 'controllers/authController.php'; ?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <title>SE Stock League</title>
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
	          <li class="nav-item active"><a href="homepage.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="http://127.0.0.1:5000/users/?user=Dave" class="nav-link">Profile</a></li>
			  <li class="nav-item"><a href="leagues.php" class="nav-link">Leagues</a></li>
	          <li class="nav-item"><a href="settings.php" class="nav-link">Settings</a></li>
			  <li class="nav-item"><a href="welcome.php?logout=1" class="nav-link logout">Logout</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/home_photo.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          	<h2 class="subheading" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Learn to invest the right way.</h2>
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
            	<span>Play</span>. <span>Practice</span>. <span>Perfect</span>.
            </h1>
            <!--<p><a href="signup.php" class="btn btn-primary py-3 px-4">Join the Game</a></p>-->
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-no-pb services-section">
      <div class="container">
        <div class="row no-gutters d-flex">
          <div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
            <div class="icon"><a href="#"><span class="flaticon-auction"></span></a></div>
            <div class="media-body">
              <h3 class="heading mb-3"><a href="#">Invest in Securities</a></h3>
              <p>SE Stock League supports investing in stocks, ETFs, and mutual funds.</p>
            </div>
          </div>
          <div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
            <div class="icon"><a href="leagues.php"><span class="flaticon-lawyer"></span></a></div>
            <div class="media-body">
              <h3 class="heading mb-3"><a href="leagues.php">Participate in Leagues</a></h3>
              <p>Choose from a multitude of available leagues to join others on a journey to becoming a better investor.</p>
            </div>
          </div>
          <div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
            <div class="icon"><a href="profile.php"><span class="flaticon-money"></span></a></div>
            <div class="media-body">
              <h3 class="heading mb-3"><a href="profile.php">Analyze your Portfolio</a></h3>
              <p>View the securities that you are currently invested in and stay up date to date on their performance.</p>
            </div>
          </div>
            <div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
            <div class="icon"><a href="tutorial.php"><span class="ion-ios-help-circle-outline"></span></a></div>
            <div class="media-body">
              <h3 class="heading mb-3"><a href="tutorial.html">Investing Tutorial</a></h3>
              <p>Complete the tutorial to learn about the workings of both SE Stock League and investing.</p>
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
              		<span>View your <a href="http://127.0.0.1:5000/users/?user=Bob">portfolio</a></span>
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