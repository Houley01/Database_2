<?php
	include '_Connection.php';
	session_start();
	$login = "SELECT * FROM user WHERE Email = '" . $_POST['Email'] . "' AND Password = '" . $_POST['user_pass'] . "';";
	$conn = dbConnect();
	$stmt = $conn->prepare($login);
	$stmt->execute();
	$result = $stmt->fetch();

	if($stmt->rowcount() == 0) {
			$_SESSION['error'] = "Login invalid please try again";
			header('Location: ../View/index.php');
	} else {
			$_SESSION['UserID'] = $result['UserID'];
			$_SESSION['UserStatus'] = $result['UserStatus'];
			$_SESSION['FName'] = $result['F.Name'];
			$_SESSION['message'] = "Login successful";
			header('Location: ../View/index.php');
	}




 ?>
