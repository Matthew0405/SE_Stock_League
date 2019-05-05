<?php require_once 'controllers/leagueController.php'; ?>
<?php require_once 'controllers/stockController.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="signup.css">
	
	<title><?php echo $_SESSION['leaguename']; ?></title>
</head>

	<body>
	
	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4 form-div">

				<?php if(isset($_SESSION['message2'])): ?>
				<div class="alert <?php echo $_SESSION['alert-class']; ?>">
				<?php
				echo $_SESSION['message2'];
				unset($_SESSION['message']); 
				unset($_SESSION['alert-class']);
				?>
				</div>
				<?php endif; ?>
					
				<p class="text-center"><a href="homepage.php">Return to Homepage</a></p>
			</div>
		</div>
	</div>
				
</body>
				
</html>