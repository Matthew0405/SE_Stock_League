<?php require_once 'controllers/authController.php'; ?>

<!DOCTYPE html>
<html lang="en>

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="signup.css">
	
	<title>Welcome</title>
</head>

	<body>
	
	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4 form-div login">
			
			<?php if(isset($_SESSION['message'])): ?>
				<div class="alert <?php echo $_SESSION['alert-class']; ?>">
					<?php
					echo $_SESSION['message'];
					unset($_SESSION['message']); 
					unset($_SESSION['alert-class']);
					?>
					<!-- You have successfully logged in. No longer necessary since the mesmage is set from php-->
				</div>
			<?php endif; ?>
				
				<h3>Welcome to SE Stock League, <?php echo $_SESSION['username']; ?></h3>
				
				<?php if(!$_SESSION['verified']): ?>
				<div class="alert alert-warning">
					There was an error logging you in.
				</div>
				<?php endif; ?>
				
				<?php if($_SESSION['verified']): ?>
				<a href="homepage.php">Proceed to SE Stock League</a>
				<?php endif; ?>
				
				<a href="welcome.php?logout=1" class="logout">Logout</a>
			</div>
		</div>
	</div>
				
</body>
				
</html>