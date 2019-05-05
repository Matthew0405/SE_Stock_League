<?php require_once 'controllers/leagueController.php'; ?>
<?php require_once 'controllers/stockController.php'; ?>

<?php $option = $_POST['symbol']; ?>
<?php while($row = mysqli_fetch_assoc($result)){if($option == $row["id"]){$stockSymbol = $row["symbol"]; $stockPrice = $row["price"];}} ?>
<?php $option2 = $_POST['stockamount']; ?>
<?php while($row2 = mysqli_fetch_assoc($result2)){if($option2 == $row2["id"]){$stockAmount = $row2["amount"];}} ?>
<?php $currentBalance = $_SESSION['startingbalance']; $totalPrice = $stockPrice * $stockAmount; $currBal = $currentBalance - $totalPrice; $finalPrice = $currentBalance - $totalPrice; ?>

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
					<?php if (isset($stockSymbol)): ?>
					<h2 class="text-center"><?php echo $stockSymbol; ?></h2>
					<?php endif; ?>
					
					<?php if (isset($stockPrice)): ?>
					<h3 class="text-center">Price: <?php echo $stockPrice; ?></h3>
					<?php endif; ?>
					
					<?php if (isset($stockAmount)): ?>
					<h3 class="text-center">Amount: <?php echo $stockAmount; ?></h3>
					<?php endif; ?>
					
					<h3 class="text-center">Balance after Purchase: <?php echo $finalPrice; ?></h3>
					
					<?php if(count($errors) > 0): ?>
						<div class="alert alert-danger">
							<?php foreach($errors as $error): ?>
								<li><?php echo $error; ?></li>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
					
					<div class="form-group">
						<button type="submit" name="confirmPurchase-btn" class="btn btn-primary btn-block btn-lg">Confirm Purchase</button>
					</div>
					<p class="text-center"><a href="homepage.php">Return to Homepage</a></p>
				</form>
			</div>
		</div>
	</div>
				
</body>
				
</html>