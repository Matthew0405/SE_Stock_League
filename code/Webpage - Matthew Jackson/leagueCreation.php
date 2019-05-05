<?php require_once 'controllers/leagueController.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="signup.css">
	
	<title>League Creation</title>
</head>

	<body>
	
	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4 form-div">
				<form action="leagueCreation.php" method="post">
					<h3 class="text-center">Create a League</h3>
					
					<?php if(count($errors) > 0): ?>
						<div class="alert alert-danger">
							<?php foreach($errors as $error): ?>
								<li><?php echo $error; ?></li>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
					
					<div class="form-group">
						<label for="leaguename">League Name</label>
						<input type="text" name="leaguename" class="form-control form-control-lg">
					</div>
					<div class="form-group">
						<label for="startingbalance">Investor Starting Balance</label>
						<input type="number" name="startingbalance" class="form-control form-control-lg">
					</div>
					<div class="form-group">
						<label for="leaguemanager">League Manager</label>
						<input type="text" name="leaguemanager" class="form-control form-control-lg">
					</div>
					<div class="form-group">
						<label for="leagueDescrip">League Description</label>
						<input type="text" name="leagueDescrip" class="form-control form-control-lg">
					</div>
					<div class="form-group">
						<button type="submit" name="leagueCreation-btn" class="btn btn-primary btn-block btn-lg">Create League</button>
					</div>
					<p class="text-center"><a href="homepage.php">Return to Homepage</a></p>
				</form>
			</div>
		</div>
	</div>
				
</body>
				
</html>