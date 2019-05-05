<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SE Stock League - Tutorial</title>
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
	          <li class="nav-item"><a href="leagues.php" class="nav-link">Leagues</a></li>
	          <li class="nav-item"><a href="settings.php" class="nav-link">Settings</a></li>
			  <li class="nav-item"><a href="welcome.php?logout=1" class="nav-link logout">Logout</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/tutorial_photo.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Tutorial</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="homepage.php">Home<i class="ion-ios-arrow-forward"></i></a></span> <span>Tutorial<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

   	
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 order-md-last ftco-animate">
          	<p>
              <img src="images/practice-1.jpg" alt="" class="img-fluid">
            </p>
            <h2 class="mb-3">Overview:</h2>
            <p>Welcome to SE Stock League, otherwise known as, Super Easy Stock League!  We are here to assist you with our game, but also more importantly, help you invest. We want your experience here to be enjoyable, fun, and informative. This tutorial is designed to help you with anything you need, and give you a general idea of how our game works.</p>
            <p>Be sure to take what you learn from the game outside to the real investing world. We have structured our game to be as close to the real thing as possible. Below, you will see our FAQ and some tutorials to follow. Please mouse over whatever you have a question with, and the tutorial will do its best to explain.  Any further questions can be directed to our forum, where real users can assist you.</p>

            <div class="row mt-5 pt-5">
		          <div class="col-md-12">
		            <h2 class="mb-4 font-weight-bold">Tutorials</h2>
		          </div>
            	<div class="col-lg-6">
		        		<div class="block-2 ftco-animate">
			            <div class="flipper">
			              <div class="front" style="background-image: url(/images/person_1.jpg);">
			                <div class="box">
			                  <h2 id="faq">The FAQ</h2>
			                </div>
			              </div>
			              <div class="back">
			                <!-- back content -->
			                <blockquote>
			                  <p>1. Do you need to pay?
							  No. SE Stock League is 100% free! All you need to do is register an account.
							  2. Is the stock data real time?
							  SE Stock League does not use exactly real time data, but data is pulled every five minutes.
							  3. How can I play with my friends?
							  You can play with friends by starting a league with them.
							  4. I have been banned! How can I unlock my account?
							  Feel free to e-mail our support team to appeal your ban.</p>
			                </blockquote>
			                <div class="author d-flex">
			                  <div class="image mr-3 align-self-center">
			                    <img src="images/person_1.jpg" alt="">
			                  </div>
			                  <div class="name align-self-center">The FAQ</div>
			                </div>
			              </div>
			            </div>
			          </div>
		        	</div>
		        	<div class="col-lg-6">
		        		<div class="block-2 ftco-animate">
			            <div class="flipper">
			              <div class="front" style="background-image: url(/images/person_2.jpg);">
			                <div class="box">
			                  <h2 id="achievementHelp">How to Earn Achivements</h2>
			                </div>
			              </div>
			              <div class="back">
			                <!-- back content -->
			                <blockquote>
			                  <p>As you do more within the game, you will get achievements. In fact, you even get one for visiting this page! We have it so it automatically detects when you have achieved something and we will notify you promptly. To see your acheivements, go to your Profile/League page.</p>
			                </blockquote>
			                <div class="author d-flex">
			                  <div class="image mr-3 align-self-center">
			                    <img src="images/person_2.jpg" alt="">
			                  </div>
			                  <div class="name align-self-center">How to Earn Achievements</div>
			                </div>
			              </div>
			            </div>
			          </div>
		        	</div>
		        	<div class="col-lg-6">
		        		<div class="block-2 ftco-animate">
			            <div class="flipper">
			              <div class="front" style="background-image: url(/images/person_3.jpg);">
			                <div class="box">
			                  <h2 id="investing101">Investing 101</h2>
			                </div>
			              </div>
			              <div class="back">
			                <!-- back content -->
			                <blockquote>
			                  <p>1. Know your buying power. Make sure you always keep track of how much money you have, and what stocks you can really invest in without having all your eggs in one basket.
							  2. Diversify. Don't buy all of one stock, if it starts doing bad, your whole profile is going to go bad. Have some of everything. While diversifying lessens your gains at times, it also lessens your losses.
							  3. Research. Make sure you research why you are investing in a stock yourself. Always ask yourself why.</p>
			                </blockquote>
			                <div class="author d-flex">
			                  <div class="image mr-3 align-self-center">
			                    <img src="images/person_3.jpg" alt="">
			                  </div>
			                  <div class="name align-self-center">Investing 101</div>
			                </div>
			              </div>
			            </div>
			          </div>
		        	</div>
		        	<div class="col-lg-6">
		        		<div class="block-2 ftco-animate">
			            <div class="flipper">
			              <div class="front" style="background-image: url(/images/person_4.jpg);">
			                <div class="box">
			                  <h2 id="additionalHelp">Additional Help</h2>
			                </div>
			              </div>
			              <div class="back">
			                <!-- back content -->
			                <blockquote>
			                  <p>We understand that not everything can be anticipated. Maybe you have a question that wasn't answered here. Don't worry, we got you covered with other resources. Feel free to:
								Check out our <a <!--LINK FORUM HERE!!!-->>help forum</a>,
								E-mail our support team,
								Consider other investing resources
							  </p>
			                </blockquote>
			                <div class="author d-flex">
			                  <div class="image mr-3 align-self-center">
			                    <img src="images/person_4.jpg" alt="">
			                  </div>
			                  <div class="name align-self-center">Additional Help</div>
			                </div>
			              </div>
			            </div>
			          </div>
		        	</div>
            </div>
						


          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">
            <!-- <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div> -->
            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Categories</h3>
                <li class="active"><a href="#faq">The FAQ <span class="ion-ios-arrow-forward"></span></a></li>
                <li><a href="#achievementHelp">Achievement Help <span class="ion-ios-arrow-forward"></span></a></li>
                <li><a href="#investing101">Investing 101 <span class="ion-ios-arrow-forward"></span></a></li>
                <li><a href="#additionalHelp">Additional Help <span class="ion-ios-arrow-forward"></span></a></li>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Our Mission</h3>
              <p>At SE Stock League, our motto is money made easy. This game will make sure you can take risks and learn about the inner workings of the stockmarket, but not have any real losses.</p>
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