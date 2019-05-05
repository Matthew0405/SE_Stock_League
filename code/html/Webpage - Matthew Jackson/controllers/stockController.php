<?php

session_start();

require 'config/database.php';

$errors = array();

$sql = "SELECT * FROM stockList";
$sql2 = "SELECT * FROM amount";
$result = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sql2);

//check if the user clicks on the purchase stock button
if (isset($_POST['confirmPurchase-btn'])) {
	#$amount = $_POST['amount'];

	//validation
	/*if (empty($amount)){
		$errors['amount'] = "Amount required";
	}*/
	
	if (count($errors) == 0){
		$stockPurchased = true;
		#$currentBalance = $startingbalance;
		
		#$sql = "INSERT INTO userStocks (amount) VALUES (?)";
		$stmt = $conn->prepare($sql);
		#$stmt->bind_param('i', $amount);
		
		
		if ($stmt->execute()){
			//Purchase stock
			#$stock_id = $conn->insert_id;
			#$_SESSION['id'] = $stock_id;
			#$_SESSION['amount'] = $amount;
			#$_SESSION['currentBalance'] = $currentBalance - ($price * $amount);
						
			//Flash message
			$_SESSION['message2'] = "The stock has successfully been purchased.";
			$_SESSION['alert-class'] = "alert-success";
			header('location: stockPurchased.php');
			exit();
		} else {
			$errors['db_error'] = "Database Error: Failed to purchase stock";
		}
		
	}
	
}
?>
