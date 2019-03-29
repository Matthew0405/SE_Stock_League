<!DOCTYPE html>
<html lang="en>

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="signup.css">
	
	<title>Login</title>
</head>

	<body>
	
	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4 form-div login">
				<form action="login.php" method="post">
					<h3 class="text-center">Login</h3>
					
					<!-- <div class="alert alert-danger">
						<li>Username Required</li>
					</div> -->
					
					<div class="form-group">
						<label for="username">Username or Email</label>
						<input type="text" name="username" class="form-control form-control-lg">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control form-control-lg">
					</div>
					<div class="form-group">
						<button type="submit" name="login-btn" class="btn btn-primary btn-block btn-lg">Login</button>
					</div>
					<p class="text-center">Not a Member? <a href="signup.php">Sign Up</a></p>
				</form>
			</div>
		</div>
	</div>
				
</body>
				
</html>