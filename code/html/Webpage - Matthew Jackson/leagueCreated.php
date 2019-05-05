<?php require_once 'controllers/leagueController.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="signup.css">
	
	<title>League Created</title>
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
				</div>
			<?php endif; ?>
				
				<h3>League <?php echo $_SESSION['leaguename']; ?></h3>
				
				<?php if(!$_SESSION['leagueCreated']): ?>
				<div class="alert alert-warning">
					There was an error creating the league.
				</div>
				<?php endif; ?>
				
				<?php if($_SESSION['leagueCreated']): ?>
				<a href="leaguePage.php">Proceed to the league</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
				
</body>
				
</html>