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
				<form action="stockConfirm.php" method="post">
					<h2 class="text-center"><?php echo $_SESSION['leaguename']; ?></h2>
					<h3 class="text-center">Input a Symbol and Amount</h3>
					<h5 class="text-center">Starting Balance: <?php echo $_SESSION['startingbalance']; ?></h5>
					
					<?php if(count($errors) > 0): ?>
						<div class="alert alert-danger">
							<?php foreach($errors as $error): ?>
								<li><?php echo $error; ?></li>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
					
					<div class="form-group">
						<label for="symbol">Stock Symbol</label>
						<select name="symbol">
						<option value="Select a symbol" selected>Select a Symbol</option>
						<?php while($row1 = mysqli_fetch_array($result)):; ?>
						<option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?></option>
						<?php endwhile; ?>
						</select>
					</div>
					
					<div class="form-group">
						<label for="stockamount">Amount</label>
						<select name="stockamount">
						<option value="Select an amount" selected>Select an Amount</option>
						<?php while($row2 = mysqli_fetch_array($result2)):; ?>
						<option value="<?php echo $row2[0]; ?>"><?php echo $row2[1]; ?></option>
						<?php endwhile; ?>
						</select>
					</div>
					
					<div class="form-group">
						<button type="submit" name="stockPurchase-btn" class="btn btn-primary btn-block btn-lg">Purchase Stock</button>
					</div>
					<p class="text-center"><a href="homepage.php">Return to Homepage</a></p>
				</form>
			</div>
		</div>
	</div>
				
</body>
				
</html>