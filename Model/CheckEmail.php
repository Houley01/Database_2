<?php
	include '_Connection.php';
	$UserEmail = $_GET['email'];
	header('Content-Type: application/json');

		$Email = "SELECT * FROM `user` WHERE `Email` = '" . $UserEmail . "'  ;";
		$conn = dbConnect();
		$stmt = $conn->prepare($Email);
		$stmt->execute();
		$StaticEmailResults = $stmt->fetchAll(PDO::FETCH_ASSOC);


	if (isset($UserEmail)) {

		echo json_encode($StaticEmailResults);

	}else{
			echo json_encode(Array($UserEmail,false));
	}

 ?>
