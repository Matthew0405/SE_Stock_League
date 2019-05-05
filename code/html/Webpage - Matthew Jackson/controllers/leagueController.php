<?php

session_start();

require 'config/database.php';

$errors = array();

$sql3 = "SELECT * FROM leagues";

$result3 = mysqli_query($conn, $sql3);

//check if the user clicks on the league creation button
if (isset($_POST['leagueCreation-btn'])) {
	$leaguename = $_POST['leaguename'];
	$startingbalance = $_POST['startingbalance'];
	$leaguemanager = $_POST['leaguemanager'];
	$leagueDescrip = $_POST['leagueDescrip'];

	//validation
	if (empty($leaguename)){
		$errors['leaguename'] = "League name required";
	}
	if (empty($startingbalance)){
		$errors['startingbalance'] = "Starting balance required";
	}
	if (empty($leaguemanager)){
		$errors['leaguemanager'] = "League manager required";
	}
	
	if (count($errors) == 0){
		$leagueCreated = true;
		
		$sql = "INSERT INTO leagues (leaguename, startingbalance, leaguemanager, leagueCreated, leagueDescrip) VALUES (?, ?, ?, ?, ?)";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param('sdsbs', $leaguename, $startingbalance, $leaguemanager, $leagueCreated, $leagueDescrip);
		
		
		if ($stmt->execute()){
			//Register league
			$league_id = $conn->insert_id;
			$_SESSION['id'] = $league_id;
			$_SESSION['leaguename'] = $leaguename;
			$_SESSION['startingbalance'] = $startingbalance;
			$_SESSION['leaguemanager'] = $leaguemanager;
			$_SESSION['leagueCreated'] = $leagueCreated;
			$_SESSION['leagueDescrip'] = $leagueDescrip;
						
			//Flash message
			$_SESSION['message'] = "The league has successfully been created.";
			$_SESSION['alert-class'] = "alert-success";
			header('location: leagueCreated.php');
			exit();
		} else {
			$errors['db_error'] = "Database Error: Failed to create league";
		}
		
	}
	
}